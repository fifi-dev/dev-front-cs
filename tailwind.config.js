const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {

            screens: {
                'max-2xl': {'max': '1535px'},
                // => @media (max-width: 1535px) { ... }

                'max-xl': {'max': '1279px'},
                // => @media (max-width: 1279px) { ... }

                'max-lg': {'max': '1023px'},
                // => @media (max-width: 1023px) { ... }

                'max-md': {'max': '767px'},
                // => @media (max-width: 767px) { ... }

                'max-sm': {'max': '639px'},
                // => @media (max-width: 639px) { ... }

                'max-xs': {'max': '475px'},

                'xs': {'min': '476px'},

                'max-header': {'max': '909px'},

                'min-header': {'min': '910px'},
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
