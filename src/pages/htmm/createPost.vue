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

  <div class="q-ma-xl q-pa-md q-gutter-sm">
    <q-editor
      v-model="blogText"
      :definitions="definitions"
      :dense="$q.screen.lt.md"
      :toolbar="[
        [
          {
            label: $q.lang.editor.align,
            icon: $q.iconSet.editor.align,
            fixedLabel: true,
            list: 'only-icons',
            options: ['left', 'center', 'right', 'justify']
          },
          {
            label: $q.lang.editor.align,
            icon: $q.iconSet.editor.align,
            fixedLabel: true,
            options: ['left', 'center', 'right', 'justify']
          }
        ],
        ['bold', 'italic', 'strike', 'underline', 'subscript', 'superscript'],
        ['token', 'hr', 'link', 'custom_btn'],
        ['print', 'fullscreen'],
        [
          {
            label: $q.lang.editor.formatting,
            icon: $q.iconSet.editor.formatting,
            list: 'no-icons',
            options: [
              'p',
              'h1',
              'h2',
              'h3',
              'h4',
              'h5',
              'h6',
              'code'
            ]
          },
          {
            label: $q.lang.editor.fontSize,
            icon: $q.iconSet.editor.fontSize,
            fixedLabel: true,
            fixedIcon: true,
            list: 'no-icons',
            options: [
              'size-1',
              'size-2',
              'size-3',
              'size-4',
              'size-5',
              'size-6',
              'size-7'
            ]
          },
          {
            label: $q.lang.editor.defaultFont,
            icon: $q.iconSet.editor.font,
            fixedIcon: true,
            list: 'no-icons',
            options: [
              'default_font',
              'arial',
              'arial_black',
              'comic_sans',
              'courier_new',
              'impact',
              'lucida_grande',
              'times_new_roman',
              'verdana'
            ]
          },
          'removeFormat'
        ],
        ['quote', 'unordered', 'ordered', 'outdent', 'indent'],

        ['undo', 'redo'],
        ['viewsource']
      ]"
      :fonts="{
        arial: 'Arial',
        arial_black: 'Arial Black',
        comic_sans: 'Comic Sans MS',
        courier_new: 'Courier New',
        impact: 'Impact',
        lucida_grande: 'Lucida Grande',
        times_new_roman: 'Times New Roman',
        verdana: 'Verdana'
      }"
    />
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
      definitions: {
          insert_img: {
          tip: 'Insertar Imagen',
          icon: 'photo',
          handler: this.insertImg // handler will call insertImg() method
          }
      },
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
            insertImg () { // insertImg method
            // create an input file element to open file dialog
            const input = document.createElement('input')
            input.type = 'file'
            input.accept = '.png, .jpg' // file extensions allowed
            let file
            input.onchange = _ => {
                const files = Array.from(input.files)
                file = files[0]

               // lets load the file as dataUrl
                const reader = new FileReader()
                let dataUrl = ''
                reader.onloadend = function () {
                    dataUrl = reader.result

                    // append result to the body of your post
                document.execCommand('insertHTML', true, '<div><img src="' + dataUrl + '" /></div>')
                }
                reader.readAsDataURL(file)
            }
            input.click()
        },
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
