<template>
  <q-card class="card">
    <div class="column">
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
    margin-top: 12px;
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
    margin-top: 12px;
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
    margin-top: 12px;
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
