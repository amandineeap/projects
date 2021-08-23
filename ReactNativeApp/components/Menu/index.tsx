import React from 'react'
import {Button }from 'react-native'

/**
 * Basic Navigation Menu
 */
const Menu = (navigation)=>{
  return   <React.Fragment>
  <Button
 title="Go to Exclusives"
 onPress={() => navigation.navigate('Exclusive')}
/>

<Button
 title="Go to Tourdates"
 onPress={() => navigation.navigate('Tourdates')}
/>

<Button
 title="Go to Shop"
 onPress={() => navigation.navigate('Shop')}
/>
</React.Fragment>
}
export default Menu