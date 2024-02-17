/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                primary: ["Merriweather"],
            },
        },
        colors: {
            sea: ["#6495ED"],
        },
    },
    plugins: [require("flowbite/plugin")],
};
