<template>
  <q-card class="card">
    <div class="column">
      <div class="content text-center">
        <h2>{{ blogPost.Title }}</h2>
        <h6>Birth Day: {{ blogPost.DateOfBirth }}</h6>
      </div>
      <div
          v-html="blogPost.BlogContent"
          class="text-left q-mx-xl">
      </div>
      <div class="ratings">
      <q-rating
          v-model="blogPost.DogeRating"
          disable
          size="3.5em"
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

img {
  display: flex;
  justify-content: center;
  width: 80%;
  margin: 0 auto;
  margin-bottom: 48px;
}

p {
  margin: none;
  text-align: center;
  width: 80%;
}

.content {
  margin: 0 auto;
}

.card {
  margin: none;
  width: 50%;
}

.ratings {
  display: flex;
  width: 100%;
  justify-content: center;
  margin-bottom: 24px;
}
</style>
