import React, { useEffect, useState } from "react";
import axios from "axios";

import Select from "react-select";

const CustomDropdown = (props) => {
  console.log("props", props);
  const [selected, setSelected] = useState();

  const handleChange = (newValue, actionMeta) => {
    console.group("Value Changed");
    console.log(newValue);
    console.log(`action: ${actionMeta.action}`);
    console.groupEnd();
    const save = JSON.stringify(newValue);
    setSelected(newValue);
    props.onChange({
      target: { name: "customDropdown", value: save },
    });
  };
  const handleInputChange = (inputValue, actionMeta) => {
    console.group("Input Changed");
    console.log(inputValue);
    console.log(`action: ${actionMeta.action}`);
    console.groupEnd();
  };

  const [opts, setOpts] = useState([]);
  useEffect(() => {
    const test = async () => {
      const { data } = await axios.get(
        "https://api.doge-meme.lol/v1/memes/?skip=0&limit=100"
      );
      const { data: options } = data;
      const all = [];
      options.map((d) =>
        all.push({ value: d.submission_id, label: d.submission_title })
      );
      setOpts(all);
    };
    test();
  }, []);

  /**
   * Get the saved value for dropdown from db if exists
   */
  useEffect(() => {
    if (props.value) {
      setSelected(JSON.parse(props.value));
    } else {
      setSelected();
    }
  }, [props]);

  return (
    <Select
      isClearable
      onChange={handleChange}
      onInputChange={handleInputChange}
      defaultValue={selected}
      options={opts}
    />
  );
};

export default CustomDropdown;
