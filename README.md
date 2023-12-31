# miles_no

This is the "parent" repo for miles.no and here you will find documentation for how to work with this project as well as the things you need to get a dev environment up and running.

This repo contains all the required repositories as a submodule, so technically it is used as a "monorepo". The deployment to the actual site should be done from GitHub Actions defined in this repository.

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

## Cloning the repository locally

Regular `git clone https://github.com/miles-no/miles_no.git` will just clone the repository but create an empty folder for submodules.
In order to clone along with the submodules, run with `--recursive` flag, i.e. `git clone --recursive https://github.com/miles-no/miles_no.git`

Since this repository is using Git Submodules, any changes done in the submodule should be pushed into the repository of that submodule.

## Updating submodules

In order to deploy changes you've made to a submodule, you have to update the submodule to point to the latest commit in corresponding repository of the submodule. To update a submodule to point to the latest commit, run the following command:

`git submodule update --remote <submodule>`

This command will pinpoint the module to the latest commit in the underlying repository. Now, commit the update:

`git commit -am "Updated <submodule>`

Afterwards, follow the steps in the next section to deploy the submodule.

## How to deploy changes

We're using GitHub Actions to deploy changes made to the submodules. If you have updated one or more submodules, follow these steps to deploy the updated submodules. 

To deploy your changes, simply:

1. Navigate to the "Actions"-tab in the repository in GitHub
2. Select the workflow corresponding to the submodule you want to deploy
3. Click on "Run workflow"
<img width="1787" alt="Screenshot 2023-10-02 at 16 07 33" src="https://github.com/miles-no/miles_no/assets/9723394/11d4ad30-ce8f-4ce0-81e1-6bb38f7966cb">

### Miles limes

Changes deployed to Heroku on merge to main.
