<script setup>
import { hero } from '../content/site.js'
</script>

<template>
  <section class="hero">
    <div class="hero-inner container">
      <div class="hero-text">
        <p class="hero-eyebrow">{{ hero.eyebrow }}</p>
        <h1 class="hero-heading">
          <span class="hero-name-line">{{ hero.namePrefix }}<em class="hero-italic">{{ hero.nameItalic }}</em>{{ hero.nameSuffix }}</span>
        </h1>
        <p class="hero-tagline">{{ hero.tagline }}</p>
        <div class="hero-ctas">
          <a
            v-for="cta in hero.ctas"
            :key="cta.href"
            :href="cta.href"
            :class="['btn', cta.primary ? 'btn-primary' : 'btn-outline']"
          >
            {{ cta.label }}
          </a>
        </div>
      </div>

      <div class="hero-visual" aria-hidden="true">
        <div class="shapes">
          <div class="shape shape-purple"></div>
          <div class="shape shape-yellow"></div>
          <div class="shape shape-dark"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.hero {
  padding: clamp(4rem, 8vw, 7rem) 0 clamp(3rem, 6vw, 5rem);
  min-height: calc(100svh - var(--header-height));
  display: flex;
  align-items: center;
}

.hero-inner {
  display: grid;
  grid-template-columns: 1fr;
  gap: 4rem;
  align-items: center;
}

@media (min-width: 900px) {
  .hero-inner {
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
  }
}

.hero-text {
  max-width: 56ch;
}

.hero-eyebrow {
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  margin-bottom: 1.25rem;
}

.hero-heading {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: clamp(3.5rem, 9vw, 7rem);
  line-height: 1;
  letter-spacing: -0.02em;
  color: var(--color-text);
  margin-bottom: 1.5rem;
}

.hero-name-line {
  display: block;
}

.hero-italic {
  font-style: italic;
  color: var(--color-accent-purple-vivid);
}

.hero-tagline {
  font-size: clamp(1rem, 1.8vw, 1.2rem);
  color: var(--color-text-muted);
  line-height: 1.6;
  margin-bottom: 2.5rem;
  max-width: 44ch;
}

.hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}

/* Shapes */
.hero-visual {
  display: flex;
  justify-content: center;
  align-items: flex-end;
}

@media (max-width: 899px) {
  .hero-visual {
    max-width: 340px;
    margin: 0 auto;
  }
}

.shapes {
  position: relative;
  width: 100%;
  max-width: 420px;
  aspect-ratio: 3 / 4;
}

.shape {
  position: absolute;
}

.shape-purple {
  background-color: var(--color-accent-purple);
  width: 55%;
  height: 80%;
  left: 0;
  bottom: 0;
}

.shape-yellow {
  background-color: var(--color-accent-yellow);
  width: 57%;
  height: 72%;
  right: 0;
  bottom: 0;
}

.shape-dark {
  background-color: var(--color-text);
  width: 33%;
  height: 27%;
  left: 27%;
  top: 4%;
  transform: rotate(4deg);
  transition: background-color var(--ease-slow);
}
</style>
