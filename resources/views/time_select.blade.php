@extends('layouts.master')

@section('content')
<div id="app">
    <div class="margin-top-20 margin-bottom-20" >
        <div class="container selectdatetime">
            <h4 class="step_2">ขั้นตอนที่ 2</h4>
            <h5 class="title_select">เลือก วัน-เวลา ที่ต้องการจอง</h5>
            <form @submit.prevent="time_submit()">
                <input id="reference" type="hidden" value="{{ $reference }}" placeholder="">
                @csrf
                <template v-for="slot_date in lists.date_lists">
                    <h6 class="title_timeslot text-black" v-text="date_label_thai(slot_date)"></h6>
                    <div class="timeslot mb-2">
                        <template v-for="(slot, index) in slot_arr"
                            v-if="hide_slot_pass(slot) && show_slot_each_day(slot_date, slot)">
                                <input class="checkbox-budget" type="radio" name="budget" :id="`slot_${index + 1}`" @change="time_slot_checked(slot)">
                            <label class="for-checkbox-budget" :for="`slot_${index + 1}`">
                                <span :data-hover="show_time_slot(slot)" v-text="show_time_slot(slot)"></span>
                            </label>
                        </template>
                    </div>
                </template>
                <div class="btn-continue">
                    <a class="btn btn-1"><button class="custom-btn btn-4 ">ถัดไป</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js')}}"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script>
    <script src="{{url('https://unpkg.com/dayjs@1.8.21/dayjs.min.js')}}"></script>
    <script src="{{url('assets/js/booking.js')}}"></script>
    <script src="{{url('https://kit.fontawesome.com/672dbb67e7.js')}}" crossorigin="anonymous"></script>

    <script src="{{url('assets/js/owl.carousel.js')}}"></script>

@endsection
