import styled from 'styled-components'
import { BLACK_LINKS } from '../../config/styles/colours'
import {
  BREAKPOINT_32_EM,
  BREAKPOINT_48_EM,
} from '../../config/styles/variables'
import { Link } from 'gatsby'
import { Wrap } from '../Layout/styles'

export const HeaderContainer = styled.header`
  left: 0;
  padding: 16px 8px;
  padding: 1rem 0.5rem;
  position: absolute;
  right: 0;
  top: 0;
  width: 100vw;
  z-index: 2;
  ${Wrap} {
    padding: 0 0 3em 0;
  }
`

export const HeaderLogo = styled.img`
  display: inline-block;
  height: 50px;

  @media (min-width: ${BREAKPOINT_48_EM}) {
    height: 60px;
  }
`

export const Nav = styled.div`
  display: inline-block;
  float: right;
  position: relative;
`

export const NavLink = styled(Link)`
  display: inline-block;
  font-size: 1rem;
  line-height: 1;
  position: relative;
  margin-left: 24px;
  margin-left: 1.5rem;
  color: ${BLACK_LINKS};
  text-decoration: none;
`

export const LandingHeader = styled.div`
  display: block;
  padding-top: 144px;
  padding-top: 9rem;
  position: relative;

  ${Wrap} {
    @media (min-width: ${BREAKPOINT_32_EM}) {
      padding: 0;
    }
  }
`

export const LandingHeaderTitle = styled.h1`
  font-weight: 300;
  font-size: 33.184px;
  font-size: 2.074rem;
`
