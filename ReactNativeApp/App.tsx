import * as React from 'react';
import { View, Text,Button } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
// import Routes from './components/Routes';
import BottomMenu from './components/BottomMenu'

const App = () =>  {
  return (
    <NavigationContainer>
      {/* <Routes/> */}
      <BottomMenu/>
    </NavigationContainer>
  );
}

export default App;