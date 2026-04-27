<script setup>
import { onMounted } from 'vue'
import { useTheme } from './composables/useTheme.js'
import AppHeader from './components/AppHeader.vue'
import HeroSection from './components/HeroSection.vue'
import AboutSection from './components/AboutSection.vue'
import ServicesSection from './components/ServicesSection.vue'
import DemosSection from './components/DemosSection.vue'
import ContactSection from './components/ContactSection.vue'
import AppFooter from './components/AppFooter.vue'

const { init } = useTheme()

onMounted(() => {
  init()
})
</script>

<template>
  <AppHeader />
  <main>
    <HeroSection />
    <AboutSection />
    <ServicesSection />
    <DemosSection />
    <ContactSection />
  </main>
  <AppFooter />
</template>
