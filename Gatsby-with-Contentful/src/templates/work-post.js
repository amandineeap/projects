import React from 'react'
import { graphql } from 'gatsby'
import { documentToReactComponents } from '@contentful/rich-text-react-renderer'
import { options } from '../config/utils'
import Layout from '../components/Layout'
import SEO from '../components/SEO'
import {
  Project,
  ProjectInfo,
  ProjectInfoTitle,
  ProjectGallery,
  ProjectInfoDescription,
} from '../components/WorkPost'
import { Categories, CategoryItem } from '../components/Categories'
import { Wrap, WrapRow, WrapRowEmptyItem } from '../components/Layout/styles'
import { Card } from '../components/Cards'
import { SectionTitle, SectionLink } from '../components/Section'
import { Editor } from '../components/Editor'
import { ArrowRightLink } from '../components/ArrowRightLink'
import WorkItem from '../components/WorkItem'
// import { CreditsContainer, CreditItem } from '../components/Credits'

export const workPageQuery = graphql`
  query($slug: String!) {
    contentfulWork(slug: { eq: $slug }) {
      title
      slug
      categories
      projectIntro {
        projectIntro
      }
      body {
        json
        children {
          ... on ContentfulAsset {
            id
            sizes {
              src
            }
          }
        }
      }
      featuredWork {
        id
        title
        slug
        featuredImage {
          sizes {
            src
          }
        }
      }
      # credits
    }
  }
`

const WorkPost = ({ data }) => {
  const {
    title,
    categories,
    projectIntro,
    body,
    featuredWork,
    // credits,
  } = data.contentfulWork

  return (
    <Layout>
      <SEO title={title} />

      <Project>
        <ProjectInfo>
          <Wrap full>
            <ProjectInfoTitle>{title}</ProjectInfoTitle>
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
              <ProjectInfoDescription>
                {projectIntro.projectIntro}
              </ProjectInfoDescription>
            </WrapRow>
          </Wrap>
        </ProjectInfo>
        <ProjectGallery>
          <Wrap full>
            <Editor>{documentToReactComponents(body.json, options)}</Editor>
            {/* <CreditsContainer>
              {credits !== undefined && credits !== null && credits.length > 0
                ? credits.map(c => <CreditItem>{c}</CreditItem>)
                : null}
            </CreditsContainer> */}
          </Wrap>
        </ProjectGallery>
      </Project>

      <Card>
        <Wrap full>
          <WrapRow>
            <SectionTitle column>Work</SectionTitle>
            {featuredWork !== undefined &&
            featuredWork !== null &&
            featuredWork.length > 0
              ? featuredWork.map(featured => {
                  return <WorkItem key={featured.id} post={featured}></WorkItem>
                })
              : null}
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
      </Card>
    </Layout>
  )
}
export default WorkPost
