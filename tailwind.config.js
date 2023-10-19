/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./build/*.html'],
  theme: {
    extend: {
      colors:{
        'pale-blue':'#20B2AA',
        'gray': 'c4c4c4',
        'pale':'#ddd'
      },
      width:{
        'custom': '50rem'
      }
    },
  },
  plugins: [],
}

