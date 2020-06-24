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
export default {
  name: 'Calendar',
  data () {
    return {
      weeks: [1, 2, 3, 4, 5],
      days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    }
  }
}
</script>
