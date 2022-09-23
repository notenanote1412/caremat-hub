@extends('layouts.paperlayouts')

@section('content')
<div class="content">
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
                                        <input type="text" class="form-control">
                                    </div>
                                    <label>คำอธิบายคลินิก</label>
                                    <div class="form-group">
                                        <textarea type="text" class="form-control"></textarea>
                                    </div>
                                    <label>โลโก้คลินิก</label>
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="./assets1/img/image_placeholder.jpg" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..." />
                                                </span>
                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <label>เบอร์โทรคลินิก</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label>ที่อยู่คลินิก</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label>แผนที่คลินิก (Google Map)</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                    <hr>
                                    <label>Slot การจอง</label>
                                    <div class="form-group">
                                        {{-- <input type="text" class="form-control"> --}}
                                        <select class="form-control">
                                            <option>10</option>
                                            <option>15</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>60</option>
                                            <option>120</option>
                                        </select>
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
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
@endsection

@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>


<script>
    var workings = [{
            "วัน": "อาทิตย์",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "00:00",
            "End 2": "00:00",

        },
        {
            "วัน": "จันทร์",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "00:00",
            "End 2": "00:00",
        },
        {
            "วัน": "อังคาร",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "00:00",
            "End 2": "00:00",
        },
        {
            "วัน": "พุธ",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "00:00",
            "End 2": "00:00",
        },
        {
            "วัน": "พฤหัสบดี",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "00:00",
            "End 2": "00:00",
        },
        {
            "วัน": "ศุกร์",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "00:00",
            "End 2": "00:00",
        },
        {
            "วัน": "เสาร์",
            "Start 1": "00:00",
            "End 1": "00:00",
            "Start 2": "00:00",
            "End 2": "00:00",
        }
    ];


    $("#workings").jsGrid({
        width: "100%",
        height: "400px",

        editing: true,
        sorting: true,
        paging: true,

        data: workings,

        fields: [{
                name: "วัน",
                type: "text",
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
                type: "control"
            }
        ]
    });

    var holidays = [{
            "ชื่อวันหยุดนักขัตฤกษ์": "",
        },
        {
            "Holiday Name": "",
        },
        {
            "Holiday Name": "",
        },
        {
            "Holiday Name": "",
        },
        {
            "Holiday Name": "",
        },
        {
            "Holiday Name": "",
        },
        {
            "Holiday Name": "",
        }
    ];

    $("#holidays").jsGrid({
        width: "100%",
        height: "400px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,

        data: holidays,

        fields: [{
                name: "ชื่อวันหยุดนักขัตฤกษ์",
                type: "text",
                width: 150,
            },
            {
                name: "วันที่",
                type: "text",
                width: 100
            },
            {
                name: "Recurring",
                type: "text",
                width: 100
            },
            {
                type: "control"
            }
        ]
    });
</script>
@endsection