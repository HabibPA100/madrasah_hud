import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
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
            screens: {
                'xs': '480px',   // Custom extra small breakpoint
                'sm': '576px',   // Small (default in Tailwind)
                'md': '768px',   // Medium (default in Tailwind)
                'lg': '992px',  // Large (default in Tailwind)
                'xl': '1200px',  // Extra large (default in Tailwind)
                '2xl': '1400px', // 2x Extra large (default in Tailwind)
              },    
        },
    },

    plugins: [forms],
};
