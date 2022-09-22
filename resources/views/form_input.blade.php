@extends('layouts.master')


@section('content')
    <div id="root">
        <div id="container">
            <div id="contact_header">
                <h4 class="step_3">ขั้นตอนที่ 3</h4>
                <h5 class="title_contact">ข้อมูลสำหรับติดนัดหมาย</h5>
            </div>
            <div id="contact_form">
                <form class = "form-contact" @submit.prevent="time_submit()">
                    @csrf
                    <fieldset>

                        <div class="form-input">
                            <input id="reference" name="reference" type="hidden" v-model="reference" placeholder="">
                            <label for="name">ชื่อ<span class="text-danger">*</span></label>
                            <input type="text"  id="name" name="name" v-model="name" required />
                            <span class="form-input-validation"></span>
                        </div>

                        <div>
                            <label for="phone">เบอร์โทร:<span class="text-danger">*</span></label>
                            <input type="text"  id="phone" name="phone" v-model="phone" required>
                        </div>

                        <div>
                            <label for="email">อีเมล์:<span class="text-danger">*</span></label>
                            <input type="email"  id="email" name="email" v-model="email"/>
                            <span class="form-input-required">&nbsp</span>
                            <span class="form-input-validation"></span>
                        </div>

                        <div>
                            <input type="submit" value="ยืนยันการจอง" class="submit confirm-btn">
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js')}}"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script>
    <script src="{{url('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
    <script src="{{url('https://kit.fontawesome.com/672dbb67e7.js')}}" crossorigin="anonymous"></script>

    <script>

        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });

        let formBooking = new Vue({
            el:'#root',
            data: {
                reference: params.reference,
                name:'',
                phone:'',
                email:''
            },
            methods: {
                time_submit(){
                    Swal.fire({
                    title: 'ยืนยัน',
                    text: "ท่านต้องการจองหรือไม่",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',
                    closeOnConfirm: true,
                    }).then((result) => {

                        let formData = new FormData()

                        let token = document.querySelector('input[name="_token"]').value

                        formData.append('reference', this.reference)
                        formData.append('token', token)
                        formData.append('name', this.name)
                        formData.append('phone', this.phone)
                        formData.append('email', this.email)

                        axios.post("/info_input", formData)
                            .then((res) => {

                                // console.log(res.data);
                                // return

                                if(res.data){
                                    location.href = "/info_req?reference="+ res.data;
                                } else {
                                    Swal.fire(
                                        'เกิดข้อผิดพลาด',
                                        'warning'
                                    )
                                }

                            })
                            .catch( error => console.log(error))

                    if (result.isConfirmed) {
                        Swal.fire(
                        'ยืนยันการจองสำเร็จ'
                        )
                    }
                    })
                }
            },
            mounted(){
                //console.log("5555555")
            }
        })
    </script>
@endsection
