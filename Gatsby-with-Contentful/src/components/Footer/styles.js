import styled from 'styled-components'
import { WHITE, BLACK } from '../../config/styles/colours'
import { Wrap } from '../Layout/styles'

export const FooterContainer = styled.footer`
  background: ${BLACK};
  color: ${WHITE};
  display: block;
  padding: 48px 0 24px;
  padding: 3rem 0 1.5rem;
  position: relative;
`

export const FooterWrap = styled(Wrap)`
  padding: 0 !important;
`

export const FooterItem = styled.div`
  display: flex;
  flex-direction: column;
`

export const FooterItemLeft = styled(FooterItem)`
  flex: 2;
`
export const FooterItemRight = styled(FooterItem)`
  flex: 5;
`

export const FooterTitle = styled.h4`
  font-size: 13.328px;
  font-size: 0.833rem;
  letter-spacing: 1.6px;
  letter-spacing: 0.1rem;
  padding-top: 8px;
  padding-top: 0.5rem;
  text-transform: uppercase;
`

export const SocialLink = styled.a`
  color: ${WHITE};
  display: block;
  text-decoration: none;
`
