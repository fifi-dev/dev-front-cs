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

            colors: {
                'primary': '#DD4B39',
                'menu': '#1D1D1D',
                'bg-color': '#FBFDFF',
                'link-active': 'rgba(255, 255, 255, 0.10)'
            },

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
            scale: {
              '11': '1.01',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
