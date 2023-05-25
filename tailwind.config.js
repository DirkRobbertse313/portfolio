/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
  content: [
    '"./src/**/*.{html,js}"',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [require("./plugin")],
}

