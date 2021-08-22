import * as React from 'react';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Exclusive from '../Exclusive'
import Tourdates from '../Tourdates'
import Shop from '../Shop'

const Stack = createNativeStackNavigator();

const Routes = () => {
  return (
      <Stack.Navigator>
        
        <Stack.Screen
          name="Exclusive"
          component={Exclusive}
          options={{headerBackVisible: false}}
          // options={{ title: 'Exclusive content' }}
        />
         <Stack.Screen
          name="Tourdates"
          component={Tourdates}
          options={{headerBackVisible: false}}

          // options={{ title: 'Tourdates' }}
        />
           <Stack.Screen
          name="Shop"
          component={Shop}
          options={{headerBackVisible: false}}

          // options={{ title: 'Shop' }}
        />
      </Stack.Navigator>
  );
};

export default Routes