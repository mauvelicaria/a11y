const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    baseUrl: "https://museable.com",
    supportFile: "cypress/support/e2e.js",
    specPattern: "cypress/e2e/**/*.spec.js",
    setupNodeEvents(on, config) {
      on("task", {
        log(message) {
          console.log(message);
          // return null;
        },
      });
    },
  },
});
