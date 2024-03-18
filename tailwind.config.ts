// Dependencies
import {Config} from 'tailwindcss';

// Custom Config
import borderRadius from "./config/tailwind/borderRadius";
import colors from "./config/tailwind/colors";
import fontFamily from "./config/tailwind/fontFamily";
import fontSize from "./config/tailwind/fontSize";
import margin from "./config/tailwind/margin";

const config: Config  = {
  darkMode: "class",
  content: [
    "./resources/react/**/*.ts",
    "./resources/react/**/*.tsx",
    "./resources/views/**/*.php",
    "./storage/framework/views/**/*.php",
    './node_modules/flowbite-react/lib/esm/**/*.js'
  ],
  theme: {
    extend: {
      borderRadius,
      colors,
      fontFamily,
      fontSize,
      margin
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

export default config;

