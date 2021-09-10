import React, { Component } from "react";

import Select from "react-select";

const CustomDropdown = () => {
  const handleChange = (newValue, actionMeta) => {
    console.group("Value Changed");
    console.log(newValue);
    console.log(`action: ${actionMeta.action}`);
    console.groupEnd();
  };
  const handleInputChange = (inputValue, actionMeta) => {
    console.group("Input Changed");
    console.log(inputValue);
    console.log(`action: ${actionMeta.action}`);
    console.groupEnd();
  };
  return (
    <Select
      isClearable
      onChange={handleChange}
      onInputChange={handleInputChange}
      options={[
        { label: "test", value: "1" },
        { label: "woo", value: 2 },
      ]}
    />
  );
};

export default CustomDropdown;
