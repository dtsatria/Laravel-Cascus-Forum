/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      backgroundColor : {
        'default' : '#1f2937',
      }
    }
  },
  plugins: [require("rippleui"), require('preline/plugin'),],

}
  


