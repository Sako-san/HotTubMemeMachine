<template>
  <q-page class="flex flex-center">

    <q-card
      class="card-sign-in q-pa-md"
      inline
      color="white"
    >
      <q-card-section
        class="q-pa-md"
      >
        <img src="" />
      </q-card-section>

      <q-card-section
        class="text-dark text-center"
      >
        Create A New Account
      </q-card-section>

      <form @submit.prevent="signUp()">
        <q-card-section>
          <q-field
            icon="email"
            icon-color="light"
            class="q-mt-md"
          >
            <q-input
              placeholder="Email Address"
              v-model="form.email"
              type="email"
              autocomplete="username"
            />
          </q-field>

          <q-field
            icon="lock"
            icon-color="light"
            class="q-mt-lg"
          >
            <q-input
              placeholder="Password"
              v-model="form.password"
              type="password"
              autocomplete="current-password"
            />
          </q-field>
        </q-card-section>

        <q-card-actions
          align="center"
          class="q-mt-lg"
        >
          <q-btn
            label="Sign Up"
            color="primary"
            size="large"
            type="submit"
          />
        </q-card-actions>
      </form>
      <span>Have an Account? <router-link to='/login'>Login</router-link></span>
    </q-card>

  </q-page>
</template>

<script>

export default {
  name: 'signUp',
  data () {
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
  }
}
</script>
