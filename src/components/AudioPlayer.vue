<script setup>
import { ref, computed, watch, onUnmounted } from 'vue'
import { useAudioManager } from '../composables/useAudioManager.js'

const props = defineProps({
  track: {
    type: Object,
    required: true,
  },
})

const { activeId, setActive } = useAudioManager()

const audioEl = ref(null)
const isPlaying = ref(false)
const currentTime = ref(0)
const duration = ref(0)
const hasError = ref(false)

const progressPct = computed(() =>
  duration.value > 0 ? (currentTime.value / duration.value) * 100 : 0
)

function formatTime(seconds) {
  if (!seconds || isNaN(seconds)) return '0:00'
  const m = Math.floor(seconds / 60)
  const s = Math.floor(seconds % 60)
  return `${m}:${s.toString().padStart(2, '0')}`
}

async function togglePlay() {
  if (!audioEl.value || hasError.value) return

  if (isPlaying.value) {
    audioEl.value.pause()
    isPlaying.value = false
  } else {
    setActive(props.track.id)
    try {
      await audioEl.value.play()
      isPlaying.value = true
    } catch {
      hasError.value = true
    }
  }
}

function seek(e) {
  if (!audioEl.value || !duration.value) return
  audioEl.value.currentTime = Number(e.target.value)
}

function onTimeUpdate() {
  currentTime.value = audioEl.value?.currentTime ?? 0
}

function onLoadedMetadata() {
  duration.value = audioEl.value?.duration ?? 0
  hasError.value = false
}

function onEnded() {
  isPlaying.value = false
  currentTime.value = 0
}

function onError() {
  hasError.value = true
  isPlaying.value = false
}

watch(activeId, (id) => {
  if (id !== props.track.id && isPlaying.value) {
    audioEl.value?.pause()
    isPlaying.value = false
  }
})

onUnmounted(() => {
  audioEl.value?.pause()
})
</script>

<template>
  <div class="player" :class="{ playing: isPlaying, error: hasError }">
    <button
      class="play-btn"
      :aria-label="isPlaying ? `Pauzeer ${track.title}` : `Speel ${track.title}`"
      :disabled="hasError"
      @click="togglePlay"
    >
      <span class="play-btn-inner">
        <svg
          v-if="!isPlaying"
          xmlns="http://www.w3.org/2000/svg"
          width="18"
          height="18"
          viewBox="0 0 24 24"
          aria-hidden="true"
        >
          <polygon points="5,3 19,12 5,21" fill="currentColor" />
        </svg>
        <svg
          v-else
          xmlns="http://www.w3.org/2000/svg"
          width="18"
          height="18"
          viewBox="0 0 24 24"
          aria-hidden="true"
        >
          <rect x="6" y="4" width="4" height="16" fill="currentColor" />
          <rect x="14" y="4" width="4" height="16" fill="currentColor" />
        </svg>
      </span>
    </button>

    <div class="player-body">
      <div class="player-meta">
        <span class="player-title">{{ track.title }}</span>
        <span class="player-category">{{ track.category }}</span>
      </div>

      <div class="player-controls">
        <input
          type="range"
          class="scrubber"
          :min="0"
          :max="duration || 100"
          :value="currentTime"
          :style="{ '--pct': progressPct + '%' }"
          :aria-label="`Voortgang van ${track.title}`"
          :aria-valuetext="`${formatTime(currentTime)} van ${formatTime(duration)}`"
          :disabled="hasError || !duration"
          @input="seek"
        />
        <div class="player-time" aria-live="off">
          <span>{{ formatTime(currentTime) }}</span>
          <span v-if="hasError" class="error-msg">Demo niet beschikbaar</span>
          <span v-else>{{ formatTime(duration) }}</span>
        </div>
      </div>
    </div>

    <audio
      ref="audioEl"
      :src="track.src"
      preload="metadata"
      @timeupdate="onTimeUpdate"
      @loadedmetadata="onLoadedMetadata"
      @ended="onEnded"
      @error="onError"
    />
  </div>
</template>

<style scoped>
.player {
  display: flex;
  align-items: center;
  gap: 1.25rem;
  padding: 1.25rem 1.5rem;
  background-color: var(--color-bg);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  transition:
    border-color var(--ease),
    background-color var(--ease-slow);
}

.player.playing {
  border-color: var(--color-accent-purple-vivid);
}

.play-btn {
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3.25rem;
  height: 3.25rem;
  border-radius: 50%;
  background: linear-gradient(135deg, #8b5cf6 0%, #ec4899 100%);
  padding: 3px;
  transition: transform var(--ease), opacity var(--ease), box-shadow var(--ease);
}

.play-btn-inner {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: var(--color-bg);
  color: var(--color-text);
  transition: background-color var(--ease-slow);
}

.play-btn:hover:not(:disabled) {
  transform: scale(1.07);
}

.play-btn:disabled {
  opacity: 0.35;
  cursor: not-allowed;
}

.playing .play-btn {
  box-shadow: 0 0 18px rgba(139, 92, 246, 0.45), 0 0 36px rgba(236, 72, 153, 0.25);
}

.player-body {
  flex: 1;
  min-width: 0;
  display: flex;
  flex-direction: column;
  gap: 0.625rem;
}

.player-meta {
  display: flex;
  align-items: baseline;
  gap: 0.75rem;
  flex-wrap: wrap;
}

.player-title {
  font-weight: 500;
  font-size: 0.9375rem;
  color: var(--color-text);
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.player-category {
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-accent-purple-vivid);
  white-space: nowrap;
}

.player-controls {
  display: flex;
  flex-direction: column;
  gap: 0.375rem;
}

.scrubber {
  -webkit-appearance: none;
  appearance: none;
  width: 100%;
  height: 4px;
  border-radius: 2px;
  background: linear-gradient(
    to right,
    var(--color-accent-purple-vivid) var(--pct, 0%),
    var(--color-border-strong) var(--pct, 0%)
  );
  cursor: pointer;
  outline: none;
  transition: background var(--ease);
}

.scrubber::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  background-color: var(--color-accent-purple-vivid);
  cursor: pointer;
  transition: transform var(--ease);
}

.scrubber::-moz-range-thumb {
  width: 14px;
  height: 14px;
  border-radius: 50%;
  border: none;
  background-color: var(--color-accent-purple-vivid);
  cursor: pointer;
}

.scrubber:focus-visible::-webkit-slider-thumb {
  transform: scale(1.3);
}

.scrubber:disabled {
  opacity: 0.4;
  cursor: not-allowed;
}

.player-time {
  display: flex;
  justify-content: space-between;
  font-size: 0.75rem;
  color: var(--color-text-muted);
  font-variant-numeric: tabular-nums;
}

.error-msg {
  color: var(--color-text-muted);
  font-style: italic;
}
</style>
