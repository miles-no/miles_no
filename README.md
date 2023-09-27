# miles_no

This is the "parent" repo for miles.no and here you will find documentation for how to work with this project as well as the things you need to get a dev environment up and running.

## About the website

The website is based on the previous version of Miles.no built by Ignitas. The website is using Wordpress as the CMS and most of the components on the website are built with Web Components.

The website has an integration with CV-partner that is used to list all consultants.

## Related repositories

- [miles_web_components](https://github.com/miles-no/miles_web_components)
  - The repository containing the web components.
- [miles-wp-theme](https://github.com/miles-no/miles-wp-theme)
  - Wordpress theme used to create wordpress templates and styling of everything not styled in the web components.
- [miles-wp-web-components-plugin](https://github.com/miles-no/miles-wp-web-components-plugin)
  - Plugin that enables editors to create and edit blocks based on the web components. This is where the integration between web components and wordpress takes place.
- [miles_limes](https://github.com/miles-no/miles_limes)
  - Java integration with CV-partner API.

## How to deploy changes

### Miles limes

Changes deployed to Heroku on merge to main.

## Development environment
