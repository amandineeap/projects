import Layout from '../components/Layout';
import React from 'react';
import { StaticQuery, graphql } from 'gatsby';
import WorkItem from '../components/WorkItem';
import { Wrap, WrapRow } from '../components/Layout/styles';
import { LandingHeader, LandingHeaderTitle } from '../components/Header/styles';
import { Card } from '../components/Cards';

const ALL_WORK = graphql`
  query AllWork {
    allContentfulWork {
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
  }
`;

const Work = () => (
  <StaticQuery
    query={ALL_WORK}
    render={data => (
      <Layout>
        <LandingHeader>
          <Wrap full>
            <LandingHeaderTitle>Work</LandingHeaderTitle>
          </Wrap>
        </LandingHeader>
        <Card>
          <Wrap full>
            <WrapRow>
              {data.allContentfulWork.nodes.map(post => (
                <WorkItem key={post.id} post={post}></WorkItem>
              ))}
            </WrapRow>
          </Wrap>
        </Card>
      </Layout>
    )}
  />
);

export default Work;
