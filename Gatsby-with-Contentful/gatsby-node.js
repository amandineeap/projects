/**
 * Implement Gatsby's Node APIs in this file.
 *
 * See: https://www.gatsbyjs.org/docs/node-apis/
 */

// You can delete this file if you're not using it

const path = require(`path`)
const slash = require(`slash`)

exports.createPages = ({ graphql, actions }) => {
  const { createPage } = actions
  // we use the provided allContentfulWork query to fetch the data from Contentful
  return graphql(
    `
      {
        allContentfulWork {
          edges {
            node {
              id
              slug
            }
          }
        }
        allContentfulBlog {
          edges {
            node {
              id
              slug
            }
          }
        }
      }
    `,
  )
    .then(result => {
      if (result.errors) {
        console.log('Error retrieving contentful data', result.errors)
      }

      // WORK POST
      // Resolve the paths to our template
      const workPostTemplate = path.resolve('./src/templates/work-post.js')

      // Then for each result we create a page.
      result.data.allContentfulWork.edges.forEach(edge => {
        createPage({
          path: `/work/${edge.node.slug}/`,
          component: slash(workPostTemplate),
          context: {
            slug: edge.node.slug,
            id: edge.node.id,
          },
        })
      })

      // BLOG POSTS
      const blogTemplate = path.resolve('./src/templates/blog-post.js')
      // Then for each result we create a page.
      result.data.allContentfulBlog.edges.forEach(edge => {
        createPage({
          path: `/blog/${edge.node.slug}/`,
          component: slash(blogTemplate),
          context: {
            slug: edge.node.slug,
            id: edge.node.id,
          },
        })
      })
    })
    .catch(error => {
      console.log('Error retrieving contentful data', error)
    })
}
