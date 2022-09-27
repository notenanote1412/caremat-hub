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
                                                <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
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
                                            <input class="btn btn-success" style="width: 135px; margin-top: 1rem;" type="submit" value="Save">
                                            <a href="" class="btn btn-default" style="width: 135px; margin-top: 1rem; margin-left: 10px">Cancel</a>
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

<<<<<<< HEAD
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="grdWorkTimes"></div>
                                    <input type="hidden" id="workTimesData" name="workTimesData" />
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div id="grdHolidays"></div>
                                    <input type="hidden" id="holidaysData" name="holidaysData" />
                                </div>
=======
                                <!-- Show holiday Vue data -->
                                <div class="card">
                                    <div class="card-body">
                                        <div id="holidays"></div>
                                       <table class="table">
                                            <thead class="text-primary">
                                                <tr>
                                                    <th class="text-center">id</th>
                                                    <th class="text-center">title</th>
                                                    <th class="text-center">date</th>
                                                    <th class="text-center">is_recurring</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for='item in holidays'>
                                                    <td class="text-center" name="holiday_id">@{{ item.holiday_id }}</td>
                                                    <td class="text-center" name="holiday_title">@{{ item.holiday_title }}</td>
                                                    <td class="text-center" name="holiday_date">@{{ item.holiday_date }}</td>
                                                    <td class="text-center" name="is_recurring">@{{ item.is_recurring }}</td>
                                                </tr>
                                            </tbody>
                                       </table>
                                    </div>
                                </div><!-- end Show holiday-->
>>>>>>> 8760e002fb60b15cf7ac6a09e9ecf2b8624b4c59
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

<!-- global css -->
<link href="../../assets_clinic_config/css/site.css" rel="stylesheet" type="text/css" />
<link href="../../assets_clinic_config/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets_clinic_config/css/toastr.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../assets_clinic_config/css/font-awesome.min.css">
<link href="../../assets_clinic_config/css/daterangepicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../assets_clinic_config/css/bootstrap-editable.css" />

<!-- end of global css -->

@endsection

@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js')}}"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script>
<script>
    let vueClinic = new Vue({
        el: '#clinic',
<<<<<<< HEAD
        data: {
            clinic_config: {
                clinic_id: "",
                clinic_data: "",
                clinic_description: "",
                clinic_logo: "",
                clinic_phone: "",
                clinic_address: "",
                booking_time_slot: "",
                clinic_map: "",
                clinic_open_date: ""
            }
        },
        methods: {
            getClinic_Config() {
                //console.log("Clinic_Config Setting");
                axios.get('/ajax_getData').then(response => {
                    console.log(response.data);
                    this.clinic_config = response.data
                });
            }
        },
        mounted() {
            this.getClinic_Config();
        }
=======
    data: {
        clinic_config:{
            clinic_id:"",
            clinic_data: "",
            clinic_description: "",
            clinic_logo: "",
            clinic_phone: "",
            clinic_address: "",
            booking_time_slot: "",
            clinic_map: "",
            clinic_open_date: ""
        },
        holidays:{
            holiday_id:"",
            holiday_title:"",
            holiday_date:"",
            is_recurring:""
        }
    },
    methods:{
        getClinic_Config(){
            //console.log("Clinic_Config Setting");
            axios.get('/ajax_getData').then(response=>{
                console.log(response.data);
                this.clinic_config=response.data
            });
        },
        getHolidays(){
            //console.log("Clinic_Config Setting");
            axios.get('/getHoliday').then(response=>{
                console.log(response.data);
                this.holidays=response.data
            });
        }
    },
    mounted(){
        this.getClinic_Config();
        this.getHolidays();
    }
>>>>>>> 8760e002fb60b15cf7ac6a09e9ecf2b8624b4c59
    })
</script>

<!-- global js -->
<script src="../../assets_clinic_config/js/jquery.min.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/app.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/utils.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/eModal.min.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/jquery.scrolling-tabs.min.js"></script>
<script src="../../assets_clinic_config/js/moment.min.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/daterangepicker.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/bootstrap-editable.min.js" type="text/javascript"></script>
<!-- end of global js -->

<script src="../../assets_clinic_config/js/toastr.min.js"></script>
<script src="../../assets_clinic_config/js/scSlider.min.js"></script>

<!-- begin page level js -->
<script src="../../assets_clinic_config/js/moment.min.js"></script>
<script src="../../assets_clinic_config/js/jasny-bootstrap.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/select2.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/tinymce.min.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/bootstrap-colorpicker.min.js" type="text/javascript"></script>

<script src="../../assets_clinic_config/js/clinics.js" type="text/javascript"></script>
<script src="../../assets_clinic_config/js/jsgrid.min.js" type="text/javascript"></script>
<!-- end page level js -->

<script>
    $(function() {
        $("#frmMain").on('submit', function() {
            $("#workTimesData").val(JSON.stringify($("#grdWorkTimes").jsGrid("option", "data")));
        });

        var workTimes = [{
            "id": 142,
            "clinic_id": 17,
            "day_num": 0,
            "time_start_1": "00:00",
            "time_end_1": "00:00",
            "time_start_2": null,
            "time_end_2": null
        }, {
            "id": 143,
            "clinic_id": 17,
            "day_num": 1,
            "time_start_1": "00:00",
            "time_end_1": "00:00",
            "time_start_2": null,
            "time_end_2": null
        }, {
            "id": 144,
            "clinic_id": 17,
            "day_num": 2,
            "time_start_1": "13:00",
            "time_end_1": "18:30",
            "time_start_2": null,
            "time_end_2": null
        }, {
            "id": 145,
            "clinic_id": 17,
            "day_num": 3,
            "time_start_1": "13:00",
            "time_end_1": "18:30",
            "time_start_2": null,
            "time_end_2": null
        }, {
            "id": 146,
            "clinic_id": 17,
            "day_num": 4,
            "time_start_1": "13:00",
            "time_end_1": "18:30",
            "time_start_2": null,
            "time_end_2": null
        }, {
            "id": 147,
            "clinic_id": 17,
            "day_num": 5,
            "time_start_1": "13:00",
            "time_end_1": "18:30",
            "time_start_2": null,
            "time_end_2": null
        }, {
            "id": 148,
            "clinic_id": 17,
            "day_num": 6,
            "time_start_1": "09:10",
            "time_end_1": "11:30",
            "time_start_2": "13:00",
            "time_end_2": "16:30"
        }];

        var WorkTimeField = function(config) {
            jsGrid.Field.call(this, config);
        };

        WorkTimeField.prototype = new jsGrid.Field({
            css: "date-field",
            align: "center",
            editTemplate: function(value) {
                this._editPicker = $("<input class='form-control' data-mask='99:99'>");
                this._editPicker.val(value);
                return this._editPicker;
            },
            editValue: function() {
                var value = this._editPicker.val();
                if (value == "__:__") return "";
                return value;
            }
        });
        jsGrid.fields.work_time = WorkTimeField;

        var DayNumField = function(config) {
            jsGrid.Field.call(this, config);
        };
        DayNumField.prototype = new jsGrid.Field({
            itemTemplate: function(value) {
                return days[value];
            },
            editTemplate: function(value) {
                return days[value];
            }
        });
        jsGrid.fields.day_num = DayNumField;

        var days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];

        var timeValidation = function(value, item) {
            if (value.length == 0) return true;
            return /^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/.test(value);
        };

        $("#grdWorkTimes").jsGrid({
            height: "auto",
            width: "100%",

            filtering: false,
            paging: false,
            sorting: false,
            autoload: true,
            inserting: false,
            deleting: false,
            editing: true,
            data: workTimes,
            invalidNotify: function(args) {},
            fields: [{
                    name: "day_num",
                    title: "วัน",
                    type: "day_num",
                    align: "center",
                    readOnly: true,
                    width: "30%"
                },
                {
                    name: "time_start_1",
                    title: "Start 1",
                    type: "work_time",
                    width: "18%",
                    validate: [{
                            validator: "required",
                            message: function(value, item) {
                                return "Field is required";
                            }
                        },
                        {
                            validator: timeValidation,
                            message: function(value, item) {
                                return "Field is required";
                            }
                        }
                    ]
                },
                {
                    name: "time_end_1",
                    title: "End 1",
                    type: "work_time",
                    width: "18%",
                    validate: [{
                            validator: "required",
                            message: function(value, item) {
                                return "Field is required";
                            }
                        },
                        {
                            validator: timeValidation,
                            message: function(value, item) {
                                return "Field is required";
                            }
                        }
                    ]
                },
                {
                    name: "time_start_2",
                    title: "Start 2",
                    type: "work_time",
                    width: "17%",
                    validate: {
                        validator: timeValidation,
                        message: function(value, item) {
                            debugger;
                            return "Field is required";
                        }
                    }
                },
                {
                    name: "time_end_2",
                    title: "End 2",
                    type: "work_time",
                    width: "17%",
                    validate: {
                        validator: timeValidation,
                        message: function(value, item) {
                            return "Field is required";
                        }
                    }
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
            ],
            onItemUpdating: function(args) {
                // cancel update of the item with empty 'name' field
                console.log(args.item)
                // if (args.item.name === "") {
                //     args.cancel = true;
                //     alert("Specify the name of the item!");
                // }
            }
        });
    });
</script>

<script>
    $(function() {
        $("#frmMain").on('submit', function() {
            $("#holidaysData").val(JSON.stringify($("#grdHolidays").jsGrid("option", "data")));
        });

        var holidays = [{
            "id": 121114,
            "clinic_id": 17,
            "holiday_name": "New Year\u2019s Day",
            "holiday_date": "2018-01-01",
            "is_recurring": 1
        }, {
            "id": 121115,
            "clinic_id": 17,
            "holiday_name": "National Labour Day",
            "holiday_date": "2018-05-01",
            "is_recurring": 1
        }, {
            "id": 121116,
            "clinic_id": 17,
            "holiday_name": "Birthday for King Rama 10",
            "holiday_date": "2018-07-28",
            "is_recurring": 1
        }, {
            "id": 121117,
            "clinic_id": 17,
            "holiday_name": "H.M. the Queen\u2019s Birthday",
            "holiday_date": "2018-08-12",
            "is_recurring": 1
        }, {
            "id": 121118,
            "clinic_id": 17,
            "holiday_name": "Chulalongkorn Day",
            "holiday_date": "2018-10-23",
            "is_recurring": 1
        }, {
            "id": 121119,
            "clinic_id": 17,
            "holiday_name": "National Father\u2019s Day",
            "holiday_date": "2018-12-05",
            "is_recurring": 1
        }, {
            "id": 121120,
            "clinic_id": 17,
            "holiday_name": "New Year 25 Dec",
            "holiday_date": "2018-12-25",
            "is_recurring": 0
        }, {
            "id": 121121,
            "clinic_id": 17,
            "holiday_name": "New Year 26 Dec",
            "holiday_date": "2018-12-26",
            "is_recurring": 0
        }, {
            "id": 121122,
            "clinic_id": 17,
            "holiday_name": "New Year 27 Dec",
            "holiday_date": "2018-12-27",
            "is_recurring": 0
        }, {
            "id": 121123,
            "clinic_id": 17,
            "holiday_name": "New Year 28 Dec",
            "holiday_date": "2018-12-28",
            "is_recurring": 0
        }, {
            "id": 121124,
            "clinic_id": 17,
            "holiday_name": "New Year 29 Dec",
            "holiday_date": "2018-12-29",
            "is_recurring": 0
        }, {
            "id": 121125,
            "clinic_id": 17,
            "holiday_name": "New Year\u2019s Eve",
            "holiday_date": "2018-12-31",
            "is_recurring": 1
        }, {
            "id": 121126,
            "clinic_id": 17,
            "holiday_name": "New Year 02 Jan",
            "holiday_date": "2019-01-02",
            "is_recurring": 0
        }, {
            "id": 121127,
            "clinic_id": 17,
            "holiday_name": "Songkran Festival6",
            "holiday_date": "2019-04-11",
            "is_recurring": 0
        }, {
            "id": 121128,
            "clinic_id": 17,
            "holiday_name": "Songkran Festival4",
            "holiday_date": "2019-04-16",
            "is_recurring": 0
        }, {
            "id": 121129,
            "clinic_id": 17,
            "holiday_name": "Songkran Festival5",
            "holiday_date": "2019-04-17",
            "is_recurring": 0
        }, {
            "id": 121130,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2019-12-27",
            "is_recurring": 0
        }, {
            "id": 121131,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2019-12-28",
            "is_recurring": 0
        }, {
            "id": 121132,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2019-12-29",
            "is_recurring": 0
        }, {
            "id": 121133,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2019-12-30",
            "is_recurring": 0
        }, {
            "id": 121134,
            "clinic_id": 17,
            "holiday_name": "\u0e21\u0e32\u0e06\u0e1a\u0e39\u0e0a\u0e32",
            "holiday_date": "2020-02-08",
            "is_recurring": 0
        }, {
            "id": 121135,
            "clinic_id": 17,
            "holiday_name": "Coronation Day",
            "holiday_date": "2020-05-04",
            "is_recurring": 0
        }, {
            "id": 121136,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e2d\u0e32\u0e2a\u0e32\u0e2c\u0e2b\u0e1a\u0e39\u0e0a\u0e32",
            "holiday_date": "2020-07-05",
            "is_recurring": 0
        }, {
            "id": 121137,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e40\u0e02\u0e49\u0e32\u0e1e\u0e23\u0e23\u0e29\u0e32",
            "holiday_date": "2020-07-06",
            "is_recurring": 0
        }, {
            "id": 121138,
            "clinic_id": 17,
            "holiday_name": "\u0e1b\u0e34\u0e14\u0e1b\u0e23\u0e30\u0e0a\u0e38\u0e21\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48",
            "holiday_date": "2020-08-11",
            "is_recurring": 0
        }, {
            "id": 121139,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e0a\u0e14\u0e40\u0e0a\u0e22\u0e2a\u0e07\u0e01\u0e23\u0e32\u0e19\u0e15\u0e4c",
            "holiday_date": "2020-09-04",
            "is_recurring": 0
        }, {
            "id": 121140,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e0a\u0e14\u0e40\u0e0a\u0e22\u0e2a\u0e07\u0e01\u0e23\u0e32\u0e19\u0e15\u0e4c",
            "holiday_date": "2020-09-05",
            "is_recurring": 0
        }, {
            "id": 121141,
            "clinic_id": 17,
            "holiday_name": "\u0e2d\u0e1a\u0e23\u0e21\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48",
            "holiday_date": "2020-09-09",
            "is_recurring": 0
        }, {
            "id": 121142,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e2b\u0e22\u0e38\u0e14\u0e0a\u0e14\u0e40\u0e0a\u0e22 \u0e15\u0e32\u0e21\u0e21\u0e15\u0e34 \u0e04\u0e23\u0e21.",
            "holiday_date": "2020-12-11",
            "is_recurring": 0
        }, {
            "id": 121143,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e0a\u0e14\u0e40\u0e0a\u0e22\u0e27\u0e31\u0e19\u0e17\u0e35\u0e485\/12\/2563",
            "holiday_date": "2020-12-12",
            "is_recurring": 0
        }, {
            "id": 121144,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e09\u0e31\u0e15\u0e23\u0e21\u0e07\u0e04\u0e25",
            "holiday_date": "2021-05-04",
            "is_recurring": 0
        }, {
            "id": 121145,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e34\u0e2a\u0e32\u0e02\u0e1a\u0e39\u0e0a\u0e32",
            "holiday_date": "2021-05-26",
            "is_recurring": 0
        }, {
            "id": 121146,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e2d\u0e32\u0e2a\u0e32\u0e2c\u0e2b\u0e1a\u0e39\u0e0a\u0e32",
            "holiday_date": "2021-07-24",
            "is_recurring": 0
        }, {
            "id": 121147,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e04\u0e25\u0e49\u0e32\u0e22\u0e27\u0e31\u0e19\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e15 \u0e23\u0e31\u0e0a\u0e01\u0e32\u0e25\u0e17\u0e35\u0e48 9",
            "holiday_date": "2021-10-13",
            "is_recurring": 0
        }, {
            "id": 121148,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e0a\u0e14\u0e40\u0e0a\u0e22",
            "holiday_date": "2021-12-07",
            "is_recurring": 0
        }, {
            "id": 121149,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e23\u0e31\u0e10\u0e18\u0e23\u0e23\u0e21\u0e19\u0e39\u0e0d",
            "holiday_date": "2021-12-10",
            "is_recurring": 0
        }, {
            "id": 121150,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2021-12-30",
            "is_recurring": 0
        }, {
            "id": 121151,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2021-12-31",
            "is_recurring": 0
        }, {
            "id": 121152,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2022-01-01",
            "is_recurring": 0
        }, {
            "id": 121153,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2022-01-02",
            "is_recurring": 0
        }, {
            "id": 121154,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2022-01-03",
            "is_recurring": 0
        }, {
            "id": 121155,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e2a\u0e34\u0e49\u0e19\u0e1b\u0e35",
            "holiday_date": "2022-01-04",
            "is_recurring": 0
        }, {
            "id": 121156,
            "clinic_id": 17,
            "holiday_name": "\u0e1b\u0e34\u0e14\u0e2d\u0e1a\u0e23\u0e21\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48",
            "holiday_date": "2022-03-16",
            "is_recurring": 0
        }, {
            "id": 121157,
            "clinic_id": 17,
            "holiday_name": "\u0e1b\u0e34\u0e14\u0e2d\u0e1a\u0e23\u0e21\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48",
            "holiday_date": "2022-03-17",
            "is_recurring": 0
        }, {
            "id": 121158,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e27\u0e31\u0e19\u0e2a\u0e07\u0e01\u0e23\u0e32\u0e19\u0e15\u0e4c",
            "holiday_date": "2022-04-13",
            "is_recurring": 0
        }, {
            "id": 121159,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e27\u0e31\u0e19\u0e2a\u0e07\u0e01\u0e23\u0e32\u0e19\u0e15\u0e4c",
            "holiday_date": "2022-04-14",
            "is_recurring": 0
        }, {
            "id": 121160,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e27\u0e31\u0e19\u0e2a\u0e07\u0e01\u0e23\u0e32\u0e19\u0e15\u0e4c",
            "holiday_date": "2022-04-15",
            "is_recurring": 0
        }, {
            "id": 121161,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14\u0e27\u0e31\u0e19\u0e2a\u0e07\u0e01\u0e23\u0e32\u0e19\u0e15\u0e4c",
            "holiday_date": "2022-04-16",
            "is_recurring": 0
        }, {
            "id": 121162,
            "clinic_id": 17,
            "holiday_name": "\u0e09\u0e31\u0e15\u0e23\u0e21\u0e07\u0e04\u0e25",
            "holiday_date": "2022-05-04",
            "is_recurring": 1
        }, {
            "id": 121163,
            "clinic_id": 17,
            "holiday_name": "Day off",
            "holiday_date": "2022-05-17",
            "is_recurring": 0
        }, {
            "id": 121164,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e40\u0e02\u0e49\u0e32\u0e1e\u0e23\u0e23\u0e29\u0e32",
            "holiday_date": "2022-07-13",
            "is_recurring": 0
        }, {
            "id": 121165,
            "clinic_id": 17,
            "holiday_name": "\u0e27\u0e31\u0e19\u0e2d\u0e32\u0e2a\u0e32\u0e2c\u0e2b\u0e1a\u0e39\u0e0a\u0e32",
            "holiday_date": "2022-07-14",
            "is_recurring": 0
        }, {
            "id": 121166,
            "clinic_id": 17,
            "holiday_name": "\u0e2b\u0e22\u0e38\u0e14",
            "holiday_date": "2022-08-13",
            "is_recurring": 0
        }];

        var HolidayDateField = function(config) {
            jsGrid.Field.call(this, config);
        };

        var holidayDate;
        HolidayDateField.prototype = new jsGrid.Field({
            css: "date-field", // redefine general property 'css'
            align: "center", // redefine general property 'align'
            sorter: function(date1, date2) {
                return new Date(date1) - new Date(date2);
            },
            itemTemplate: function(value) {
                return $.datepicker.formatDate('dd-mm-yy', new Date(value));
            },
            insertTemplate: function(value) {
                return this._insertPicker = $("<input>").daterangepicker({
                    singleDatePicker: true,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(start, end) {
                    holidayDate = start;
                });
            },
            editTemplate: function(value) {
                return this._editPicker = $("<input>").daterangepicker({
                    startDate: new Date(value),
                    singleDatePicker: true,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(start, end) {
                    holidayDate = start;
                });
            },
            insertValue: function() {
                var picker = this._insertPicker.data('daterangepicker');
                return picker.startDate.format('YYYY-MM-DD');
            },
            editValue: function() {
                var picker = this._editPicker.data('daterangepicker');
                return picker.startDate.format('YYYY-MM-DD');
            }
        });
        jsGrid.fields.holiday_date = HolidayDateField;


        $("#grdHolidays").jsGrid({
            height: "350px",
            width: "100%",

            filtering: false,
            paging: false,
            sorting: false,
            autoload: true,
            confirmDeleting: false,
            inserting: true,
            editing: true,
            data: holidays,
            invalidNotify: function(args) {},
            fields: [{
                    name: "holiday_name",
                    title: "รายการวันหยุด",
                    type: "text",
                    align: "center",
                    width: "50%",
                    validate: {
                        validator: "required",
                        message: function(value, item) {
                            return "Field is required";
                        }
                    }
                },
                {
                    name: "holiday_date",
                    title: "วันที่",
                    type: "holiday_date",
                    align: "center",
                    width: "30%",
                    validate: {
                        validator: "required",
                        message: function(value, item) {
                            return "Field is required";
                        }
                    }
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
                    modeSwitchButton: false,
                    width: "70px",
                    deleteButtonTooltip: "Delete",
                    updateButtonTooltip: "Update",
                    cancelEditButtonTooltip: "Cancel edit",
                    insertButtonTooltip: "Insert",
                }
            ]
        });
    });
</script>

<!-- <script>
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
                align: "center",
                readOnly: true,
                width: 150,
            },
            {
                name: "Start 1",
                type: "text",
                align: "center",
                width: 100
            },
            {
                name: "End 1",
                type: "text",
                align: "center",
                width: 100
            },
            {
                name: "Start 2",
                type: "text",
                align: "center",
                width: 100
            },
            {
                name: "End 2",
                type: "text",
                align: "center",
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
                align: "center",
                width: 150,
            },
            {
                name: "วันที่",
                type: "text",
                align: "center",
                width: 100
            },
            {
                name: "is_recurring",
                title: "Recurring",
                type: "checkbox",
                align: "center",
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
</script> -->
@endsection
