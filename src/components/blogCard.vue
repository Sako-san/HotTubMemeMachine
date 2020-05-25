<template>
<div>
    <q-card class="card bg-primary">
    <div class="column">
      <div v-if="auth" class="row justify-end">
        <q-btn-dropdown
          size="1vw"
          align
          class="q-ma-md"
          dropdown-icon="mdi-dots-horizontal"
          flat>
          <q-list>

            <q-item clickable v-close-popup @click="dialog=true">
              <q-item-section>
                <q-item-label>Edit Post</q-item-label>
              </q-item-section>
            </q-item>

            <q-item clickable v-close-popup @click="deletePost">
              <q-item-section>
                <q-item-label>Delete Post</q-item-label>
              </q-item-section>
            </q-item>

          </q-list>
        </q-btn-dropdown>
      </div>
      <div class="text-center">
        <div class="title">{{ blogPost.Title }}</div>
        <div class="bday">Birth Day: {{ blogPost.DateOfBirth }}</div>
      </div>
      <div>
        <div
          v-html="blogPost.BlogContent"
          class="text-left q-mx-xl">
        </div>
      </div>
      <div class="ratings">
      <div>Overall Doge Rating</div>
      <q-rating
          v-model="blogPost.DogeRating"
          disable
          size="3.5em"
          icon="img:statics/icons/doge_icon.png">
      </q-rating>
      </div>
    </div>
  </q-card>

  <q-dialog
      v-if="auth"
      v-model="dialog"
      persistent
      :maximized="maximizedToggle"
      transition-show="slide-up"
      transition-hide="slide-down">
      <q-card class="bg-primary text-white">
        <q-bar>
          <q-space />

          <q-btn dense flat icon="minimize" @click="maximizedToggle = false" :disable="!maximizedToggle">
            <q-tooltip v-if="maximizedToggle" content-class="bg-primary">Minimize</q-tooltip>
          </q-btn>
          <q-btn dense flat icon="crop_square" @click="maximizedToggle = true" :disable="maximizedToggle">
            <q-tooltip v-if="!maximizedToggle" content-class="bg-primary">Maximize</q-tooltip>
          </q-btn>
          <q-btn dense flat icon="close" v-close-popup>
            <q-tooltip content-class="bg-primary">Close</q-tooltip>
          </q-btn>
        </q-bar>

          <EditPost
          :blog-post="blogPost"
          class="q-mt-xl" />
      </q-card>
    </q-dialog>
</div>
</template>

<script>
import EditPost from '../pages/htmm/createPost'

export default {
  components: { EditPost },
  props: {
    blogPost: {
      type: Object,
      required: true
    }
  },
  data () {
    return {
      dialog: false,
      maximizedToggle: true
    }
  },
  computed: {
     auth () {
      return this.$store.getters['commons/getField']('isAuth')
    }
  },
  methods: {
    async deletePost () {
      const data = this.blogPost.id
      this.$store.dispatch('apcStore/deleteBlogPost', data)

      this.$q.notify({
        message: 'Post Deleted',
        color: 'Negative'
      })
    }
  }
}
</script>
<style lang="stylus">
@media screen and (min-width: 1025px) {
    img {
    display: flex;
    justify-content: center;
    width: 80%;
    margin: 0 auto;
    margin-bottom: 12px;
  }

  p {
    margin: 0 auto;
    text-align: center;
    width: 90%;
  }

  .title {
    font-size: 4vw;
    font-weight: bold;
    margin: 0 auto;
    width: 100%;
  }

  .bday {
    font-size: 2vw;
    margin: 0 auto;
    margin-bottom: 12px;
    width: 100%;
  }

  .card {
    margin: 0 auto;
    width: 50%;
  }

  .ratings {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    width: 100%;
    margin: 0 auto;
    font-size: 2vw;
    margin-bottom: 24px;
  }
}

@media screen and (max-width: 580px) {
    p {
    font-size: 1vw;
    margin: 0 auto;
    text-align: center;
    width: 100%;
  }

  .title {
    font-size: 8vw;
    font-weight: bold;
    margin: 0 auto;
    width: 100%;
  }

  .bday {
    font-size: 6vw;
    margin: 0 auto;
    margin-bottom: 12px;
    width: 100%;
  }

  .card {
    margin: 0 auto;
    width: 100%;
  }

  .ratings {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    text-align: center;
    font-size: 4vw;
    margin: 0 auto;
    margin-bottom: 24px;
  }

  img {
  display: flex;
  justify-content: center;
  width: 100%;
  margin: 0 auto;
  margin-bottom: 12px;
}
}

@media screen and (max-width: 1024px) {
    p {
    font-size: 2vw;
    margin: 0 auto;
    text-align: center;
    width: 100%;
  }

  .title {
    font-size: 8vw;
    font-weight: bold;
    margin: 0 auto;
    width: 100%;
  }

  .bday {
    font-size: 6vw;
    margin: 0 auto;
    margin-bottom: 12px;
    width: 100%;
  }

  .card {
    margin: 0 auto;
    width: 100%;

  }

  .ratings {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 auto;
    text-align: center;
    font-size: 4vw;
    width: 100%;
    margin-bottom: 24px;
  }

  img {
  display: flex;
  justify-content: center;
  width: 50%;
  margin: 0 auto;
  margin-bottom: 12px;
}
}
</style>
