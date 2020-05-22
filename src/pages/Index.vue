<template>
  <q-page class="doge flex flex-center">
    <div
      style="width: 100%;"
      class="q-my-xl column justify-center"
      v-for="(post, idx) in posts"
      :key="idx">
      <BlogCard
        class="self-center"
        :blogPost="post"
      />
    </div>
  </q-page>
</template>

<script>
import BlogCard from '../components/blogCard'

export default {
  components: { BlogCard },
  name: 'PageIndex',
  data () {
    return {
      posts: null
    }
  },
  async mounted () {
    const { data } = await this.$axios.get('/')
    console.log(data)
    this.posts = data
  }
}
</script>
<style>
  .doge {
    background-image: url("../assets/doge_50_opacity.png")
  }
</style>
