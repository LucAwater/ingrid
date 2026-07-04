<script setup>
import { ref } from 'vue'
import ThemeToggle from './ThemeToggle.vue'
import { nav } from '../content/site.js'

const menuOpen = ref(false)

function closeMenu() {
  menuOpen.value = false
}
</script>

<template>
  <header class="site-header">
    <div class="header-inner container">
      <a href="#" class="logo" @click="closeMenu" aria-label="Ingrid de lalaLaat — terug naar boven">
        <span class="logo-text">
          Ingrid de <em class="logo-accent">lala</em>Laat
        </span>
      </a>

      <nav class="main-nav" aria-label="Hoofdnavigatie">
        <ul class="nav-list">
          <li v-for="item in nav" :key="item.href">
            <a :href="item.href" class="nav-link">{{ item.label }}</a>
          </li>
        </ul>
      </nav>

      <div class="header-actions">
        <ThemeToggle />
        <button
          class="menu-btn"
          :aria-expanded="menuOpen"
          aria-controls="mobile-nav"
          :aria-label="menuOpen ? 'Sluit menu' : 'Open menu'"
          @click="menuOpen = !menuOpen"
        >
          <span class="hamburger" :class="{ open: menuOpen }" aria-hidden="true">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>
      </div>
    </div>

    <nav
      id="mobile-nav"
      class="mobile-nav"
      :class="{ open: menuOpen }"
      aria-label="Mobiele navigatie"
    >
      <ul class="mobile-nav-list container">
        <li v-for="item in nav" :key="item.href">
          <a :href="item.href" class="mobile-nav-link" @click="closeMenu">
            {{ item.label }}
          </a>
        </li>
      </ul>
    </nav>
  </header>
</template>

<style scoped>
.site-header {
  position: sticky;
  top: 0;
  z-index: 100;
  background-color: var(--color-bg);
  border-bottom: 1px solid var(--color-border);
  transition:
    background-color var(--ease-slow),
    border-color var(--ease-slow);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}

.header-inner {
  display: flex;
  align-items: center;
  gap: 2rem;
  height: var(--header-height);
}

.logo {
  flex-shrink: 0;
  display: flex;
  align-items: center;
}

.logo-text {
  font-family: var(--font-display);
  font-weight: 800;
  font-size: 1.125rem;
  color: var(--color-text);
  letter-spacing: -0.01em;
}

.logo-accent {
  font-style: italic;
  color: var(--color-accent-purple-vivid);
}

.main-nav {
  display: none;
  flex: 1;
}

@media (min-width: 768px) {
  .main-nav {
    display: flex;
  }
}

.nav-list {
  display: flex;
  align-items: center;
  gap: 0.25rem;
}

.nav-link {
  display: block;
  padding: 0.5rem 0.875rem;
  font-size: 0.9rem;
  font-weight: 500;
  color: var(--color-text-muted);
  border-radius: var(--radius);
  transition:
    color var(--ease),
    background-color var(--ease);
}

.nav-link:hover {
  color: var(--color-text);
  background-color: var(--color-surface);
}

.header-actions {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-left: auto;
}

.menu-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2.5rem;
  height: 2.5rem;
}

@media (min-width: 768px) {
  .menu-btn {
    display: none;
  }
}

.hamburger {
  display: flex;
  flex-direction: column;
  gap: 5px;
  width: 22px;
}

.hamburger span {
  display: block;
  height: 2px;
  background-color: var(--color-text);
  border-radius: 2px;
  transition: transform var(--ease), opacity var(--ease);
  transform-origin: center;
}

.hamburger.open span:nth-child(1) {
  transform: translateY(7px) rotate(45deg);
}
.hamburger.open span:nth-child(2) {
  opacity: 0;
}
.hamburger.open span:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg);
}

.mobile-nav {
  overflow: hidden;
  max-height: 0;
  transition: max-height var(--ease-slow);
  border-top: 1px solid transparent;
}

.mobile-nav.open {
  max-height: 20rem;
  border-top-color: var(--color-border);
}

.mobile-nav-list {
  display: flex;
  flex-direction: column;
  padding-top: 1rem;
  padding-bottom: 1.5rem;
  gap: 0.25rem;
}

.mobile-nav-link {
  display: block;
  padding: 0.625rem 0;
  font-size: 1rem;
  font-weight: 500;
  color: var(--color-text-muted);
  transition: color var(--ease);
}

.mobile-nav-link:hover {
  color: var(--color-text);
}
</style>
