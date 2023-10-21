/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./build/*.html'],
  theme: {
    extend: {
      colors:{
        'pale-blue':'#20B2AA',
        'gray': 'c4c4c4',
        'pale':'#ddd',
        'pale-color': '#ddd',
        'li-back':'#f2f2f2',
        'info-color': '#0f5753',
        'info-back': '#bef4f1',
        'info-border': '#7de8e3'
      },
      width:{
        'custom': '50rem',
        'popup-width': '30em'
      }
    },
  },
  plugins: [
    require('tailwind-scrollbar')
  ],
}

