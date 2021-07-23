import styled from 'styled-components'
import { DARKGREY, LIGHTGREY } from '../../config/styles/colours'
import { BREAKPOINT_65_EM } from '../../config/styles/variables'

export const Editor = styled.div`
  display: flex;
  flex-direction: column;
  flex: 5;

  p {
    color: ${DARKGREY};
    font-size: 16px;
    font-size: 1rem;

    .pull-out {
      color: ${LIGHTGREY};
      font-size: 19.2px;
      font-size: 1.2rem;
      padding: 24px 0;
      padding: 1.5rem 0;
      max-width: 450px;

      @media (min-width: ${BREAKPOINT_65_EM}) {
        margin-left: -4.5rem;
      }
    }
  }

  h2,
  h2 + p {
    display: flex;
    flex: 2;
    font-size: 1.2em;

    @media (min-width: 65em) {
      width: auto !important;
    }
  }

  h2 + div {
    display: flex;
    flex: 5;
  }

  img,
  picture {
    display: block;
    padding: 48px 0;
    padding: 3rem 0;
    position: relative;
  }

  a {
    color: inherit;
    text-decoration: none;
  }
`
