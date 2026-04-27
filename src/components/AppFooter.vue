<script setup>
import { footer } from '../content/site.js'
</script>

<template>
  <footer class="site-footer">
    <div class="container footer-inner">
      <p class="footer-copy">{{ footer.copy }}</p>
      <p class="footer-tag">
        Stemactrice &amp; Voice-over
      </p>
    </div>
  </footer>
</template>

<style scoped>
.site-footer {
  border-top: 1px solid var(--color-border);
  padding: 2rem 0;
  transition: border-color var(--ease-slow);
}

.footer-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  flex-wrap: wrap;
}

.footer-copy,
.footer-tag {
  font-size: 0.875rem;
  color: var(--color-text-muted);
}
</style>
