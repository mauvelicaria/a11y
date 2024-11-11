// Import Cypress-axe
import "cypress-axe";

// To check multiple pages
// const pages = [
//   "https://navigationnorth.com/our-work",
//   "https://navigationnorth.com/about-us",
// ];

// pages.forEach((page) => {
//   describe(`Accessibility testing for ${page}`, () => {
//     beforeEach(() => {
//       cy.visit(page); // Adjust the path as necessary
//       cy.injectAxe();
//     });

//     it("Has no detectable accessibility violations", () => {
//       cy.checkA11y();
//     });
//   });
// });

describe("Accessibility Testing with Cypress and Axe", () => {
  // Run this before each test to set up the environment
  beforeEach(() => {
    // Visit the page to test
    cy.visit("https://museable.com");

    // Inject the axe-core library for accessibility testing
    cy.injectAxe();
  });

  // Basic accessibility test for the entire page
  it("Has no detectable accessibility violations on load", () => {
    // Run the accessibility check on the entire page
    cy.checkA11y();
  });

  // Accessibility test for specific elements only
  it("Has no a11y violations on specific elements", () => {
    // Run the accessibility check on the header
    cy.checkA11y("header");

    // Run the accessibility check on the main content
    cy.checkA11y("#main-content");
  });

  // Accessibility test that ignores specific rules
  it("Ignores specific a11y rules", () => {
    cy.checkA11y(null, {
      rules: {
        "color-contrast": { enabled: false }, // Disable color-contrast checks as an example
      },
    });
  });

  // Custom logging of violations
  it("Logs detailed accessibility violation information", () => {
    cy.checkA11y(null, null, (violations) => {
      // Log each violation to the console
      violations.forEach((violation) => {
        cy.log("log", `${violation.id} - ${violation.description}`);
        cy.log("log", `Impact level: ${violation.impact}`);

        // Log each affected node's HTML
        violation.nodes.forEach((node) => {
          cy.log(`Node: ${node.html}`);
        });
      });
    });
  });
});
