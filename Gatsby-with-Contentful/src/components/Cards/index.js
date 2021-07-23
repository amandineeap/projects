import styled from 'styled-components'
import { WHITE_PURE } from '../../config/styles/colours'
import { BlogItemLink } from '../BlogItem/styles'

export const Card = styled.div`
  background-color: ${props => (props.white ? WHITE_PURE : '')};
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

  ${BlogItemLink} {
    width: 100%;
  }
`
