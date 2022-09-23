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
                        <div class="col-md-4">
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
                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
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
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div id="jsGrid"></div>
                                    {{-- <div class="table-responsive">
                                        <table class="table" id="jsGrid">
                                            <thead class="text-primary">
                                                <th class="text-center">วัน</th>
                                                <th>start1</th>
                                                <th>end1</th>
                                                <th>start2</th>
                                                <th>end2</th>
                                            </thead>
                                            <tbody>
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
                                                    <td class="text-center">จันทร์</td>
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
                                                    <td class="text-center">จันทร์</td>
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
                                            </tbody>
                                        </table>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis cupiditate optio
                                    similique, obcaecati, repellat ab veritatis, sapiente alias eaque at distinctio
                                    doloremque odit quidem vero excepturi eos aperiam mollitia enim inventore beatae
                                    accusamus magnam dolorem amet earum! Optio unde fugiat veniam atque magni commodi
                                    porro nam aliquid ad? Porro minus incidunt inventore libero eos, commodi suscipit
                                    distinctio atque unde maiores nam, ullam deserunt soluta provident iusto quis
                                    officiis tempora non dignissimos dolorem! Reprehenderit omnis rerum non ullam
                                    facilis, fugit quia repudiandae, doloribus dolores autem ratione impedit. Ratione
                                    quam fuga soluta necessitatibus quibusdam nostrum quis dicta! Labore odio
                                    necessitatibus error maiores?
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

<script>
    alert(123)
    var clients = [{
            "Name": "Otto Clay",
            "Age": 25,
            "Country": 1,
            "Address": "Ap #897-1459 Quam Avenue",
            "Married": false
        },
        {
            "Name": "Connor Johnston",
            "Age": 45,
            "Country": 2,
            "Address": "Ap #370-4647 Dis Av.",
            "Married": true
        },
        {
            "Name": "Lacey Hess",
            "Age": 29,
            "Country": 3,
            "Address": "Ap #365-8835 Integer St.",
            "Married": false
        },
        {
            "Name": "Timothy Henson",
            "Age": 56,
            "Country": 1,
            "Address": "911-5143 Luctus Ave",
            "Married": true
        },
        {
            "Name": "Ramona Benton",
            "Age": 32,
            "Country": 3,
            "Address": "Ap #614-689 Vehicula Street",
            "Married": false
        }
    ];

    var countries = [{
            Name: "",
            Id: 0
        },
        {
            Name: "United States",
            Id: 1
        },
        {
            Name: "Canada",
            Id: 2
        },
        {
            Name: "United Kingdom",
            Id: 3
        }
    ];

    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,

        data: clients,

        fields: [{
                name: "Name",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "Age",
                type: "number",
                width: 50
            },
            {
                name: "Address",
                type: "text",
                width: 200
            },
            {
                name: "Country",
                type: "select",
                items: countries,
                valueField: "Id",
                textField: "Name"
            },
            {
                name: "Married",
                type: "checkbox",
                title: "Is Married",
                sorting: false
            },
            {
                type: "control"
            }
        ]
    });

</script>
@endsection
