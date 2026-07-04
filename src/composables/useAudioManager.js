import { ref } from 'vue'

const activeId = ref(null)

export function useAudioManager() {
  function setActive(id) {
    activeId.value = id
  }

  function clearActive() {
    activeId.value = null
  }

  return { activeId, setActive, clearActive }
}
