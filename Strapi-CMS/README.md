# Strapi playground

## Automatic slug generation

`slugify`
[https://strapi.io/documentation/developer-docs/latest/guides/slug.html](https://strapi.io/documentation/developer-docs/latest/guides/slug.html)

## Database setup for PostgresSQL

`pg` and `pg-connection-string`
Check `./config/database.js` for setup

## Add dynamic zone components to type

[https://strapi.io/blog/creating-strapi-dynamic-zone-in-nuxtjs-app](https://strapi.io/blog/creating-strapi-dynamic-zone-in-nuxtjs-app)

## Update endpoint permissions

Navigate to Settings > User & Permissions plugin > Roles > Public
Tick the `find` and `findone` for the relevant types and save.

## Add GraphQL

`yarn strapi install graphql` or just go to the marketplace within the admin ui and download it.
You should then be able to test the queries in the GraphQL Playground at `http://localhost:1337/graphql`

## Custom plugin - rich text editor example

[https://strapi.io/documentation/developer-docs/latest/guides/registering-a-field-in-admin.html#setup](https://strapi.io/documentation/developer-docs/latest/guides/registering-a-field-in-admin.html#setup)
