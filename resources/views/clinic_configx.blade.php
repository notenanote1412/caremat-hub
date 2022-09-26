@extends('layouts.paperlayouts')

@section('content')
    <div class="content" id="clinic">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ตั้งค่า Clinic</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <label>ชื่อคลินิก</label>
                                        <div class="form-group">
                                            {{-- <input type="text" class="form-control" value="ศูนย์สุขภาพแคร์แมท เชียงใหม่"> --}}
                                            <input type="text" class="form-control" name="clinic_name" v-model="clinic_config.clinic_name">
                                        </div>
                                        <label>คำอธิบายคลินิก</label>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="clinic_description" v-model="clinic_config.clinic_description"></textarea>
                                        </div>
                                        <label>โลโก้คลินิก</label>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../../assets_clinic_config/images/logo.png" alt="logo">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="..." />
                                                    </span>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <label>เบอร์โทรคลินิก</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="clinic_phone" v-model="clinic_config.clinic_phone">
                                            {{-- <input type="text" class="form-control" value="052-005458, 094-6297666, 061-6812164"> --}}
                                        </div>
                                        <label>ที่อยู่คลินิก</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="clinic_address" v-model="clinic_config.clinic_address">
                                        </div>
                                        <label>แผนที่คลินิก (Google Map)</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="clinic_map" v-model="clinic_config.clinic_map">
                                        </div>
                                        <hr>
                                        <label>Slot การจอง</label>
                                        <div class="form-group">
                                            {{-- <input type="text" class="form-control"> --}}
                                            <select class="form-control" name="booking_time_slot" v-model="clinic_config.booking_time_slot">
                                                <option>10</option>
                                                <option>15</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>60</option>
                                                <option>120</option>
                                            </select>
                                        </div>

                                        <div class="form-group d-flex justify-content-center align-items-center">
                                            <div class="col-md-offset-3 col-md-10">
                                                <input class="btn btn-success" style="width: 135px; margin-top: 1rem;"
                                                    type="submit" value="Save">
                                                <a href="" class="btn btn-default"
                                                    style="width: 135px; margin-top: 1rem; margin-left: 10px">Cancel</a>
                                            </div>
                                        </div>

                                        {{-- - clinic_name ชื่อคลินิก -> text
                                    - clinic_description คำอธิบายคลินิก -> text
                                    - clinic_phone เบอร์โทรคลินิก -> text
                                    - clinic_address ที่อยู่คลินิก -> text
                                    - booking_time_slot time slot -> select

                                    - services -> table services
                                        - id
                                        - clinic_id
                                        - service_name
                                        - description
                                        - picture
                                    - วันที่ให้บริการ table -> ปรับค่าได้ ใส่ช่วงเวลา
                                    - วันหยุดให้บริการ table -> เพิ่ม ลบ -> ครั้งเดียว, ซ้ำ
                                        - เซพใน ฐานข้อมูล
                                        - id, holiday_title, holiday_date, is_recurring -> edit, ลบ
                                        - ปุ่ม เพิ่ม
                                        - javascript update on change ajax Vue, React
                                    - แผนที่ google map -> text
                                    - logo clinic --}}
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="workings"></div>
                                        {{-- <div class="table-responsive">
                                        <table class="table" id="workings">
                                            <thead class="text-primary">
                                                <th class="text-center">วัน</th>
                                                <th>start1</th>
                                                <th>end1</th>
                                                <th>start2</th>
                                                <th>end2</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">อาทิตย์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">จันทร์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">อังคาร</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">พุธ</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">พฤหัสบดี</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">ศุกร์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">เสาร์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> --}}
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div id="holidays"></div>
                                        {{-- <div class="table-responsive">
                                        <table class="table" id="holidays">
                                            <thead class="text-primary">
                                                <th class="text-center">วัน</th>
                                                <th>start1</th>
                                                <th>end1</th>
                                                <th>start2</th>
                                                <th>end2</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">อาทิตย์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">จันทร์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">อังคาร</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">พุธ</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">พฤหัสบดี</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">ศุกร์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">เสาร์</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end content-->
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>
@endsection


@section('style')
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
@endsection

@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js')}}"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script>
<script>
    let vueClinic = new Vue({
        el: '#clinic',
    data: {

        clinic_data: "";
        clinic_description: "";
        clinic_logo: "";
        clinic_phone: "";
        clinic_address: "";
        booking_time_slot: "";
        clinic_map: "";
        clinic_open_date: "";

    },
    mounted(){
        this.getClinic_Config();
    },
    methods:{
        getClinic_Config(){
            //console.log("Clinic_Config Setting");
            axios.get('/ajax_getData').then(response=>{
                console.log(response);
            });
        }
    }

    })
</script>

<script>
    var workings = [{
            "วัน": "อาทิตย์",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "",
            "End 2": "",

        },
        {
            "วัน": "จันทร์",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "",
            "End 2": "",
        },
        {
            "วัน": "อังคาร",
            "Start 1": "13:00",
            "End 1": "18:30",
            "Start 2": "",
            "End 2": "",
        },
        {
            "วัน": "พุธ",
            "Start 1": "13:00",
            "End 1": "18:30",
            "Start 2": "",
            "End 2": "",
        },
        {
            "วัน": "พฤหัสบดี",
            "Start 1": "13:00",
            "End 1": "18:30",
            "Start 2": "",
            "End 2": "",
        },
        {
            "วัน": "ศุกร์",
            "Start 1": "13:00",
            "End 1": "18:30",
            "Start 2": "",
            "End 2": "",
        },
        {
            "วัน": "เสาร์",
            "Start 1": "09:10",
            "End 1": "11:30",
            "Start 2": "13:00",
            "End 2": "16:30",
        }
    ];


    $("#workings").jsGrid({
        width: "100%",
        height: "auto",

        filtering: false,
        paging: false,
        sorting: false,
        autoload: true,
        inserting: false,
        deleting: false,
        editing: true,

        data: workings,

        fields: [{
                name: "วัน",
                type: "text",
                readOnly: true,
                width: 150,
            },
            {
                name: "Start 1",
                type: "text",
                width: 100
            },
            {
                name: "End 1",
                type: "text",
                width: 100
            },
            {
                name: "Start 2",
                type: "text",
                width: 100
            },
            {
                name: "End 2",
                type: "text",
                width: 100
            },
            {
                type: "control",
                editButton: false,
                deleteButton: false,
                clearFilterButton: false,
                modeSwitchButton: false,
                width: "70px",
                deleteButtonTooltip: "Delete",
                updateButtonTooltip: "Update",
                cancelEditButtonTooltip: "Cancel edit",
                insertButtonTooltip: "Insert",
            }
        ]
    });

        var holidays = [{
                "รายการวันหยุด": "วันขึ้นปีใหม่",
                "วันที่": "01/01/2022"
            },
            {
                "รายการวันหยุด": "วันสงกรานต์",
                "วันที่": "13/04/2022"
            },
            {
                "รายการวันหยุด": "วันฉัตรมงคล",
                "วันที่": "05/05/2022"
            },
            {
                "รายการวันหยุด": "วันแม่แห่งชาติ",
                "วันที่": "12/08/2022"
            },
            {
                "รายการวันหยุด": "วันพ่อแห่งชาติ",
                "วันที่": "05/12/2022"
            },
            {
                "รายการวันหยุด": "วันรัฐธรรมนูญ",
                "วันที่": "10/12/2022"
            },
            {
                "รายการวันหยุด": "วันปิยมหาราช",
                "วันที่": "23/12/2022"
            }
        ];

        $("#holidays").jsGrid({
            width: "100%",
            height: "auto",

            filtering: false,
            paging: false,
            sorting: false,
            autoload: true,
            confirmDeleting: false,
            inserting: true,
            editing: true,

            data: holidays,

            fields: [{
                    name: "รายการวันหยุด",
                    type: "text",
                    width: 150,
                },
                {
                    name: "วันที่",
                    type: "text",
                    width: 100
                },
                {
                    name: "is_recurring",
                    title: "Recurring",
                    type: "checkbox",
                    width: "20%"
                },
                {
                    type: "control",
                    editButton: false,
                    deleteButton: true,
                    clearFilterButton: false,


                }
            ]
        });
    </script>
@endsection
