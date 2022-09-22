
@extends('layouts.master')


@section('content')
 <!-- service section start -->
 <section id="service">
    <div class="service_section">
        <div class="container">
            <h4 class="step_1">ขั้นตอนที่ 1</h4>
            <h5 class="service_title">เลือกบริการที่ท่านต้องการ</h5>
            <form action="/select_service" method="POST">
                @csrf
                <div class="all-cards">
                    <label class="container">
                        <input type="checkbox" value="HIV" name="service_hiv" />
                        <div class="custom-checkbox">
                            <img class="blood-image" src="https://www.svgrepo.com/show/109738/blood-donation.svg" alt="" />
                            <div class="card-label">ตรวจเลือด เอชไอวี ซิฟิลิส</div>
                        </div>
                    </label>

                    <label class="container">
                        <input type="checkbox" value="PrEP" name="service_prep" />
                        <div class="custom-checkbox">
                            <img class="prep-image" src="https://www.svgrepo.com/show/270131/health-clinic-pharmacy.svg" alt="" />
                            <div class="card-label">รับยาเพร็พ</div>
                        </div>
                    </label>

                    <label class="container">
                        <input type="checkbox" value="Hormones" name="service_hormones" />
                        <div class="custom-checkbox">
                            <img class="hormones-image" src="https://www.svgrepo.com/show/184254/genders-gender.svg" alt="" />
                            <div class="card-label">ตรวจฮอร์โมนเพศ</div>
                        </div>
                    </label>

                    <label class="container">
                        <input type="checkbox" value="HepB" name="service_hepB" />
                        <div class="custom-checkbox">
                            <img class="hep-b-image" src="https://www.svgrepo.com/show/1064/virus.svg" alt="" />
                            <div class="card-label">ตรวจ Hep B</div>
                        </div>
                    </label>

                    <label class="container">
                        <input type="checkbox" value="HepC" name="service_hepC" />
                        <div class="custom-checkbox">
                            <img class="hep-c-image" src="https://www.svgrepo.com/show/25229/virus.svg" alt="" />
                            <div class="card-label">ตรวจ Hep C</div>
                        </div>
                    </label>

                    <label class="container">
                        <input type="checkbox" value="Consult" name="service_consult" />
                        <div class="custom-checkbox">
                            <img class="consultation-image" src="https://www.svgrepo.com/show/241729/telemarketer-support.svg" alt="" />
                            <div class="card-label">ขอคำปรึกษา อื่นๆ</div>
                        </div>
                    </label>
                </div>
                <div class="btn-continue">
                    <a class="btn btn-1"><button class="custom-btn btn-4 ">ถัดไป</button></a>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
<!-- service section end -->

@endsection
@section('script')
    <script src="{{('https://kit.fontawesome.com/672dbb67e7.js')}}" crossorigin="anonymous"></script>
@endsection
