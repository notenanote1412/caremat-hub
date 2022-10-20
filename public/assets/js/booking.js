let vueBooking = new Vue({
  el: '#app',
  data: {
    current_time: dayjs().format('YYYY-MM-DD HH:mm'),
    slot_arr: [],
    day_list_total: 7,
    step: 1,
    slot_selected: "",
    last_step: null,
    class_step_0: "",
    class_step_1: "",
    class_step_2: "",
    class_step_3: "",
    class_step_4: "",
    class_step_5: "",
    clinic_config: {
        clinic_name: 'คลินิกเทคนิกการแพทย์แคร์แมท เชียงใหม่',
        clinic_title: 'บริการจองตรวจคลินิก แคร์แมท',
        clinic_address: '1234 มหิดล ป่าแดด เมือง เชียงใหม่ 50000',
        clinic_phone: '088-9999999',
        clinic_email: 'clinic@gmail.com',
        clinic_booking_slot: '30',
        clinic_holiday: ['2022-03-28', '2022-03-29', '2022-03-30'],
        clinic_work_time: {
          Monday: {
            booking_start1: '09:00',
            booking_end1: '12:00',
            booking_start2: '13:00',
            booking_end2: '19:00',
          },
          Tuesday: {
            booking_start1: '15:00',
            booking_end1: '17:00',
            booking_start2: '',
            booking_end2: '',
          },
          Wednesday: {
            booking_start1: '13:00',
            booking_end1: '17:00',
            booking_start2: '',
            booking_end2: '',
          },
          Thursday: {
            booking_start1: '09:00',
            booking_end1: '12:00',
            booking_start2: '13:00',
            booking_end2: '19:00',
          },
          Friday: {
            booking_start1: '11:00',
            booking_end1: '12:00',
            booking_start2: '',
            booking_end2: '',
          },
          Saturday: {
            booking_start1: '',
            booking_end1: '',
            booking_start2: '',
            booking_end2: '',
          },
          Sunday: {
            booking_start1: '',
            booking_end1: '',
            booking_start2: '',
            booking_end2: '',
          },
        },
        used_slot: [],
    },
    lists: {
      date_lists: [],
    },
  },
  methods: {
    fetchClnic() {

        axios.get('/fetchWorkTimes')
        .then((response) => {

            console.log(response);

            this.clinic_config = response.data;

            this.generate_day_list();
        })
        .catch((error) => console.log(error));
    },
    show_time_slot(slot) {
      return slot.split(' ')[1];
    },
    hide_slot_pass(slot) {
      if (this.current_time > slot) return false;

      return true;
    },
    show_slot_lists() {
      let clinic = this.clinic_config;

      let start_hour_1 = parseInt(
        clinic.clinic_work_time.Monday.booking_start1.split(':')[0]
      );
      let start_minute_1 = parseInt(
        clinic.clinic_work_time.Monday.booking_start1.split(':')[1]
      );
      let end_hour_1 = parseInt(
        clinic.clinic_work_time.Monday.booking_end1.split(':')[0]
      );
      let end_minute_1 = parseInt(
        clinic.clinic_work_time.Monday.booking_end1.split(':')[1]
      );
      let start_hour_2 = parseInt(
        clinic.clinic_work_time.Monday.booking_start2.split(':')[0]
      );
      let start_minute_2 = parseInt(
        clinic.clinic_work_time.Monday.booking_start2.split(':')[1]
      );
      let end_hour_2 = parseInt(
        clinic.clinic_work_time.Monday.booking_end2.split(':')[0]
      );
      let end_minute_2 = parseInt(
        clinic.clinic_work_time.Monday.booking_end2.split(':')[1]
      );

      this.lists.date_lists.forEach((item) => {
        start_hour_1 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_start1.split(':')[0]
        );
        start_minute_1 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_start1.split(':')[1]
        );
        end_hour_1 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_end1.split(':')[0]
        );
        end_minute_1 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_end1.split(':')[1]
        );
        start_hour_2 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_start2.split(':')[0]
        );
        start_minute_2 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_start2.split(':')[1]
        );
        end_hour_2 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_end2.split(':')[0]
        );
        end_minute_2 = parseInt(
          clinic.clinic_work_time[
            dayjs(item).format('dddd')
          ].booking_end2.split(':')[1]
        );

        let time_slot1 = dayjs(item)
          .hour(start_hour_1)
          .minute(start_minute_1)
          .format('YYYY-MM-DD HH:mm');
        let slot_end1 = dayjs(item)
          .hour(end_hour_1)
          .minute(end_minute_1)
          .format('YYYY-MM-DD HH:mm');
        let time_slot2 = dayjs(item)
          .hour(start_hour_2)
          .minute(start_minute_2)
          .format('YYYY-MM-DD HH:mm');
        let slot_end2 = dayjs(item)
          .hour(end_hour_2)
          .minute(end_minute_2)
          .format('YYYY-MM-DD HH:mm');

        let slot_value = parseInt(clinic.clinic_booking_slot);

        // console.log(dayjs(item).format('dddd'))

        while (time_slot1 < slot_end1) {

            // ถ้าเวลานี้ยังไม่ได้เลือก ให้เพิ่ม slot เข้าไป
            if(!this.checkUsedSlot(time_slot1)) {
                this.slot_arr.push(time_slot1);
            }

            time_slot1 = dayjs(time_slot1).add(slot_value, 'minute').format('YYYY-MM-DD HH:mm');

        }

        while (time_slot2 < slot_end2) {

            if(!this.checkUsedSlot(time_slot2)) {
                this.slot_arr.push(time_slot2);
            }
            time_slot2 = dayjs(time_slot2).add(slot_value, 'minute').format('YYYY-MM-DD HH:mm');
        }
      });

      // console.log(this.slot_arr)
    },
    checkUsedSlot(time_slot) {

        if(!this.clinic_config.used_slot.includes(time_slot)) return false

        return true
    },
    time_slot_checked(slot) {
        this.slot_selected = slot
    },
    time_submit() {
      // axios to route for save time
      let formData = new FormData()

      let reference = document.querySelector('#reference').value
      let token = document.querySelector('input[name="_token"]').value

      formData.append('time_selected', this.slot_selected)
      formData.append('token', token)
      formData.append('reference', reference)
      formData.append('slot', '30')

      axios.post("/select_time", formData)
      .then((res) => {

        console.log(res.data)
        location.href = "/info?reference="+ res.data;
      })
      .catch( error => console.log(error))
    },
    show_slot_each_day(slot_date, slot) {
      return slot_date == slot.split(' ')[0];
    },
    generate_day_list() {
      // fetch holiday add to holiday array
      let start_date = this.checkHoliday(dayjs().format('YYYY-MM-DD'));

      for (let i = 0; i < this.day_list_total; i++) {
        start_date = this.checkHoliday(start_date);

        this.lists.date_lists.push(start_date);
        // console.log(start_date)
      }

      this.show_slot_lists();
    },
    checkHoliday(check_date) {
      // while date not holiday, date not alreay in list, date work_time slot 1 isset
      let clinic = this.clinic_config;
      let slot_value = parseInt(clinic.clinic_booking_slot);

      // clinic.clinic_work_time['Monday'].booking_end1.split(':')[0])
      let end_hour_1 = parseInt(clinic.clinic_work_time[dayjs(check_date).format('dddd')].booking_end1.split(':')[0]);

      let end_minute_1 = parseInt(
        clinic.clinic_work_time[
          dayjs(check_date).format('dddd')
        ].booking_end1.split(':')[1]
      );

      let end_hour_2 = parseInt(
        clinic.clinic_work_time[
          dayjs(check_date).format('dddd')
        ].booking_end2.split(':')[0]
      );
      let end_minute_2 = parseInt(
        clinic.clinic_work_time[
          dayjs(check_date).format('dddd')
        ].booking_end2.split(':')[1]
      );

    //   18:30
    //   end_hour_1 = 18
    //   end_minute_1 = 30
    //   slot_value = 30

    // final slot = end time - slot -> end time = 18:30 final slot = 18:30 - 30 = 18:00
      let slot_end1 = dayjs(check_date)
        .hour(end_hour_1)
        .minute(end_minute_1)
        .subtract(slot_value, 'minute')
        .format('YYYY-MM-DD HH:mm');

      let slot_end2 = dayjs(check_date)
        .hour(end_hour_2)
        .minute(end_minute_2)
        .subtract(slot_value, 'minute')
        .format('YYYY-MM-DD HH:mm');

      while (
        this.clinic_config.clinic_holiday.includes(check_date) ||
        this.lists.date_lists.includes(check_date) ||
        this.clinic_config.clinic_work_time[dayjs(check_date).format('dddd')].booking_start1 == '' ||
        this.clinic_config.clinic_work_time[dayjs(check_date).format('dddd')].booking_end1 == '' ||
        (slot_end1 <= dayjs().format('YYYY-MM-DD HH:mm') && slot_end2 <= dayjs().format('YYYY-MM-DD HH:mm'))
      ) {
          end_hour_1 = parseInt(
          clinic.clinic_work_time[
            dayjs(check_date).format('dddd')
          ].booking_end1.split(':')[0]
        );
          end_minute_1 = parseInt(
          clinic.clinic_work_time[
            dayjs(check_date).format('dddd')
          ].booking_end1.split(':')[1]
        );

          end_hour_2 = parseInt(
          clinic.clinic_work_time[
            dayjs(check_date).format('dddd')
          ].booking_end2.split(':')[0]
        );
          end_minute_2 = parseInt(
          clinic.clinic_work_time[
            dayjs(check_date).format('dddd')
          ].booking_end2.split(':')[1]
        );

          slot_end1 = dayjs(check_date)
          .hour(end_hour_1)
          .minute(end_minute_1)
          .format('YYYY-MM-DD HH:mm');

          slot_end2 = dayjs(check_date)
          .hour(end_hour_2)
          .minute(end_minute_2)
          .format('YYYY-MM-DD HH:mm');

        check_date = dayjs(check_date).add(1, 'day').format('YYYY-MM-DD');

      }

      return check_date;
    },
    date_label_thai(date) {
      let thai_date = [
        'อาทิตย์',
        'จันทร์',
        'อังคาร',
        'พุธ',
        'พฤหัสบดี',
        'ศุกร์',
        'เสาร์',
      ];
      let thai = thai_date[dayjs(date).format('d')];
      return dayjs(date).format(`YYYY-MM-DD วัน ${thai}`);
    },
    changeStep(step) {

      this.last_step = this.step

      if (step == 1 && (this.last_step == null || this.last_step == 1)) {

      } else {
        if (step > this.last_step) {
          this[`class_step_${step}`] = 'animate__animated animate__faster animate__fadeInRight'
          this[`class_step_${this.last_step}`] = 'animate__animated animate__faster animate__fadeOutLeft'
        } else if (step < this.last_step) {
          this[`class_step_${step}`] = 'animate__animated animate__faster animate__fadeInLeft'
          this[`class_step_${this.last_step}`] = 'animate__animated animate__faster animate__fadeOutRight'
        } else {
          this[`class_step_${step}`] = ''
          this[`class_step_${this.last_step}`] = ''
        }
      }

      setTimeout(() => {
        this.step = step
      }, 300);
    },
    // getServiceData() {
    //     axios.get('/select_service').then(response => {
    //         console.log(response.data);
    //     });
    // }
  },
  computed: {},
  mounted() {
    this.fetchClnic();
    //this.getServiceData();
  },
});
