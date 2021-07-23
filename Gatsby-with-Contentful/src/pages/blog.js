import Layout from '../components/Layout';
import React from 'react';
import { StaticQuery, graphql } from 'gatsby';
import BlogItem from '../components/BlogItem';
import { BlogList } from '../components/BlogItem/styles';
import { Wrap, WrapRow } from '../components/Layout/styles';
import { LandingHeader, LandingHeaderTitle } from '../components/Header/styles';

const ALL_BLOG_POSTS = graphql`
  query AllBlogPosts {
    allContentfulBlog(sort: { fields: publishDate, order: DESC }) {
      nodes {
        id
        title
        slug
        categories
        publishDate
      }
    }
  }
`;

const Blog = () => (
  <StaticQuery
    query={ALL_BLOG_POSTS}
    render={data => (
      <Layout>
        <LandingHeader>
          <Wrap full>
            <LandingHeaderTitle>Blog</LandingHeaderTitle>
          </Wrap>
        </LandingHeader>
        <BlogList>
          <Wrap full>
            <WrapRow>
              {data.allContentfulBlog.nodes.map(post => (
                <BlogItem key={post.id} post={post}></BlogItem>
              ))}
            </WrapRow>
          </Wrap>
        </BlogList>
      </Layout>
    )}
  />
);

export default Blog;
