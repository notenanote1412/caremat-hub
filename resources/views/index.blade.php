
@extends('layouts.master')

@section('content')
<section class="container">
    <div class="row">
        <div class="col-md-6 d-flex flex-column content-left">
            <h1 class="title text-center">Caremat HUB</h1>
            <p class="description text-center">ลดเวลาในคลินิกจองให้ปรึกษาออนไลน์กับแคร์แมท</p>
            <div class="button-bar d-flex justify-content-center align-items-center">
                <a href="{{URL::to('/services')}}">
                    <button class="custom-btn btn-1" style="zoom: 90%">
                        <span>จองให้ปรึกษาออนไลน์</span>
                    </button>
                </a>
                <a href="https://testmenow.net" target="_blank">
                    <button class="custom-btn btn-2" style="zoom: 70%">
                        <span>จองตรวจเลือด</span>
                    </button>
                </a>
                <a href="https://www.google.co.th/" target="_blank">
                    <button class="custom-btn btn-3" style="zoom: 70%">
                        <span>ขออุปกรณ์ป้องกัน</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="owl-carousel model-images">
                <div class="img-fluid">
                    <img src="assets/images/model_1.png">
                </div>
                <div class="img-fluid">
                    <img src="assets/images/model_2.png">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{url('https://code.jquery.com/jquery-3.6.1.js')}}"></script>
    <script src="{{url('https://kit.fontawesome.com/672dbb67e7.js')}}" crossorigin="anonymous"></script>

    <!-- owl carousel js  -->
    <script src="{{url('assets/js/owl.carousel.js')}}"></script>

    <script>
      $('.owl-carousel').owlCarousel({
         animateOut: 'fadeOut',
         animateIn: 'fadeIn',
         items: 1,
         loop: true,
         autoplay: true,
         autoplayTimeout: 5000,
         autoplayHoverPause: false
      });
   </script>
@endsection






