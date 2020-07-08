<template>
  <q-layout view="hHh lpR fFf">

    <q-header  class="flex bg-white text-secondary q-py-xs" style="border-bottom: 5px solid black;" height-hint="98">

      <div class="row justify-around items-center q-ml-md" style="width:100%;">
        <div class="flex col-3 justify-center">
            <q-toolbar-title class="rounded-borders">
              <router-link to="/">
                <q-img class="rounded-borders"  style="object-fit: cover; max-width:200px;" src="../assets/doge-boi.png"/>
              </router-link>
            </q-toolbar-title>
        </div>

        <div class="flex col-6 justify-center">
          <q-tabs>
            <!-- <q-route-tab to="/timeTraveling" label="Memes of Past" /> -->
            <!-- <q-route-tab to="/MemeOfTheDay" label="Meme of the Day" /> -->
            <q-route-tab to="/calendar" label="Meme Calendar" />
            <!-- <q-route-tab to="/legendary" label="Legendary Memes" /> -->
            <q-route-tab to="/" label="Home" />
            <q-route-tab to="/about" label="About HTMM" />
          </q-tabs>
        </div>

        <div class="flex col-3 justify-center">
        </div>
        <!-- <div>
          <q-btn color="secondary" label="Logout" @click="signOut()" />
        </div> -->
      </div>

    </q-header>

    <q-page-container>
      <router-view />
    </q-page-container>

    <q-footer class="bg-grey-8 text-white" style="height: 50px;">
      <q-toolbar class="flex justify-center bg-primary text-secondary">
            <a href="https://www.google.com/search?q=origin+of+doge" target="_blank">
                <img class="q-ma-sm" style="height: 35px; width: 90px; border-radius: 3px;" src='../assets/doge-boi.png'>
            </a>
            <div class="row">
              <span class="q-ml-lg">Hot Tub Meme Machine - Chronocling the Memes of Our Time</span>

              <router-link style="text-decoration:none;" class="q-ma-md fixed-bottom-right" to='/createPost' >
              <q-btn v-if="auth" style="font-family: Roboto;" class="material-icons" icon="create" flat/>
              </router-link>
            </div>
      </q-toolbar>
    </q-footer>

  </q-layout>
</template>

<script>
export default {
  data () {
    return {
      left: true
    }
  },
  computed: {
    auth () {
      return this.$store.getters['commons/getField']('isAuth')
    }
  },
  methods: {
    // signOut () {
    //   this.$store.dispatch('auth/signOut')
    // }
  }
}
</script>
