const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        ["./src/**/*.{html,js}"],

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: "#c2ebd8",
                    200: "#abe4c9",
                    300: "#93dcba",
                    400: "#7cd5ac",
                    500: "#4ec68e",
                    600: "#3cba7f",
                    700: "#34a26f",
                    800: "#2d8b5f",
                    900: "#25744f",
                },


            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};