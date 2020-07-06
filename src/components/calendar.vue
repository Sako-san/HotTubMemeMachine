<template>
  <q-page
    class="flex column items-center justify-center"
    height="100vh"
    width="100vw">
    <div class="flex q-mb-md">
      <q-btn
      flat
      icon="keyboard_arrow_left"
      @click="backMonth"/>
      <h4 v-if="targetDate">{{ targetName }}</h4>
      <q-btn
      flat
      icon="keyboard_arrow_right"
      @click="forwardMonth"/>
    </div>
  <div class="flex column items-center"
    style="width: 100vw">
      <div
        class="row text-center"
        style="width: 90vw"
        v-for="(week, widx) in calendarFill"
        :key="widx">
          <div
            class="tile q-pa-xl col items-center"
            style="outline: 1px solid black;"
            v-for="(day, didx) in week"
            :key="didx">
                <div class="day">
                  {{ day }}
                </div>
                <div class="edit">
                  <q-btn size="12px" icon="create" flat/>
                  <q-btn size="12px" icon="add" flat/>
                </div>
          </div>
      </div>
      </div>
</q-page>
</template>

<script>
import { format, eachDayOfInterval, startOfMonth, lastDayOfMonth, addMonths, subMonths, getDay, getWeekOfMonth, getDate } from 'date-fns'

export default {
  name: 'Calendar',
  data () {
    return {
      weeks: [[], [], [], [], []],
      days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      targetDate: null
    }
  },
  computed: {
    targetName () {
      return format(this.targetDate, 'MMMM')
    },
    targetMonth () {
      return this.mapMonth(this.targetDate)
    },
    calendarFill () {
        let weeks = [ [], [], [], [], [], [] ]
        this.targetMonth.map(day => {
        weeks[(day.weekofMon - 1)].push(day)
        })
        return weeks
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
    },
    backMonth () {
      this.targetDate = subMonths(this.targetDate, 1)
    },
    forwardMonth () {
      this.targetDate = addMonths(this.targetDate, 1)
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
      max-height: 117px;
      display: flex;
      justify-content: center;
    }
  }

  .tile {
    .edit {
      display: none;
    }
    .day {
      max-height: 117px;
      display: flex;
      justify-content: center;
    }
  }

</style>
