
## Local Setup - VS Code and Prettier

The `./.vscode` folder contains the setup for VS Code.

The project uses [Prettier](https://prettier.io/) for code styling and the settings can be found in the `.prettierrc` file.

## Gatsby

The site is built in [React](https://reactjs.org/) with [Gatsby](https://www.gatsbyjs.org/)

To run the project locally, open a terminal window and run this command `npm run start`

This should complile the project and start the server on `http://localhost:8000/` and the GraphQL server `http://localhost:8000/___graphql` to test queries for the content provided by [Contenful](https://www.contentful.com/)

All the files we are concerned about are (folders have to remain where they are for the site to work correctly):

- In the `./src/pages` folder for the main pages
- In the `./src/templates` folder for the templates of dynamic pages
- In the `./src/components` folder for the re-usable styled components

The site is using [styled components](https://www.styled-components.com/)

The icons come from [react-feather](https://feathericons.com/)

Some variables have been defined in the `./src/config/styles/` folder for colours, media queries breakpoints etc.

Sometimes, depending on the changes made, the `./.cache` folder might need deleted and the servers restarted to see the changes correctly (new post added on Contentful whilst the server is running for eg.)

## Contenful and GraphQL

The CMS part of the site is provided by [Contenful](https://www.contentful.com/) (login provided).

It allows for the creation of various different types of content and fields, provides a nice [GraphQL](https://graphql.org/) server for the front-end to query data as wished easily and allows for development and production environments to be setup too

## Netlify

The site is deployed with [Netlify](https://netlify.com/)

