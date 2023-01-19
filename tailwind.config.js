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
      "light-gray": "#f5f5f5",
      "albus": "#ffffff",
      "nigrum": "#000000",
    },
    fontFamily: {
      Manrope: ["Manrope, sans-serif"],
      DaysOne: ["Days One, sans-serif"],
    },
    container: {
      center: true,
      padding: "1rem",
    }
  },
  plugins: [],
}
