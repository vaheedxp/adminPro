<script>
// for Vue 2.0
import myDatepicker from 'vue-jalaali-datepicker'
import myDatepicker from 'vue-jalaali-datepicker/vue-jalaali-datepicker-es6' // for ES6

export default {
  data () {
    return {
      myDate: new Date(), // for v-model
      startTime: {
        time: '' // '1396-05-02' (type=day) && '["1396/05/02", "1396/06/02", "1396/07/02"]' (type="multi-day")
      },

      option: {
        type: 'day',
        week: ['شنبه', 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه'],
        month: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
        format: 'jYYYY-jMM-jDD',
        placeholder: 'انتخاب کنید',
        inputStyle: {
          'display': 'inline-block',
          'padding': '6px',
          'line-height': '22px',
          'font-size': '16px',
          'border': '2px solid #fff',
          'box-shadow': '0 1px 3px 0 rgba(0, 0, 0, 0.2)',
          'border-radius': '2px',
          'color': '#5F5F5F'
        },
        color: {
          header: '#ccc',
          headerText: '#f00'
        },
        buttons: {
          ok: 'انتخاب',
          cancel: 'انصراف'
        },
        overlayOpacity: 0.5, // 0.5 as default
        dismissible: true // as true as default
      },
      timeoption: {
        type: 'min',
        week: ['شنبه', 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه'],
        month: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
        format: 'jYYYY-jMM-jDD HH:mm'
      },
      limit: [{
        type: 'weekday',
        available: [1, 2, 3, 4, 5]
      }]
    }
  },
  components: {
    'date-picker': myDatepicker
  }
}
</script>