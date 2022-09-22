@extends('layouts.master')

@section('content')
<div class="test">
    <div class="container">
        <div id="steps">
            <div class="step active">
                <div class="step-header">
                </div>
                <div class="step-body">
                    <div class="row ">
                        <div class="col-md-8 mx-auto px-4 py-4 bg-white rounded-4">
                            <div class="check">
                                <i class="fa fa-fw fa-check fa-4x"></i>
                            </div>
                            <h5 class="font-weight-bold mb-0 text-center">การจองให้คำปรึกษาออนไลน์ของคุณสำเร็จแล้ว</h5>
                            <div class="details">
                                <div class="details-item">
                                    <span>ชื่อ</span>
                                    <strong>{{$list_booking->name}}</strong>
                                </div>
                                <div class="details-item">
                                    <span>รหัสการจอง</span>
                                    <strong>{{$list_booking->reference}}</strong>
                                </div>
                                <div class="details-item">
                                    <span>บริการ</span>
                                    <strong>{{$list_services}}</strong>
                                </div>
                                <div class="details-item">
                                    <span>วัน </span>
                                    <strong>{{$list_booking->booking_date}}</strong>
                                    <span>เวลา</span>
                                    <strong>{{$list_booking->booking_time_start}}</strong>
                                </div>
                                <div class="details-item">
                                    <span>เบอร์โทรศัพท์</span>
                                    <strong>{{$list_booking->phone}}</strong>
                                </div>
                                <div class="details-item">
                                    <span>อีเมล์</span>
                                    <strong>{{$list_booking->email}}</strong>
                                </div>
                                <div class="details-item">
                                    <span>สถานบริการ</span>
                                    <strong>แคร์แมท เชียงใหม่</strong>
                                </div>
                                <div class="details-item">
                                    <span>สถานที่</span>
                                    <strong>หมู่บ้านดาวดึงส์ (หลังธนาคารกสิกรไทยสาขาสุเทพ) ซอย 2 ถ.สุเทพ</strong>
                                </div>
                                <div class="details-item">
                                    <span>ที่อยู่</span>
                                    <strong>257/102-103 หมู่บ้านดาวดึงส์ (หลังธนาคารกสิกรไทยสาขาสุเทพ) ซอย 2 ถ.สุเทพ ต.สุเทพ จ.เชียงใหม่ 50200</strong>
                                </div>
                                <div class="details-item">
                                    <span>การเดินทาง</span>
                                    <strong>เดินทางมาทางถนนสุเทพ เส้น หลังมช เข้าซอย ธนาคารกสิกรไทย สาขาถนนสุเทพ</strong>
                                </div>
                                <div class="details-item">
                                    <span>แผนที่</span>
                                    <strong><a href="https://goo.gl/maps/2tQbmtEhayh7d4Yp7" target="_blank">Find on
                                            map</a></strong>
                                </div>

                                <div class="details-item">
                                    <span>เว็บไซต์</span>
                                    <strong><a href="https://www.caremat.org/" target="_blank">https://www.caremat.org/</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
    <script src="{{url('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js')}}"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js')}}"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
     <script src="{{url('https://kit.fontawesome.com/672dbb67e7.js')}}" crossorigin="anonymous"></script>
@endsection
