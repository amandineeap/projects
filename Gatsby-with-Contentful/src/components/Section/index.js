import styled from 'styled-components'
import { Link } from 'gatsby'
import { BLACK_LINKS } from '../../config/styles/colours'

export const SectionTitle = styled.h2`
  display: flex;
  flex: 1;
  max-width: ${props => (props.column ? '385px' : '700px')};
  border-top: 1px solid rgba(0, 0, 0, 0.3);
  font-size: 0.833rem;
  margin-right: ${props => (props.column ? '15px' : '')};
  margin-bottom: 2.25rem;
  letter-spacing: 0.1rem;
  padding-top: 0.5rem;
  text-transform: uppercase;
`

export const SectionLink = styled(Link)`
  display: flex;
  flex: 1;
  color: ${BLACK_LINKS};
  font-size: 1rem;
  opacity: 0.7;
  position: relative;
  -webkit-transition: all 0.1s ease-out;
  transition: all 0.1s ease-out;
  text-decoration: none;

  /* &::after {
    content: "\e803";
    display: inline-block;
    font-family: fontello;
    font-size: 0.833rem;
    margin-left: 10px;
    position: relative;
    -webkit-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
  } */
`
