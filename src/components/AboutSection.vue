<script setup>
import { about } from '../content/site.js'
</script>

<template>
  <section :id="about.id" class="section about">
    <div class="container about-inner">
      <div class="about-label">
        <p class="section-eyebrow">{{ about.eyebrow }}</p>
      </div>
      <div class="about-content">
        <h2 class="section-heading">{{ about.heading }}</h2>
        <div class="about-body">
          <p v-for="(p, i) in about.paragraphs" :key="i" class="about-p">
            {{ p }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.about-inner {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2rem;
}

@media (min-width: 768px) {
  .about-inner {
    grid-template-columns: 1fr 2fr;
    gap: 4rem;
    align-items: start;
  }
}

.about-label {
  padding-top: 0.5rem;
}

.about-body {
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}

.about-p {
  font-size: clamp(1rem, 1.5vw, 1.125rem);
  color: var(--color-text-muted);
  line-height: 1.75;
  max-width: 60ch;
}

.about-p:first-child {
  font-size: clamp(1.1rem, 1.8vw, 1.25rem);
  color: var(--color-text);
  font-weight: 500;
}
</style>
