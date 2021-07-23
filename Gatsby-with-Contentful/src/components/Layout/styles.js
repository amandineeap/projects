import styled from 'styled-components'
import { BREAKPOINT_32_EM } from '../../config/styles/variables'
import { SUPERLIGHTGREY, WHITE_PURE } from '../../config/styles/colours'

export const PageContainer = styled.div`
  background-color: ${SUPERLIGHTGREY};
`

export const Wrap = styled.div`
  background-color: ${props => (props.white ? WHITE_PURE : '')};
  overflow: none;
  width: 100%;
  max-width: ${props => (props.full ? '1200px' : '')};
  margin: 0 auto;
  padding: 0 10px;

  @media (min-width: ${BREAKPOINT_32_EM}) {
    padding: 3rem 0;
  }
`

export const WrapColumn = styled.div`
  display: flex;
  flex-direction: column;
`

export const WrapRow = styled.div`
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  flex: 1;
  justify-content: flex-start;
  width: 100%;
`
export const WrapRowEmptyItem = styled.div`
  display: flex;
  flex: 1;
  max-width: 700px;
`
