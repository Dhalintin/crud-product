const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        
            backgroundImage: {
                'light': "url('/public/images/crudbgimage.jpg')",
                'dark': "url('/public/images/dark-mode.png')",
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
