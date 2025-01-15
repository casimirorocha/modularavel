import defaultTheme from 'tailwindcss/defaultTheme';

const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.${js,ts,jsx,tsx,cjs,mjs}',
    ],

    theme: {
        extend: {
            colors: {
                gray: colors.slate,
            },
			  	screens: {
					'2xl': '1500px',
				},
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        //
    ],
};
