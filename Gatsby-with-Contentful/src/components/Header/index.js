import React from "react"
import { Link } from "gatsby"
import { HeaderContainer, HeaderLogo, Nav, NavLink } from "./styles"
import { Wrap } from "../Layout/styles"

const Header = () => {
  const logo = require("../../images/bs-logo.svg")

  return (
    <HeaderContainer>
      <Wrap full>
        <Link to="/">
          <HeaderLogo src={logo} alt="" />
        </Link>
        <Nav>
          <NavLink to="/work/">Work</NavLink>
          <NavLink to="/blog/">Blog</NavLink>
        </Nav>
      </Wrap>
    </HeaderContainer>
  )
}
export default Header
