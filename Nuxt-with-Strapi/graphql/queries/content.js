import gql from 'graphql-tag'

// Main query to get page-specific content

export const pagesQuery = gql`
  query Pages($Page: String!) {
    pages(where: { title: $Page }) {
      id
      title
      description
      color
      customDropdown
      pageZone {
        ... on ComponentPageComponentsSingleImage {
          id
          image {
            url
          }
        }
        ... on ComponentPageComponentsQuote {
          id
          title
          quote
          attribution
          source
        }
        ... on ComponentPageComponentsTextBlock {
          id
          textBlock
        }
      }
    }
  }
`
