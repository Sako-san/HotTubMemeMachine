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
            class="tile q-ma-xs q-pa-xl col items-center"
            style="outline: 1px solid black;"
            v-for="(day, didx) in days"
            :key="didx">
                <div class="day">
                  {{ day }}
                </div>
                <div class="edit">
                  <q-btn
                    flat>
                    <q-icon size="18px" class="material-icon" name="create" />
                  </q-btn>
                  <q-btn
                    flat>
                    <q-icon size="18px" class="material-icon" name="add" />
                  </q-btn>
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
      return this.mapMonth(this.targetDate)
    },
    lastMonth () {
      return this.mapMonth(subMonths(this.targetDate, 1))
    },
    nextMonth () {
      return this.mapMonth(addMonths(this.targetDate, 1))
    }
  },
  methods: {
    mapMonth (date) {
      let month = eachDayOfInterval({ start: startOfMonth(date), end: lastDayOfMonth(date) })
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

<style lang="stylus">
  .tile:hover {
    background-color: lightgreen;
    .day {
      display: none;
    }
    .edit {
      display: flex;
      flex-direction: row;
      justify-content: center;
    }
  }

  .tile {
    .edit {
      display: none;
    }
  }

</style>
