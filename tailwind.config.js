/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#000000",
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: "1rem",
                    "2xl": "2rem",
                },
                screens: {
                    "2xl": "1400px",
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
