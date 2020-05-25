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
      loading: false
    }
  },
  computed: {
    posts () {
      return this.$store.getters['apcStore/getField']('blogPosts')
    }
  },
  async mounted () {
    this.loading = true
    await this.$store.dispatch('apcStore/loadBlogData')
    this.loading = false
  }
}
</script>
<style>
  .doge {
    height: 100%;
    background-image: url("../assets/doge_50_opacity.png");
    background-attachment: fixed;
  }
</style>
