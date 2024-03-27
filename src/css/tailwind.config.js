/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.html', './src/**/*.js'],
  theme: {
    extend: {
      colors: {
        // Define custom colors
        primary: '#3490dc',
        secondary: '#ffed4a',
        danger: '#e3342f',
      },
      fontFamily: {
        // Extend existing font families or define new ones
        sans: ['Roboto', 'Arial', 'sans-serif'],
      },
      spacing: {
        // Add custom spacing values
        '72': '18rem',
        '84': '21rem',
        '96': '24rem',
      },
      fontSize: {
        // Add custom font sizes
        '7xl': '5rem',
      },
    },
  },
  plugins: [
    // Include any additional plugins here
    // Example: require('@tailwindcss/forms'),
  ],
};
