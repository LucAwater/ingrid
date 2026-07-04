<script setup>
import { services } from '../content/site.js'
</script>

<template>
  <section :id="services.id" class="section">
    <div class="container">
      <p class="section-eyebrow">{{ services.eyebrow }}</p>
      <h2 class="section-heading">{{ services.heading }}</h2>

      <ul class="services-grid">
        <li v-for="item in services.items" :key="item.title" class="service-card">
          <div class="service-accent" aria-hidden="true"></div>
          <h3 class="service-title">{{ item.title }}</h3>
          <p class="service-description">{{ item.description }}</p>
        </li>
      </ul>
    </div>
  </section>
</template>

<style scoped>
.services-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1px;
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-top: 3rem;
}

@media (min-width: 600px) {
  .services-grid {
    grid-template-columns: 1fr 1fr;
  }
}

@media (min-width: 1024px) {
  .services-grid {
    grid-template-columns: 1fr 1fr 1fr;
  }
}

.service-card {
  padding: 2rem 2rem 2.25rem;
  background-color: var(--color-bg);
  transition: background-color var(--ease-slow);
  position: relative;
}

.service-card:hover {
  background-color: var(--color-surface);
}

.service-accent {
  width: 2rem;
  height: 3px;
  background-color: var(--color-accent-purple-vivid);
  border-radius: 2px;
  margin-bottom: 1.25rem;
  transition: width var(--ease);
}

.service-card:hover .service-accent {
  width: 3rem;
}

.service-title {
  font-family: var(--font-display);
  font-size: 1.15rem;
  font-weight: 700;
  color: var(--color-text);
  margin-bottom: 0.625rem;
}

.service-description {
  font-size: 0.9375rem;
  color: var(--color-text-muted);
  line-height: 1.65;
}
</style>
