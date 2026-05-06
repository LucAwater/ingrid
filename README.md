# Ingrid de lalaLaat

Website for Ingrid de lalaLaat, stemactrice & voice-over.

## Stack

- [Vue 3](https://vuejs.org/) — component framework
- [Vite](https://vitejs.dev/) — build tool
- [pnpm](https://pnpm.io/) — package manager
- [oxlint](https://oxc.rs/docs/guide/usage/linter.html) — linter

## Getting started

```bash
pnpm install
pnpm dev
```

## Scripts

| Command | Description |
|---|---|
| `pnpm dev` | Start dev server at http://localhost:5173 |
| `pnpm build` | Build for production into `dist/` |
| `pnpm preview` | Preview the production build locally |
| `pnpm lint` | Lint with oxlint |
| `pnpm format` | Format with oxfmt |

## Project structure

```
src/
├── content/
│   └── site.js          # All copy and content — edit this to update the site
├── composables/
│   ├── useTheme.js       # Light/dark mode with localStorage persistence
│   └── useAudioManager.js# Ensures only one audio demo plays at a time
├── components/
│   ├── AppHeader.vue
│   ├── ThemeToggle.vue
│   ├── HeroSection.vue
│   ├── AboutSection.vue
│   ├── ServicesSection.vue
│   ├── DemosSection.vue
│   ├── AudioPlayer.vue
│   ├── ContactSection.vue
│   └── AppFooter.vue
├── assets/styles/
│   └── base.css          # CSS custom properties, global resets, shared classes
├── App.vue
└── main.js
```

## Audio demos

Drop `.mp3` files into `public/audio/` and update the `demos.tracks` array in `src/content/site.js`. The player handles missing files gracefully.

## Theming

Light and dark mode are driven entirely by CSS custom properties defined in `src/assets/styles/base.css`. The active theme is stored in `localStorage` and defaults to the user's system preference.
