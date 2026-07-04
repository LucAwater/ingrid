<script setup>
import AudioPlayer from './AudioPlayer.vue'
import { demos } from '../content/site.js'
</script>

<template>
  <section :id="demos.id" class="section demos">
    <div class="container">
      <p class="section-eyebrow">{{ demos.eyebrow }}</p>
      <h2 class="section-heading">{{ demos.heading }}</h2>
      <p class="section-intro">{{ demos.intro }}</p>

      <ul class="tracks">
        <li v-for="track in demos.tracks" :key="track.id">
          <AudioPlayer :track="track" />
        </li>
      </ul>
    </div>
  </section>
</template>

<style scoped>
.tracks {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  margin-top: 3rem;
  max-width: 760px;
}
</style>
