import React from 'react';
import {Text} from 'react-native';
import {createBottomTabNavigator} from '@react-navigation/bottom-tabs';

import Exclusive from '../Exclusive';
import Tourdates from '../Tourdates';
import Shop from '../Shop';
import Settings from '../Settings';

const Tab = createBottomTabNavigator();

const TabScreenStyles = {
  tabBarActiveBackgroundColor: 'white',
  tabBarActiveTintColor: 'black',
  tabBarInactiveBackgroundColor: 'black',
  tabBarInactiveTintColor: 'white',
};

const BottomMenu = () => {
  return (
    <Tab.Navigator
      screenOptions={({route}) => ({
        tabBarIcon: ({focused, color, size}) => {
          let iconName;

          if (route.name === 'Exclusive') {
            iconName = 'excluIcon';
          } else if (route.name === 'Tourdates') {
            iconName = 'tourIcon';
          } else if (route.name === 'Shop') {
            iconName = 'shopIcon';
          } else if (route.name === 'Settings') {
            iconName = 'settingsIcon';
          }

          return <Text style={{color: focused? 'black': 'white'}}>{iconName}</Text>;
        },
      })}>
      <Tab.Screen
        name="Exclusive"
        component={Exclusive}
        options={TabScreenStyles}
      />
      <Tab.Screen
        name="Tourdates"
        component={Tourdates}
        options={TabScreenStyles}
      />
      <Tab.Screen name="Shop" component={Shop} options={TabScreenStyles} />
      <Tab.Screen
        name="Settings"
        component={Settings}
        options={TabScreenStyles}
      />
    </Tab.Navigator>
  );
};
export default BottomMenu;
