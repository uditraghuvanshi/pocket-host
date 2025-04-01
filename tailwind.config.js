/** @type {import('tailwindcss').Config} */
module.exports = {
  content: {
    relative: true,
    transform: (content) => content.replace(/taos:/g, ''), // Remove the 'taos:' prefix
    files:[
      "./index.html",      // Root HTML file
      "./src/**/*.php",    // All PHP files inside src
      "./src/**/*.css",    // If using Tailwind classes inside CSS (rare)],
  ],
  },
  theme: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-motion'),
    require('taos/plugin'),
  ],
  safelist: [
    '!duration-[0ms]',
    '!delay-[0ms]',
    'html.js :where([class*="taos:"]:not(.taos-init))',
  ],
  
    
}

