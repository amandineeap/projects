import React from 'react'

import Layout from '../components/Layout'
import { Wrap } from '../components/Layout/styles'
import { LandingHeader, LandingHeaderTitle } from '../components/Header/styles'
// import SEO from "../components/seo"

const NotFoundPage = () => (
  <Layout>
    <LandingHeader>
      <Wrap full>
        <LandingHeaderTitle>404 - Page not found</LandingHeaderTitle>
      </Wrap>
    </LandingHeader>
  </Layout>
)

export default NotFoundPage
