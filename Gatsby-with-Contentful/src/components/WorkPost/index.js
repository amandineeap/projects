import styled from 'styled-components'
import { SUPERLIGHTGREY } from '../../config/styles/colours'
import {
  BREAKPOINT_32_EM,
  BREAKPOINT_65_EM,
} from '../../config/styles/variables'

export const Project = styled.div`
  background: ${SUPERLIGHTGREY};
  display: block;
  position: relative;
`

export const ProjectInfo = styled.div`
  background: ${SUPERLIGHTGREY};
  display: block;
  padding: 144px 0 12px;
  padding: 9rem 0 0.75rem;
`

export const ProjectInfoTitle = styled.h1`
  display: block;
  font-size: 33.184px;
  font-size: 2.074rem;
  font-weight: 300;
  position: relative;
`

export const ProjectInfoDescription = styled.div`
  display: flex;
  flex: 5;
  margin-bottom: 72px;
  margin-bottom: 4.5rem;
  position: relative;
  max-width: 700px;
`

export const ProjectGallery = styled.div`
  overflow: none;
  background: #fff;

  ::after,
  ::before {
    content: " ";
    display: table;
  }

  ::after {
    clear: both;
  }

  p,
  .project-gallery__image {
    max-width: inherit;
    img {
      margin: 72px 0;
      margin: 4.5rem 0;
      width: 100%;
    }
    .image__caption {
      bottom: -24px;
      bottom: -1.5rem;
      display: block;
      font-size: 13.328px;
      font-size: 0.833rem;
      position: absolute;
      left: 0;
    }
  }

  h2,
  h2 + p {
    display: flex;
    max-width: 1400px;
    float: left;
    margin-left: 15px;
    margin-right: 15px;
    /* @media (min-width: ${BREAKPOINT_32_EM}) {
      width: 95%;
      width: -webkit-calc(((99.999% / 12) * 12) - (30px));
      width: calc(((99.999% / 12) * 12) - (30px));
    }
    @media (min-width: ${BREAKPOINT_65_EM}) {
      margin-left: 15px;
      margin-right: 15px;
      width: 70%;
      width: -webkit-calc(((99.999% / 12) * 9) - (30px));
      width: calc(((99.999% / 12) * 9) - (30px));
    } */
  }
`
