import React from "react"
import moment from "moment"
import { BlogItemLink, BlogItemDate, BlogItemTitle } from "./styles"

const BlogItem = ({ post }) => {
  const blogUrl = `/blog/${post.slug}`

  return (
    <BlogItemLink to={blogUrl}>
      <BlogItemDate>
        {moment(post.publishDate).format("MMMM DD, YYYY")}
      </BlogItemDate>
      <BlogItemTitle>{post.title}</BlogItemTitle>
    </BlogItemLink>
  )
}

export default BlogItem
