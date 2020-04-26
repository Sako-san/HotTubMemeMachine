<template>
  <q-page class="flex justify-center text-black">
  <h4 class="justify-center q-m-none" style="max-height: 100px;">Create Post</h4>

  <div class="flex column q-py-xl" style="width:100%;" >

    <q-form class="col-10"
      @submit="onSubmit"
      @reset="onReset">

      <div class="flex row justify-around q-mb-xl">
        <div class="column rounded-borders bg-primary">
          <h5 class="flex justify-center">Select a Date</h5>
          <q-date
            class="q-ma-lg"
            color="secondary"
            v-model="date"
            label="Select Date"
            landscape/>
        </div>

          <div class="column justify-around rounded-borders bg-primary">
            <div class="q-ma-md">
              <h5 class="flex justify-center q-mb-sm">Name the Meme</h5>
              <q-input
                class="flex justify-center"
                v-model="memeName"
                label="Give me a name"/>
            </div>

            <div class="q-ma-md">
              <h5 class="flex justify-center q-mb-lg">Drop some Doges</h5>
              <q-rating
                v-model="dogeRating"
                size="3.5em"
                icon="img:statics/icons/doge_icon.png"/>
            </div>
          </div>
      </div>

      <!-- <div class="flex row justify-center q-ma-xl rounded-borders bg-primary">
        <div class="flex column q-ma-lg">
        <h4 class="flex justify-center">Select a Meme</h4>
          <q-file
            v-model="imageData"
            @change="previewImage"
            label="Pick a meme dawg"
            filled
            style="max-width: 300px"
          />
          <div v-if="imageData != null">
            <img style="width:200px; height:200px;" class="preview" src="picture" alt="meme for your viewing">
          </div>
        </div>
      </div> -->

      <div class="flex row justify-center q-ma-xl rounded-borders bg-primary" >
        <div class="flex column q-ma-lg" style="min-width:80%">
            <h4 class="flex justify-center">Blog Content</h4>
            <q-input
              v-model="blogText"
              autogrow
              label="Write your blog here dawg"
              filled
              style="min-width: 80%"
              type="textarea"
            />
        </div>
      </div>

      <div class="flex row justify-center">
          <q-btn
            type="submit"
            label="Save"
            style="height: 50px; width:150px"
            color="secondary"
          >
          </q-btn>
      </div>
    </q-form>
  </div>
</q-page>
</template>

<script>
import { mapState } from 'vuex'
import { axios } from 'boot/axios'

export default {
  name: 'CreatePost',
  data () {
    return {
      date: '',
      memeName: '',
      // imageData: null,
      // picture: null,
      blogText: '',
      dogeRating: 0
    }
  },
  computed: {
    ...mapState(['posts'])
  },
  methods: {
    // previewImage (e) {
    //   this.picture = null
    //   this.imageData = e.target.files[0]
    // },
    async createPost () {
      const data = {
        DateOfBirth: this.date,
        Title: this.memeName,
        BlogContent: this.blogText,
        DogeRating: this.dogeRating
      }

      await axios.post('/blogPosts', data)
    },
    uploadFile () {

    },
    onSubmit (evt) {
      evt.preventDefault()
      this.uploadFile()
      this.createPost()
      this.onReset()
    },
    onReset () {
      // Reset our form values
      this.date = ''
      this.memeName = ''
      this.dogeRating = 0
      this.memeFile = null
      this.blogText = ''
    }
  }
}
</script>
