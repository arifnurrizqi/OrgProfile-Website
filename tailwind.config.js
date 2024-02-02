/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './application/views/**/*.{html,php}',
    './public/**/*.{html,js}',
  ],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#0891B2',
        secondary: '#64748b',
        dark: '#0f172a',
      },
      screens: {
        '2xl': '1320px',
      },
    },
  },
  fontFamily: {
    sans: ['Poppins', 'sans-serif'],
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
