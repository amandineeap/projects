import Layout from '../components/Layout'
import React from 'react'
import { graphql, StaticQuery } from 'gatsby'
import {
  Intro,
  IntroContainer,
  IntroTitle,
  IntroSubTitle,
} from '../components/Intro'
import {
  Wrap,
  WrapColumn,
  WrapRow,
  WrapRowEmptyItem,
} from '../components/Layout/styles'
import { Card } from '../components/Cards'
import { SectionTitle, SectionLink } from '../components/Section'
import BlogItem from '../components/BlogItem'
import WorkItem from '../components/WorkItem'
import { ArrowRightLink } from '../components/ArrowRightLink'

const HOMEPAGE_POSTS = graphql`
  query HomePagePosts {
    allContentfulWork(filter: { featured: { eq: true } }) {
      nodes {
        id
        slug
        title
        createdAt
        featuredImage {
          sizes {
            src
          }
        }
      }
    }
    allContentfulBlog(sort: { fields: publishDate, order: DESC }, limit: 2) {
      nodes {
        id
        title
        slug
        publishDate
      }
    }
  }
`

const IndexPage = () => {
  return (
    <Layout>
      <Intro>
        <Wrap full>
          <IntroContainer>
            <IntroTitle>
              <span>Digital design</span>
              <span>Branding</span>
              <span>Art direction</span>
            </IntroTitle>
            <IntroSubTitle>
              Multidisciplinary designer from Scotland.
            </IntroSubTitle>
          </IntroContainer>
        </Wrap>
      </Intro>

      <Card white>
        <StaticQuery
          query={HOMEPAGE_POSTS}
          render={data => (
            <>
              {data.allContentfulWork && (
                <Wrap full white>
                  <WrapRow>
                    <SectionTitle column>Work</SectionTitle>
                    {data.allContentfulWork.nodes.map(post => (
                      <WorkItem key={post.id} post={post}></WorkItem>
                    ))}
                  </WrapRow>

                  <WrapRow>
                    <WrapRowEmptyItem />
                    <SectionLink to="/work">
                      See all
                      <ArrowRightLink />
                    </SectionLink>
                    <WrapRowEmptyItem />
                  </WrapRow>
                </Wrap>
              )}

              {data.allContentfulBlog && (
                <Wrap full white>
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
              )}
            </>
          )}
        />
      </Card>
    </Layout>
  )
}

export default IndexPage
