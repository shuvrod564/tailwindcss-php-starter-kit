/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.php", // Scans all .php files in the public folder
    "./public/**/*.html"  // Scans all .html files too, just in case
  ],
  theme: {
    extend: {},
    container: {
      center: true,
    },
  },
  plugins: [],
}