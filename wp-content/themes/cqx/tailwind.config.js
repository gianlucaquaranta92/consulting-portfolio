module.exports = {
  content: [
    "./**/*.php", // Ensure this scans all PHP files in your theme
    "./assets/js/**/*.js", // Scans JavaScript files
    "./assets/css/**/*.css", // Scans CSS files
    "./wp-content/themes/cqx/**/*.php", // Ensure it includes PHP files in theme directory
  ],
  theme: {
    extend: {
      extend: {
        colors: {
          primary: "var(--color-primary)",
          secondary: "var(--color-secondary)",
          accent: "var(--color-accent)",
          redlogo: "var(--color-red-logo)",
        },
      },
   
     
    },
  },
  plugins: [],
};
