<script setup>
import { contact } from '../content/site.js'
</script>

<template>
  <section :id="contact.id" class="section contact">
    <div class="container">
      <p class="section-eyebrow">{{ contact.eyebrow }}</p>
      <h2 class="section-heading">{{ contact.heading }}</h2>
      <p class="contact-text">{{ contact.text }}</p>

      <div class="contact-links">
        <a
          :href="`mailto:${contact.email}`"
          class="email-link"
          aria-label="Stuur een e-mail naar Ingrid"
        >
          {{ contact.email }}
        </a>

        <div class="secondary-links">
          <a
            v-for="link in contact.links.filter(l => l.kind !== 'email')"
            :key="link.href"
            :href="link.href"
            class="external-link"
            target="_blank"
            rel="noopener noreferrer"
          >
            {{ link.label }}
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="14"
              height="14"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
              <polyline points="15 3 21 3 21 9" />
              <line x1="10" y1="14" x2="21" y2="3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.contact-text {
  font-size: clamp(1rem, 1.5vw, 1.125rem);
  color: var(--color-text-muted);
  max-width: 48ch;
  margin-bottom: 2.5rem;
  line-height: 1.7;
}

.contact-links {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.email-link {
  display: inline-block;
  font-family: var(--font-display);
  font-size: clamp(1.25rem, 3vw, 2rem);
  font-weight: 700;
  color: var(--color-text);
  border-bottom: 2px solid var(--color-accent-purple-vivid);
  padding-bottom: 0.125rem;
  transition:
    color var(--ease),
    border-color var(--ease);
}

.email-link:hover {
  color: var(--color-accent-purple-vivid);
}

.secondary-links {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.external-link {
  display: inline-flex;
  align-items: center;
  gap: 0.375rem;
  font-size: 0.9375rem;
  font-weight: 500;
  color: var(--color-text-muted);
  transition: color var(--ease);
}

.external-link:hover {
  color: var(--color-text);
}
</style>
