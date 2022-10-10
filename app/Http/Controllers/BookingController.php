<?php

namespace App\Http\Controllers;

use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


use App\Models\Booking;
use App\Models\Clinic;
use App\Models\Holiday;
use App\Models\OpeningHours;


use Termwind\Components\Dd;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "ศูนย์สุขภาพแคร์แมท เชียงใหม่";

        return view('index', ['title' => $title]);
    }

    public function services()
    {
        $title = "ศูนย์สุขภาพแคร์แมท เชียงใหม่";

        return view('services', ['title' => $title]);
    }

    public function select_service(Request $request)
    {
        $title = "เชียงใหม่";
        $booking = new Booking;



        $reference = Str::random(6);

        $services = [];

        if($request->service_hiv) $services[] = $request->service_hiv;
        if($request->service_prep) $services[] = $request->service_prep;
        if($request->service_hormones) $services[] = $request->service_hormones;
        if($request->service_hepB) $services[] = $request->service_hepB;
        if($request->service_hepC) $services[] = $request->service_hepC;
        if($request->service_consult) $services[] = $request->service_consult;

        $booking->services = json_encode($services);
        $booking->reference = $reference;

        $booking->save();

        return view('time_select', compact("reference", "title"));
    }

    public function select_time(Request $request)
    {

        $title = "เชียงใหม่";

        $time_selected = $request['time_selected'];
        $reference = $request['reference'];
        $booking_slot = $request['slot'];
        $booking_date = explode(" ", $time_selected)[0];
        $booking_time_start = explode(" ", $time_selected)[1];

        if ($reference) {

            $booking = Booking::where('reference', '=', $reference)->latest()->first();
            $booking->booking_date          = $booking_date;
            $booking->booking_time_start    = $booking_time_start;
            $booking->booking_slot          = $booking_slot;

            $booking->save();

            // return $booking;
        }

        return $reference;

        return compact("title");
    }
    public function info_form(Request $request)
    {
        $title = "เชียงใหม่";


        return view('form_input', compact("title"),$request->all());
    }

    public function info_input(Request $request){

        $title = "เชียงใหม่";

        $reference = $request['reference'];
        $name = $request['name'];
        $phone = $request['phone'];
        $email = $request['email'];

        $list_services = [];

        if($reference){
            $booking = Booking::where('reference', '=', $reference)->latest()->first();

            Booking::where('reference', $reference)
            ->update([
                'name' => $name,
                'phone' => $phone,
                'email' => $email
            ]);

            return $reference;
        }
    }

    public function info_request(Request $request)
    {
        $title = "เชียงใหม่";
        $reference = $request['reference'];
        //$list_booking = Booking::all();

        $list_booking = Booking::where('reference', '=', $reference)->latest()->first();

        $list_services = implode(", ", json_decode($list_booking->services));




            //$list_booking = $booking->implode(", ", json_decode($booking->services));

            //dd($list_booking);


        return view('show_services', compact("title","list_booking","list_services"));
    }

    public function adminsignin (){

        return view('admin_signin');
    }

    public function adminpage(Request $request){

        $this->middleware('auth');

        //$booking = new Booking;
        $list_booking = Booking::all();

        $booking = Booking::all();

            foreach ($list_booking as $key => $booking)
            {
                $list_booking[$key]->services = implode(", ", json_decode($booking->services));
            }



        return view('admin_list_booking',compact("list_booking"));
    }

    public function clinic_config(){

        // $this->middleware('auth');

        $clinic = Clinic::all();
        //dd($clinic);

        return view('clinic_configx',compact("clinic"));
    }

    public function getClinic_config(){

        // $this->middleware('auth');

        $clinics = Clinic::latest()->first();

        $response = [];

        $response["clinic_id"] = $clinics->id;
        $response["clinic_name"] = $clinics->clinic_name;
        $response["clinic_description"] = $clinics->clinic_description;
        $response["clinic_logo"] = $clinics->clinic_logo;
        $response["clinic_phone"] = $clinics->clinic_phone;
        $response["clinic_address"] = $clinics->clinic_address;
        $response["booking_time_slot"] = $clinics->booking_time_slot;
        $response["clinic_map"] = $clinics->clinic_map;
        $response["clinic_open_date"] = $clinics->clinic_open_date;

        return $response;
    }

    public function getHoliday(){

        // $this->middleware('auth');

        $holiday = Holiday::all();

        $response = [];
        foreach ($holiday as $key => $item)
        {
            $obj = [];

            $obj['id']              = $item->id;
            $obj['clinic_id']       = $item->clinic_id;
            $obj['holiday_name']   = $item->holiday_title;
            $obj['holiday_date']    = $item->holiday_date;
            $obj['is_recurring']    = $item->is_recurring;

            $response[] = (object) $obj;

        }
        return $response;
    }

    public function delete_holidays(Request $request){

        // $this->middleware('auth');

        $deleted = Holiday::find($request['id']);
        $deleted->delete();

        return 'deleted';

    }
    public function insert_holidays(Request $request){

        // $this->middleware('auth');

        $holiday_title =  $request['holiday_name'];
        $holiday_date =  $request['holiday_date'];
        $is_recurring =  $request['is_recurring'];

        $holiday = new Holiday;

        $holiday->holiday_title         =  $holiday_title;
        $holiday->holiday_date          =  $holiday_date;
        $holiday->is_recurring          =  $is_recurring;

        $holiday->save();

        return 'success';

    }

    public function update_holiday(Request $request){

        // เช็ค request ว่ามาจริงมั้ย
        //return $request;
        // อัพเดทค่าจาก request เข้าฐานข้อมูล ตาม id
        // return $request['id'];

        $id = $request['id'] ;
        $clinic_id = $request['clinic_id'] ;
        $holiday_title =  $request['holiday_name'];
        $holiday_date =  $request['holiday_date'];
        $is_recurring =  $request['is_recurring'];



        if($id){
            //$clinic_id = $clinic_id ?? "";
            $holiday_title = $holiday_title ?? "";
            $holiday_date = $holiday_date ?? "";
            $is_recurring = $is_recurring ?? "";

            Holiday::where('id', $id)
            ->update([
                'clinic_id' => $clinic_id,
                'holiday_title' => $holiday_title,
                'holiday_date' => $holiday_date,
                'is_recurring' => $is_recurring,
            ]);

            $holiday = Holiday::where('id', '=', $id)->latest()->first()->get();

        }
        return  $holiday;
    }


    public function getOpening_Hours(){

        // $this->middleware('auth');

        $openingHours = OpeningHours::all();

      $response = [];

        foreach ($openingHours as $key => $item)
        {
            $obj = [];

            $obj['id']              = $item->id;
            $obj['clinic_id']       = $item->clinic_id;
            $obj['day_num']         = $key;
            $obj['time_start_1']    = $item->time_Start_1;
            $obj['time_end_1']      = $item->time_End_1;
            $obj['time_start_2']    = $item->time_Start_2;
            $obj['time_end_2']      = $item->time_End_2;

            $response[] = (object) $obj;

        }

        return $response;
    }

    public function update_workTimes(Request $request){

        // เช็ค request ว่ามาจริงมั้ย
        // อัพเดทค่าจาก request เข้าฐานข้อมูล ตาม id
        // return $request['id'];

        $id = $request['id'] ;
        $clinic_id = $request['clinic_id'] ;
        $days = $request['day_num'] ;
        $time_Start_1 = $request['time_start_1'];
        $time_End_1 = $request['time_end_1'] ;
        $time_Start_2 = $request['time_start_2'];
        $time_End_2 = $request['time_end_2'] ;

        if($clinic_id){

            $day_lists = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];

            $time_Start_1 = $time_Start_1 ?? "";
            $time_End_1 = $time_End_1 ?? "";
            $time_Start_2 = $time_Start_2 ?? "";
            $time_End_2 = $time_End_2 ?? "";

            OpeningHours::where('id', $id)
            ->update([
                'time_Start_1' => $time_Start_1,
                'time_End_1' => $time_End_1,
                'time_Start_2' => $time_Start_2,
                'time_End_2' => $time_End_2
            ]);

            $opening_hours = OpeningHours::where('id', '=', $id)->latest()->first()->get();

            return  $opening_hours;
        }
    }

    public function clinic_config_temp(){

        // $this->middleware('auth');

        return view('clinic_config');
    }

    public function edit_clinic(Request $request){
        // return ($request);
        //dd($request);

        if(isset($_FILES['clinic_logo'])){

            $ext_allow = ['png', 'jpg', 'jpeg'];

            $file_name = explode(".", $_FILES['clinic_logo']['name']);

            $ext = $file_name[1];

            $file_path = './upload_image/clinic_logo.png';

            if(in_array($ext, $ext_allow)) {

                move_uploaded_file($_FILES['clinic_logo']['tmp_name'], $file_path);
                // return $_FILES['clinic_logo'];
            }

        }

        // return $file_path;

        $clinic_id = $request->get('clinic_id');
        $clinic_name = $request->get('clinic_name');
        $clinic_description = $request->get('clinic_description');
        $clinic_logo = $file_path;
        $clinic_phone = $request->get('clinic_phone');
        $clinic_address = $request->get('clinic_address');
        $booking_time_slot = $request->get('booking_time_slot');
        $clinic_map = $request->get('clinic_map');

            // if($request->hasFile('clinic_logo')){

            //     $file = $request->file('clinic_logo');

            //     return $file->getClientOriginalName();
            //     return $file->getSize();
            //     return $file->getClientOriginalExtension();
            //     return $file;

            //     $file_name = time().'.'.$file->getClientOriginalName();
            //     $file->move(public_path('image'), $file_name);
            // }

        // return  $clinic_id;
        if($clinic_id){

            //var_dump($clinic_name);

            $clinic_config = Clinic::where('id', '=', $clinic_id)->latest()->first()->get();

            Clinic::where('id', $clinic_id)
            ->update([
                'clinic_name' => $clinic_name,
                'clinic_description' => $clinic_description,
                'clinic_logo' => $clinic_logo,
                'clinic_phone' => $clinic_phone,
                'clinic_address' => $clinic_address,
                'booking_time_slot' => $booking_time_slot,
                'clinic_map' => $clinic_map,
            ]);

            return  $clinic_config;
        }
    }

    public function fetchWorkTimes(){


            $holiday = Holiday::all();

            $clinic_holiday = [];

            foreach($holiday as $item) {

                if($item->is_recurring) {
                    $holiday_arr = explode("-", $item->holiday_date);
                    $clinic_holiday[] = date("Y") . "-".$holiday_arr[1]."-" . $holiday_arr[2];

                    continue;
                }

                $clinic_holiday[] = $item->holiday_date;

            }

            $workday = OpeningHours::all();

            $clinic_work_time = [];

            foreach($workday as $item) {

                    $clinic_work_time[$item->day_eng] = [

                        "booking_start1"  => $booking_start1 = $item->time_Start_1,
                        "booking_end1"    => $booking_end1   = $item->time_End_1 ,
                        "booking_start2"  => $booking_start2 = $item->time_Start_2,
                        "booking_end2"    => $booking_end2   = $item->time_End_2,

                    ];
            }

            $clinics = Clinic::latest()->first();
            $clinic_email = "clinic@gmail.com";
            $response = [
                "clinic_name" => $clinics->id,
                "clinic_title" => $clinics->clinic_name,
                "clinic_address" => $clinics->clinic_description,
                "clinic_phone" => $clinics->clinic_phone,
                "clinic_email" => $clinic_email,
                "clinic_booking_slot" => $clinics->booking_time_slot,
                "clinic_holiday" => $clinic_holiday,
                "clinic_work_time" => $clinic_work_time,
            ];

        return $response;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
