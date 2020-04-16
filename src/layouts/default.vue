<template>
  <q-layout view="hHh lpR fFf">

    <q-header  class="flex bg-primary text-secondary q-py-md" height-hint="98">

      <div class="row justify-around items-center q-ml-md" style="width:100%;">
        <div class="flex col-3 justify-center">
            <q-btn dense flat round icon="menu" @click="left = !left" />
            <q-toolbar-title class="rounded-borders">
              <router-link to="/">
                <q-img class="rounded-borders"  style="object-fit: cover; max-width:200px;" src="../assets/doge-boi.png"/>
              </router-link>
            </q-toolbar-title>
        </div>

        <div class="flex col-6 justify-center">
          <q-tabs>
            <q-route-tab to="/timeTraveling" label="Memes of Past" />
            <q-route-tab to="/MemeOfTheDay" label="Meme of the Day" />
            <q-route-tab to="/calendar" label="Meme Calendar" />
            <q-route-tab to="/legendary" label="Legendary Memes" />
            <q-route-tab to="/about" label="About HTMM" />
          </q-tabs>
        </div>

        <div class="flex col-2 justify-center">
            <span>Doge Count</span>
        </div>
        <div>
          <q-btn color="secondary" label="Logout" @click="signOut()" />
        </div>
      </div>

    </q-header>

    <q-drawer content-class="bg-primary text-secondary" v-model="left" side="left" bordered>
    <q-list class="flex justify-center">
        <h6>Top 5 All Time</h6>

        <div class="justify-start">
          <q-item clickable v-ripple>
            <q-item-section avatar>
              <q-avatar square>
                <img style="object-fit: cover;" src="../assets/surprised-pikachu-meme.png">
              </q-avatar>
            </q-item-section>

            <q-item-section>Surprised Pikachu</q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section avatar>
              <q-avatar square>
                <img style="object-fit: cover;" src="../assets/Good-Guy-Greg.jpg">
              </q-avatar>
            </q-item-section>

            <q-item-section>Good Guy Greg</q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section avatar>
              <q-avatar square>
                <img style="object-fit: cover;" src="../assets/squinting-fry.png">
              </q-avatar>
            </q-item-section>

            <q-item-section>Squinting Fry</q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section avatar>
              <q-avatar square>
                <img style="object-fit: cover;" src="../assets/crying-jordan.jpeg">
              </q-avatar>
            </q-item-section>

            <q-item-section>Crying Jordan</q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section avatar>
              <q-avatar square>
                <img style="object-fit: cover;" src="../assets/mocking-bob.jpeg">
              </q-avatar>
            </q-item-section>

            <q-item-section>Mocking SpongeBob</q-item-section>
          </q-item>
        </div>
      </q-list>

      <q-separator class="q-ma-lg" color="secondary" inset/>

      <div class="flex justify-center">
          <div>
            <h6>Editor Tools</h6>
            <router-link style="text-decoration:none;" class="text-secondary" to='/createPost' >
                  <q-icon size="35px" class="material-icons" name="create"/>
                  <span class="q-ml-md">Create Post</span>
            </router-link>
          </div>
       </div>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>

    <q-footer class="bg-grey-8 text-white">
      <q-toolbar class="q-m-lg bg-primary text-secondary">
            <a href="https://www.google.com/search?q=origin+of+doge" target="_blank">
              <q-avatar style="height:75px; width:100px;">
                <img src="../assets/doge_icon.png">
              </q-avatar>
            </a>
          <span>Hot Tub Meme Machine - Chronocling the Memes of Our Time</span>
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
  methods: {
    signOut () {
      this.$store.dispatch('auth/signOut')
    }
  }
}
</script>
