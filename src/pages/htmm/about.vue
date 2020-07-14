<template>
  <q-page class="doge flex flex-center column text-black">
    <div class="text-center" style="width: 100%;">
      <div class='title'>
        <div>Hot Tub</div>
        <div>Meme Machine</div>
      </div>
    </div>
    <div class="content">
      <div>
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      Back in the early 2000s, we 90s kids were really hitting our stride on the internet. We would come to school with our stupid haircuts quoting the latest eBaum’s World videos and dissecting the newest episode of Homestar Runner. Walking around singing “Ma-i-a hi, Ma-i-a hu, Ma-i-a ho, Ma-i-a HA-ha” was not only tolerated, it was encouraged (by the other people who also had it stuck in their heads)</div>
      <div>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        From there, it didn’t take long for the viral video landscape to grow - and shift to YouTube. We were blessed with content like “Schfifty Five”, “Shoes”, and “Charlie the Unicorn.” This was glorious, but as with all good things, this pinnacle of internet video content had to come to an end.
        &nbsp;
      </div>
      <div>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        When did it end, you ask? I can’t point to the official end date, but I know the end started somewhere around “Charlie Bit My Finger.” When your parents started asking if you saw “the funny video online” - yeah that definitely was not good for video content.
      </div>
      <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sure, we still got some cool stuff after that - Ray Willy J, MysteryGuitarMan, Jenna Marbles, Dude Perfect, and many others - but it just wasn’t the same. It was at this time of transition that we (yes, us, those silly economy-ruining Millennials) shifted our content focus to memes. Tom and his Myspace, followed by The Facebook
        &amp; Twitter, made it easy to share photos and gifs. These&nbsp; ground-breaking “non-moving videos” were much easier to digest than lame “moving videos” whilst scrolling on your DOPE new iPhone 3G.
      </div>
      <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Throughout all of these internet content culture shifts, the time each popular piece of content had their moment in the spotlight has been getting shorter and shorter. The Numa Numa video was a thing for like, a full year. “Shoes” had a good couple months. By the time YouTube was in full swing, content creators were pushing out at least a video per week.&nbsp;
      </div>
      <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Now, the latest internet sensations come and go quicker than ever before. The great ones last and evolve over time. But most of them just get a day. One shining day in the spotlight. One single day where the internet is seemingly taken over by one specific meme. And then like a goddamn Mayfly, it’s dead.&nbsp; You know the kind…&nbsp;
      </div>
      <div>“I’m gonna tell my kids this was…”&nbsp;</div>
      <div>“Why is Brooklyn barbecue taking over the world?”&nbsp;</div>
      <div>“This shot is beautiful and should be taught in any film studies class.”</div>
      <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; These are the memes that Hot Tub Meme Machine was created to chronicle. The shooting star memes are often forgotten. Disappearing into the night just as quickly as they came. Not even giving us a chance to figure out where they did come from or where they did go (cotton-eye joe). HTMM will be here to chronicle the internet’s “meme of the day” and provide the commentary on it that you definitely need. It’s not the hero you deserve, but it’s the hero you got.&nbsp;
      </div>
      <div>
        <br>
      </div>
    </div>
</q-page>
</template>

<script>
export default {
  name: 'About'
}
</script>
<style lang="stylus">
  .doge {
    height: 100%;
    background-image: url("../../assets/doge-icon2-O25.png");
    background-attachment: fixed;
  }
  @media screen and (max-width: 580px) {
    .title {
      display: flex;
      flex-direction: column;
      font-size: 1.875em;
      margin: auto;
      margin-top: 24px;
      margin-bottom: 24px;
      width: 90%;
    }
    .content {
      font-size: 3vw;
      display: flex;
      margin: auto;
      margin-bottom: 75px;
      flex-direction: column;
      justify-content: center;
      width: 80%;
    }
}

  @media screen and (max-width: 780px) {
    .title {
      display: flex;
      flex-direction: column;
      font-size: 2.875em;
      margin: auto;
      margin-top: 24px;
      margin-bottom: 24px;
      width: 90%;
    }
    .content {
      font-size: 3vw;
      display: flex;
      margin: auto;
      margin-bottom: 75px;
      flex-direction: column;
      justify-content: center;
      width: 80%;
    }
}

  @media screen and (max-width: 1024px) {
    .title {
      display: flex;
      flex-direction: column;
      font-size: 2.875em;
      margin: auto;
      margin-top: 24px;
      margin-bottom: 24px;
      width: 85%;
    }
    .content {
      display: flex;
      margin: auto;
      margin-bottom: 75px;
      flex-direction: column;
      justify-content: center;
      width: 80%;
    }
}
  @media screen and (min-width: 1025px) {
    .title {
      display: flex;
      flex-direction: column;
      font-size: 2.875em;
      margin: auto;
      margin-top: 24px;
      margin-bottom: 24px;
      width: 85%;
    }
    .content {
      display: flex;
      margin: auto;
      margin-bottom: 75px;
      flex-direction: column;
      justify-content: center;
      width: 50%;
    }
}
</style>
