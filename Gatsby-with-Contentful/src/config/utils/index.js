import React from 'react'
import { BLOCKS, MARKS, INLINES } from '@contentful/rich-text-types'
import { VideoContainer } from '../../components/VideoContainer'

export const options = {
  renderMark: {
    [MARKS.BOLD]: text => <p>{text}</p>,
  },
  renderNode: {
    [BLOCKS.PARAGRAPH]: (node, children) => <div>{children}</div>,

    [BLOCKS.EMBEDDED_ASSET]: node => {
      let url =
        node.data.target.fields.file &&
        node.data.target.fields.file['en-US'].url
      let alt =
        node.data.target.fields.file &&
        node.data.target.fields.file['en-US'].alt
      return <img src={url} alt={alt} />
    },

    [INLINES.HYPERLINK]: node => {
      if (node.data.uri.includes('player.vimeo.com/video')) {
        return (
          <VideoContainer>
            <iframe
              title={node.data.title}
              src={node.data.uri}
              frameBorder="0"
              allowFullScreen
            ></iframe>
          </VideoContainer>
        )
      } else if (node.data.uri.includes('youtube.com/embed')) {
        return (
          <VideoContainer>
            <iframe
              title={node.data.title}
              src={node.data.uri}
              allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
              frameBorder="0"
              allowFullScreen
            ></iframe>
          </VideoContainer>
        )
      } else {
        console.log({ node })
        return <a href={node.data.uri}>{node.content[0].value}</a>
      }
    },
  },
  renderText: text => text.replace('!', '?'),
}
