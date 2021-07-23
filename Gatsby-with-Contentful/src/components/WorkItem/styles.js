import styled from 'styled-components'
import { Link } from 'gatsby'
import { BLACK, GREY } from '../../config/styles/colours'
import { BREAKPOINT_48_EM } from '../../config/styles/variables'

export const CardTitle = styled.h3`
  color: ${GREY};
  display: block;
  font-size: 1rem;
  padding: 0.75rem 0;
  position: relative;
  -webkit-transition: all 0.1s ease-out;
  transition: all 0.1s ease-out;
`

export const StyledCard = styled(Link)`
  display: flex;
  flex-direction: column;
  margin-bottom: 3rem;
  margin-right: 15px;
  max-width: 32%;
  text-decoration: none;

  img {
    margin: 0;
    opacity: 0.8;
    -webkit-transition: 0.3s ease-out;
    transition: 0.3s ease-out;
  }

  @media (min-width: ${BREAKPOINT_48_EM}) {
    :hover {
      ${CardTitle} {
        color: ${BLACK};
      }
      img {
        opacity: 1;
      }
    }
  }
`
