import pluginPkg from "../../package.json";
import pluginId from "./pluginId";
import CustomDropdown from "./components/CustomDropdown";

export default (strapi) => {
  const pluginDescription = "Custom Dropdown with react-select";

  const plugin = {
    blockerComponent: null,
    blockerComponentProps: {},
    description: pluginDescription,
    icon: pluginPkg.strapi.icon,
    id: pluginId,
    initializer: () => null,
    injectedComponents: [],
    isReady: true,
    leftMenuLinks: [],
    leftMenuSections: [],
    mainComponent: null,
    name: pluginPkg.strapi.name,
    preventComponentRendering: false,
    trads: {},
  };

  strapi.registerField({ type: "customDropdown", Component: CustomDropdown });

  return strapi.registerPlugin(plugin);
};
