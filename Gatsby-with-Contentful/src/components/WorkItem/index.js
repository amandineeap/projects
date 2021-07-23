import React from 'react'
import { StyledCard, CardTitle } from './styles'

const WorkItem = ({ post }) => {
  const workPostUrl = `/work/${post.slug}`

  return (
    <StyledCard key={post.id} to={workPostUrl}>
      <img src={post.featuredImage.sizes.src} alt="" />
      <CardTitle>{post.title}</CardTitle>
    </StyledCard>
  )
}

export default WorkItem
