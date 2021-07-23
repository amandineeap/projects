import React from "react"
import {
  FooterContainer,
  FooterWrap,
  FooterItemLeft,
  FooterItemRight,
  FooterTitle,
  SocialLink,
} from "./styles"
import { WrapRow } from "../Layout/styles"

const Footer = () => (
  <FooterContainer>
    <FooterWrap full>
      <WrapRow>
        <FooterItemLeft>
          <FooterTitle>Social</FooterTitle>
          <SocialLink href="https://twitter.com/BRAD___SMITH?lang=en">
            Twitter
          </SocialLink>
          <SocialLink href="https://www.instagram.com/bradderaders/?hl=en">
            Instagram
          </SocialLink>
        </FooterItemLeft>
        <FooterItemRight>
          <FooterTitle>Contact</FooterTitle>
          <span>bradley0612@googlemail.com</span>
        </FooterItemRight>
      </WrapRow>
    </FooterWrap>
  </FooterContainer>
)
export default Footer
