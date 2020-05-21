<template>
  <q-card class="card">
    <div class="flex">
      <div class="content text-center">
        <h2>{{ blogPost.Title }}</h2>
        <h6>Birth Day: {{ blogPost.DateOfBirth }}</h6>
        <img src="" alt="meme image">
        <p class="text-left">
          {{ blogPost.BlogContent }}
        </p>
        <q-rating
          v-model="blogPost.DogeRating"
          disable
          size=3.5em
          icon="img:statics/icons/doge_icon.png">
        </q-rating>
      </div>
    </div>
  </q-card>
</template>

<script>
export default {
  props: {
    blogPost: {
      type: Object,
      required: true
    }
  }
}
</script>
<style lang="stylus">
  h2 {
    margin: auto;
    padding-top: 24px;
  }
  h6 {
    margin: auto;
    margin-top: 24px;
  }
  img {
    margin: 12px 0px 12px 0px;
    width: 80%;
    height: auto;
  }
  p {
    margin: auto;
    text-align: center;
    padding: 25px;
    width: 80%;
  }
  .card {
    width: 50%;
  }

  .content {
    width: 100%;
  }

</style>
