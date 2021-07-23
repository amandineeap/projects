import React from 'react'
import { graphql } from 'gatsby'
import { documentToReactComponents } from '@contentful/rich-text-react-renderer'
import { options } from '../config/utils'
import Layout from '../components/Layout'
import SEO from '../components/SEO'
import { Blog, BlogInfo, BlogInfoTitle, BlogBody } from '../components/BlogPost'
import { Wrap, WrapColumn, WrapRow } from '../components/Layout/styles'
import { Categories, CategoryItem } from '../components/Categories'
import { Editor } from '../components/Editor'
import { SectionTitle, SectionLink } from '../components/Section'
import BlogItem from '../components/BlogItem'
import { ArrowRightLink } from '../components/ArrowRightLink'

export const blogPageQuery = graphql`
  query($slug: String!) {
    contentfulBlog(slug: { eq: $slug }) {
      id
      body {
        json
      }
      title
      slug
      categories
    }
    allContentfulBlog(
      filter: { slug: { ne: $slug } }
      sort: { fields: publishDate, order: DESC }
      limit: 2
    ) {
      nodes {
        id
        title
        slug
        publishDate
      }
    }
  }
`

const BlogPost = ({ data }) => {
  const { title, body, categories } = data.contentfulBlog
  return (
    <Layout>
      <SEO title={title} />
      <Blog>
        <BlogInfo>
          <Wrap full>
            <BlogInfoTitle>{title}</BlogInfoTitle>
          </Wrap>
        </BlogInfo>
        <BlogBody>
          <Wrap full>
            <WrapRow>
              <Categories>
                {categories !== undefined &&
                categories !== null &&
                categories.length > 0
                  ? categories.map(category => (
                      <CategoryItem key={category}>{category}</CategoryItem>
                    ))
                  : null}
              </Categories>
              <Editor>{documentToReactComponents(body.json, options)}</Editor>
            </WrapRow>
          </Wrap>
        </BlogBody>
      </Blog>

      <Wrap full>
        <WrapRow>
          <SectionTitle column>Blog</SectionTitle>
          <WrapColumn>
            {data.allContentfulBlog.nodes.map(post => (
              <BlogItem key={post.id} post={post}></BlogItem>
            ))}
            <SectionLink to="/blog">
              See all
              <ArrowRightLink />
            </SectionLink>
          </WrapColumn>
        </WrapRow>
      </Wrap>
    </Layout>
  )
}
export default BlogPost
