<script setup>
import { hero } from '../content/site.js'
</script>

<template>
  <section class="hero">
    <div class="hero-inner container">
      <p class="hero-eyebrow">{{ hero.eyebrow }}</p>
      <h1 class="hero-heading">
        {{ hero.namePrefix }}<em class="hero-italic">{{ hero.nameItalic }}</em>{{ hero.nameSuffix }}
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
  </section>
</template>

<style scoped>
.hero {
  padding: clamp(5rem, 10vw, 9rem) 0 clamp(4rem, 8vw, 7rem);
  min-height: 100svh;
  display: flex;
  align-items: center;
}

.hero-inner {
  max-width: 900px;
}

.hero-eyebrow {
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  margin-bottom: 1.5rem;
}

.hero-heading {
  font-family: var(--font-display);
  font-weight: 750;
  font-size: clamp(4rem, 11vw, 9rem);
  line-height: 1;
  letter-spacing: 0;
  color: var(--color-text);
  margin-bottom: 2rem;
}

.hero-italic {
  font-style: italic;
  color: var(--color-accent-purple-vivid);
}

.hero-tagline {
  font-size: clamp(1.05rem, 2vw, 1.3rem);
  color: var(--color-text-muted);
  line-height: 1.6;
  margin-bottom: 2.5rem;
  max-width: 48ch;
}

.hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}
</style>
