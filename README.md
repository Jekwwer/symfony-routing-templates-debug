# Symfony Basics: Routing, Templates, and Debugging

This repository contains a Symfony project for completing specific exercises designed to build familiarity with Symfony features like controllers, Twig templating, URL parameters, and debugging.

## Project Overview

This project is based on the [Symfony template](https://github.com/Jekwwer/symfony-template) and includes tasks that guide through creating a menu, handling URL parameters, setting up Twig templates, and using debugging tools. Each task builds upon Symfony fundamentals and includes practical implementations to reinforce learning.

---

> This project is created as part of an exercise for the VŠPJ course "WT - Webové technologie" (Web Technologies) 2024-2025, Exercise 8.

---

### Tasks Included

1. **Create a Menu in Twig**
   Set up a navigational menu in Twig to access different exercises within the project.

2. **Define a Getter to Display URL Parameters**
   Implement a getter function in a Symfony controller to handle and display URL parameters.

3. **Extend Twig Templates**
   Configure `index.html.twig` to inherit from `base.html.twig` for consistent layout across pages.

4. **Send Uppercase Text to Twig and Apply a Filter**
   Pass uppercase text from the controller to a Twig template, then apply a filter to make it lowercase in Twig.

5. **Debug Using `dump` in the Controller**
   Practice debugging by using the `dump()` function in a controller to inspect variables and arrays.

## Getting Started

### Prerequisites

Ensure you have PHP, Composer, and Symfony CLI installed. Clone this repository and run the following commands to set up the environment:

```bash
# Start the Symfony server
make serve
```

### Usage

Each exercise is accessible through specific routes defined in the controllers. Navigate through the application by visiting the appropriate URLs or using the menu configured in `base.html.twig`.
