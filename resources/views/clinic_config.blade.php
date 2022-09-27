<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="" />
    <title>
        Edit Clinic | Caremat Hub

    </title>

    <link rel="icon" type="image/png" sizes="32x32" href="../../assets_clinic_config/images/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

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

    <!-- global css -->
    <link href="../../assets_clinic_config/css/app.css" rel="stylesheet" type="text/css" />
    <link href="../../assets_clinic_config/css/site.css" rel="stylesheet" type="text/css" />
    <link href="../../assets_clinic_config/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets_clinic_config/css/toastr.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets_clinic_config/css/font-awesome.min.css">
    <link href="../../assets_clinic_config/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets_clinic_config/css/bootstrap-editable.css" />

    <!-- end of global css -->

    <style>
        /* Scrollings tabs */
        .scrtabs-tab-container .nav-tabs>li>a:hover {
            background-color: rgba(242, 102, 13, 0.5);
        }

        .scrtabs-tab-container .nav-tabs>li.active>a,
        .scrtabs-tab-container .nav-tabs>li.active>a:focus,
        .scrtabs-tab-container .nav-tabs>li.active>a:hover {
            background-color: #F2660D;
            color: #fff;
        }

        /* Controls bar */
        .switch-light {
            position: relative;
            top: -2px;
            display: inline-block;
            margin: 0;
            font-size: 16px;
        }

        .switch-light>span {
            display: inline-block;
            width: 160px;
            margin: 0;
        }

        .content-header .form-inline>* {
            margin-left: 10px;
        }

        /* Loading panel */
        .loading-panel {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 16777270;
        }

        .loading-panel>div {
            position: fixed;
            top: calc(50% - 50px);
            left: calc(50% - 50px);
            margin: 0 auto;
        }
    </style>

    <!--page level css-->
    <link href="../../assets_clinic_config/css/select2.min.css" type="text/css" rel="stylesheet">
    <link href="../../assets_clinic_config/css/select2-bootstrap.css" rel="stylesheet">
    <link href="../../assets_clinic_config/css/jasny-bootstrap.css" rel="stylesheet">
    <link type="text/css" href="../../assets_clinic_config/css/bootstrap-multiselect.css" rel="stylesheet" />
    <link href="../../assets_clinic_config/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="../../assets_clinic_config/css/jsgrid.min.css" rel="stylesheet">
    <link href="../../assets_clinic_config/css/jsgrid-theme.min.css" rel="stylesheet">
    <!--end of page level css-->
</head>

@extends('layouts.paperlayouts')
@section('content')
<!-- Content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <!--main content-->
                    <div class="row">
                        <form method="POST" action="" accept-charset="UTF-8" id="frmMain" class="form-horizontal" enctype="multipart/form-data"><input name="_token" type="hidden" value="i3DQdQEPNCsUOOwzEQ9h2xRoirkIzqhAF3EOexOD">

                            <!-- CSRF Token -->
                            <input type="hidden" name="_method" value="PATCH" />
                            <input type="hidden" name="_token" value="i3DQdQEPNCsUOOwzEQ9h2xRoirkIzqhAF3EOexOD" />

                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="code" class="col-md-4 control-label">Code:</label>
                                    <div class="col-md-9">
                                        <h3 style="margin-top: 0.5rem;"><label for="code" class="label label-info">CAREMAT</label></h3>
                                        <input name="code" type="hidden" value="CAREMAT" id="code">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="name" class="col-md-4 control-label">Name:</label>
                                    <div class="col-md-12">
                                        <input style="margin-top: 0.5rem;" class="form-control required" maxlength="100" name="name" type="text" value="คลินิกเทคนิคการแพทย์แคร์แมท เชียงใหม่" id="name">

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="location_desc" class="col-md-4 control-label">Location:</label>
                                    <div class="col-md-12">
                                        <input style="margin-top: 0.5rem;" class="form-control required" maxlength="500" name="location_desc" type="text" value="ตรงข้ามสาธารณสุขเชียงใหม่ สี่แยก นิมมาน - กองบิน" id="location_desc">

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address_desc" class="col-md-4 control-label">Address:</label>
                                    <div class="col-md-12">
                                        <textarea style="margin-top: 0.5rem;" class="form-control" maxlength="500" rows="3" name="address_desc" cols="50" id="address_desc">คลินิกเทคนิคการแพทย์แคร์แมท เชียงใหม่,  257/102-103 หมู่บ้านดาวดึงส์ ซอย 2 ถ.สุเทพ ต.สุเทพ จ.เชียงใหม่ 50200</textarea>

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="email" class="col-md-4 control-label">E-Mail:</label>
                                    <div class="col-md-12">
                                        <input style="margin-top: 0.5rem;" class="form-control required" maxlength="500" name="email" type="text" value="champ08659@gmail.com;leeyongku@gmail.com ;mnecaremat@gmail.com,panuwat.122523@gmail.com" id="email">

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="phone_num" class="col-md-4 control-label">Phone Number:</label>
                                    <div class="col-md-12">
                                        <input style="margin-top: 0.5rem;" class="form-control required" maxlength="500" name="phone_num" type="text" value="052005458, 0946297666, 0616812164" id="phone_num">

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="website_url" class="col-md-4 control-label">Website URL:</label>
                                    <div class="col-md-12">
                                        <input style="margin-top: 0.5rem;" class="form-control required" maxlength="500" name="website_url" type="text" value="http://www.caremat.org" id="website_url">

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="map_url" class="col-md-4 control-label">Map URL:</label>
                                    <div class="col-md-12">
                                        <input style="margin-top: 0.5rem;" class="form-control required" maxlength="1000" name="map_url" type="text" value="http://bit.ly/2HtH4Xf" id="map_url">

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="directions_desc" class="col-md-4 control-label">Directions:</label>
                                    <div class="col-md-12">
                                        <textarea style="margin-top: 0.5rem;" class="form-control" maxlength="750" rows="3" name="directions_desc" cols="50" id="directions_desc">★★★ หมายเหตุ : เมื่อท่านไปถึงคลินิก/ศูนย์บริการ โปรดแจ้งเจ้าหน้าที่ว่ามาจากการนัดผ่าน TestMeNow

✔ สี่แยกนิมมานเหมินทร์ - กองบินตัดใหม่ ตรงข้ามสาธารณสุขจังหวัด ซอยข้างธนาคารกสิกรไทย ตรงเข้ามา เลี้ยวขวา และ เลี้ยวซ้าย อาคารสีเทา (มีป้ายบอกทางหน้าซอย)</textarea>

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="first_name" class="col-md-4 control-label">Time Slot Length:</label>
                                    <div class="col-md-4" style="width: 140px">
                                        <select style="margin-top: 0.5rem;" class="form-control select2" title="Time Slot Length (min)" name="res_time_slot_length" id="res_time_slot_length" required>
                                            <option value="10">10 min</option>
                                            <option value="15" selected="selected">15 min</option>
                                            <option value="20">20 min</option>
                                            <option value="30">30 min</option>
                                            <option value="60">60 min</option>
                                            <option value="90">90 min</option>
                                            <option value="120">120 min</option>
                                            <option value="150">150 min</option>
                                            <option value="180">180 min</option>
                                            <option value="240">240 min</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-md-6 control-label">HIVST staff phone number :</label>
                                    <div class="col-md-12">
                                        <input style="margin-top: 0.5rem;" class="form-control required" maxlength="100" name="hivst_staff_phone_number" type="text" value="081-681-2164 or LINE ID @076btrcb">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-10">
                                        <input class="btn btn-success" style="width: 135px; margin-top: 1rem;" type="submit" value="Save">
                                        <a href="" class="btn btn-default" style="width: 135px; margin-top: 1rem; margin-left: 10px">Cancel</a>
                                    </div>
                                </div>

                                <script>
                                    // Check the reservation texts container
                                    var reservationTextsContainerCheck = function() {
                                        var checked = $("#res_options").is(":checked");
                                        $("#resOptionsTextContainer")
                                            .css("display", checked ? "" : "none");
                                    };

                                    $(function() {

                                        reservationTextsContainerCheck();
                                        $("#res_options")
                                            .on("change", function() {
                                                reservationTextsContainerCheck();
                                            });

                                        $("#offer_hivst").on('click', function() {
                                            if (!$(this).is(':checked')) {
                                                $("#hivst_curr_disabled").prop("checked", false);
                                            }
                                        });

                                    });
                                </script>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Working hours </h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--main content-->
                                        <div class="row">

                                            <div id="grdWorkTimes"></div>

                                            <input type="hidden" id="workTimesData" name="workTimesData" />
                                        </div>
                                    </div>
                                </div>

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

                                        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

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
                                                    title: "Day",
                                                    type: "day_num",
                                                    align: "center",
                                                    readOnly: true,
                                                    width: "30%"
                                                },
                                                {
                                                    name: "time_start_1",
                                                    title: "Start at",
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
                                                    title: "End at",
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
                                                    title: "Start at",
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
                                                    title: "End at",
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
                                            ]
                                        });
                                    });
                                </script>

                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Holidays and closed days </h3>
                                    </div>
                                    <div class="panel-body">

                                        <!--main content-->
                                        <div class="row">
                                            <div id="grdHolidays"></div>

                                            <input type="hidden" id="holidaysData" name="holidaysData" />
                                        </div>
                                    </div>
                                </div>

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
                                                    title: "Holiday name",
                                                    type: "text",
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
                                                    title: "Date",
                                                    type: "holiday_date",
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



                            </div>

                        </form>
                    </div>
                    <!--main content end-->
                </div>
            </div>
        </div>
    </div>
    <!--row end-->
</section>



<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top non-printable" role="button" title="Return to top" style="display: none;" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>

<!-- Loading panel -->
<div class="loading-panel" style="display: none;">
    <div>
        <img src="../../assets_clinic_config/images/loading.gif" width="70" height="70" />
        <h3>Loading...</h3>
    </div>
</div>
@endsection

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
<script src="../../assets_clinic_config/js/jsgrid.min.js" type="text/javascript"></script><!-- end page level js -->
