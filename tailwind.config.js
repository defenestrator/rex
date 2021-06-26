const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                green: {
                    '50':  '#EEF3ED',
                    '100': '#D4E4D0',
                    '200': '#82AC77',
                    '300': '#ADCBA5',
                    '400': '#5C8B50',
                    '500': '#3b7d2b',
                    '600': '#006633',
                    '700': '#006633',
                    '800': '#006633',
                    '900': '#0A2602',
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
