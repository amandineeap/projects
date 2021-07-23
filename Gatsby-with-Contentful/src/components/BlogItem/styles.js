import styled from 'styled-components'
import { Link } from 'gatsby'
import { BLACK, GREY } from '../../config/styles/colours'
import { BREAKPOINT_48_EM } from '../../config/styles/variables'

export const BlogList = styled.div`
  overflow: none;
  display: block;
  padding: 48px 0;
  padding: 3rem 0;
  position: relative;

  ::after,
  ::before {
    content: ' ';
    display: table;
  }

  ::after {
    clear: both;
  }
`

export const BlogItemDate = styled.span`
  color: ${GREY};
  font-size: 13.328px;
  font-size: 0.833rem;
  opacity: 0.6;
  -webkit-transition: 0.1s ease-out;
  transition: 0.1s ease-out;
`

export const BlogItemTitle = styled.h3`
  color: ${GREY};
  font-size: 19.2px;
  font-size: 1.2rem;
`

export const BlogItemLink = styled(Link)`
  display: flex;
  flex: 1;
  border-top: 1px solid rgba(0, 0, 0, 0.3);
  display: block;
  padding: 8px 0 72px;
  padding: 0.5rem 0 4.5rem;
  position: relative;
  text-decoration: none;
  margin-right: 30px;

  :before {
    background: ${BLACK};
    content: '';
    height: 1px;
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    -webkit-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
    width: 0;
  }

  :hover:before {
    @media (min-width: ${BREAKPOINT_48_EM}) {
      opacity: 1;
      right: 0;
      width: 100%;
    }
  }

  :hover ${BlogItemDate} {
    @media (min-width: ${BREAKPOINT_48_EM}) {
      opacity: 1;
    }
  }

  :hover .blog-item__title {
    @media (min-width: ${BREAKPOINT_48_EM}) {
      color: ${BLACK};
    }
  }
`
