<script setup>
import { onMounted } from 'vue'
import { useTheme } from './composables/useTheme.js'
import HeroSection from './components/HeroSection.vue'
import DemosSection from './components/DemosSection.vue'
import AboutSection from './components/AboutSection.vue'
import ServicesSection from './components/ServicesSection.vue'
import ContactSection from './components/ContactSection.vue'
import AppFooter from './components/AppFooter.vue'

const { init } = useTheme()

onMounted(() => {
  init()
})
</script>

<template>
  <main>
    <HeroSection />
    <DemosSection />
    <AboutSection />
    <ServicesSection />
    <ContactSection />
  </main>
  <AppFooter />
</template>
