<template>
  <q-page
    class="flex column items-center justify-center"
    height="100vh"
    width="100vw">
  <div class="flex column items-center"
    style="width: 100vw">
      <div
        class="row text-center"
        style="width: 90vw"
        v-for="(week, widx) in weeks"
        :key="widx">
          <div
            class="q-ma-xs q-pa-xl col"
            style="outline: 1px solid black;"
            v-for="(day, didx) in days"
            :key="didx">
              <div>
                {{ day }}
              </div>
          </div>
      </div>
      </div>
</q-page>
</template>

<script>
import { eachDayOfInterval, startOfMonth, lastDayOfMonth, addMonths, subMonths, getDay, getWeekOfMonth, getDate } from 'date-fns'

export default {
  name: 'Calendar',
  data () {
    return {
      weeks: [1, 2, 3, 4, 5],
      days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      targetDate: null
    }
  },
  computed: {
    targetMonth () {
      let month = eachDayOfInterval({ start: startOfMonth(this.targetDate), end: lastDayOfMonth(this.targetDate) })
       return month.map(day => {
         return {
           numDay: getDay(day),
           weekofMon: getWeekOfMonth(day),
           dayOfMon: getDate(day)
         }
       })
    },
    lastMonth () {
      let targetDateSubMon = subMonths(this.targetDate, 1)
      let month = eachDayOfInterval({ start: startOfMonth(targetDateSubMon), end: lastDayOfMonth(targetDateSubMon) })
       return month.map(day => {
         return {
           numDay: getDay(day),
           weekofMon: getWeekOfMonth(day),
           dayOfMon: getDate(day)
         }
       })
    },
    nextMonth () {
      let targetDateAddMon = addMonths(this.targetDate, 1)
      let month = eachDayOfInterval({ start: startOfMonth(targetDateAddMon), end: lastDayOfMonth(targetDateAddMon) })
       return month.map(day => {
         return {
           numDay: getDay(day),
           weekofMon: getWeekOfMonth(day),
           dayOfMon: getDate(day)
         }
       })
    }
  },
  mounted () {
    this.targetDate = new Date()
  }
}
</script>
