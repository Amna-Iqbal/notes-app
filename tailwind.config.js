import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pastelPink: "#FFE4E1",
                pastelBlue: "#B3EBF2",
                pastelDBlue: "#AEC6CF",
                pastelGreen: "#D4E157",
                pastelPurple: "#D7BDE2",
                pastelYellow: "#FFFACD",
              },
        },
    },

    plugins: [forms],
};
