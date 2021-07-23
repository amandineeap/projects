import styled from "styled-components"
import { SUPERLIGHTGREY, WHITE } from "../../config/styles/colours"

export const Blog = styled.div`
  background-color: ${SUPERLIGHTGREY};
  display: block;
  position: relative;
`

export const BlogInfo = styled.div`
  background-color: ${WHITE};
  display: block;
  padding: 144px 0 12px;
  padding: 9rem 0 0.75rem;
`

export const BlogInfoTitle = styled.h1`
  display: block;
  font-size: 33.184px;
  font-size: 2.074rem;
  font-weight: 300;
  margin-bottom: 36px;
  margin-bottom: 2.25rem;
  position: relative;
  max-width: 700px;
`

export const BlogBody = styled.div`
  background-color: #fff;
  padding: 48px 0;
  padding: 3rem 0;

  h2 {
    margin: 10px 0px;
  }
`
