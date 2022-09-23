<?php

namespace App\Http\Controllers;

use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


use App\Models\Booking;
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




        return view('clinic_config');
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
