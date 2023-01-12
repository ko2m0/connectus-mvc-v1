/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      "connectus-blue": "#014479",
      "connectus-orange": "#FF9900",
      "albus": "#ffffff",
      "nigrum": "#000000",
    },
    fontFamily: {
      Manrope: ["Manrope, sans-serif"],
    },
    container: {
      center: true,
      padding: "1rem",
    }
  },
  plugins: [],
}
