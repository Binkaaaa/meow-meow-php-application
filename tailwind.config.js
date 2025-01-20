/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./include/*.php",
    "./views/**/*.php",
    "./app/**/*.php", 
  ],
  theme: {
    extend: {
      fontFamily:{
        league: ['"League Spartan"', 'sans-serif'],
        playfair: ['"Playfair Display"', 'serif'],
        cormorant: ['"Cormorant Garamond"', 'serif'],
      }
    },
  },
  plugins: [],
};
