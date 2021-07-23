import styled from "styled-components"

export const VideoContainer = styled.span`
  padding-bottom: 56.25%;
  position: relative;
  display: block;
  width: 100%;
  margin-bottom: 10px;
  > iframe {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }
`
