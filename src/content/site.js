export const meta = {
  title: 'Ingrid de lalaLaat — Stemactrice & Voice-over',
  description:
    'Ingrid de lalaLaat is stemactrice en voice-over. Warm, veelzijdig en professioneel voor commercials, documentaires, e-learning en meer.',
}

export const nav = [
  { label: 'Over mij', href: '#over-mij' },
  { label: 'Diensten', href: '#diensten' },
  { label: "Demo's", href: '#demos' },
  { label: 'Contact', href: '#contact' },
]

export const hero = {
  eyebrow: 'Stemactrice & Voice-over',
  nameLine1: 'Ingrid',
  nameLine2: 'de ',
  nameItalic: 'lala',
  nameSuffix: 'Laat',
  tagline:
    'Van warm en intiem tot energiek en overtuigend — ik geef jouw verhaal een stem.',
  ctas: [
    { label: "Beluister demo's", href: '#demos', primary: true },
    { label: 'Neem contact op', href: '#contact', primary: false },
  ],
}

export const about = {
  id: 'over-mij',
  eyebrow: 'Over mij',
  heading: 'Een stem met karakter',
  paragraphs: [
    'Ik ben Ingrid de lalaLaat, stemactrice en voice-over. Met mijn stem geef ik commercials, documentaires, e-learnings en animaties hun karakter en kleur.',
    'Na mijn opleiding aan de toneelschool werk ik al jaren voor radio, televisie en online platformen. Mijn stem is veelzijdig: warm en persoonlijk, maar ook krachtig en overtuigend als de situatie dat vraagt.',
    'Elke opdracht is uniek, en dat is precies wat ik zo mooi vind aan dit werk.',
  ],
}

export const services = {
  id: 'diensten',
  eyebrow: 'Wat ik doe',
  heading: 'Diensten',
  items: [
    {
      title: 'Commercials',
      description:
        'Radio- en tv-reclames die opvallen en blijven hangen. Van productlancering tot merkidentiteit.',
    },
    {
      title: 'Documentaires',
      description:
        'Een vertellersstem die verdiept en begeleidt, zonder op de voorgrond te treden.',
    },
    {
      title: 'E-learning',
      description:
        'Helder, toegankelijk en rustgevend — zodat de boodschap daadwerkelijk landt.',
    },
    {
      title: 'Animatie',
      description:
        'Karakterstemmen die personages tot leven brengen met nuance en energie.',
    },
    {
      title: 'Corporate video',
      description:
        "Bedrijfsvideo's en presentaties met precies de juiste toon voor jouw merk.",
    },
    {
      title: 'Audioboeken',
      description:
        'Langvorm vertelling waarbij ritme, sfeer en karakter centraal staan.',
    },
  ],
}

export const demos = {
  id: 'demos',
  eyebrow: "Demo's",
  heading: 'Luister mee',
  intro: 'Een selectie van mijn werk. Zet je koptelefoon op.',
  tracks: [
    {
      id: 'commercial-nl',
      title: 'Commercial — Nederlands',
      category: 'Commercial',
      src: '/audio/demo-commercial-nl.mp3',
    },
    {
      id: 'commercial-en',
      title: 'Commercial — English',
      category: 'Commercial',
      src: '/audio/demo-commercial-en.mp3',
    },
    {
      id: 'documentaire',
      title: 'Documentaire',
      category: 'Documentaire',
      src: '/audio/demo-documentaire.mp3',
    },
    {
      id: 'elearning',
      title: 'E-learning',
      category: 'E-learning',
      src: '/audio/demo-elearning.mp3',
    },
    {
      id: 'animatie',
      title: 'Animatie & fictie',
      category: 'Animatie',
      src: '/audio/demo-animatie.mp3',
    },
  ],
}

export const contact = {
  id: 'contact',
  eyebrow: 'Contact',
  heading: 'Samen werken?',
  text: 'Interesse of een vraag? Ik vertel je graag meer en maak een offerte op maat.',
  email: 'hallo@lalalaat.nl',
  links: [
    {
      label: 'hallo@lalalaat.nl',
      href: 'mailto:hallo@lalalaat.nl',
      kind: 'email',
    },
    {
      label: 'LinkedIn',
      href: 'https://linkedin.com/in/ingriddelaat',
      kind: 'external',
    },
  ],
}

export const footer = {
  copy: '© 2026 Ingrid de lalaLaat',
}
