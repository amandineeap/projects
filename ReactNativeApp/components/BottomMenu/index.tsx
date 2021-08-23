import React from 'react'
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';

import Exclusive from '../Exclusive'
import Tourdates from '../Tourdates'
import Shop from '../Shop'
import Settings from '../Settings'

const Tab = createBottomTabNavigator();

const BottomMenu = ()=> {
  return (
    <Tab.Navigator>
      <Tab.Screen name="Exclusive" component={Exclusive} />
      <Tab.Screen name="Tourdates" component={Tourdates} />
      <Tab.Screen name="Shop" component={Shop} />
      <Tab.Screen name="Settings" component={Settings} />
    </Tab.Navigator>
  );
}
export default BottomMenu