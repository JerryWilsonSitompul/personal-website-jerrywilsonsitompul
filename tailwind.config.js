import defaultTheme from 'tailwindcss/defaultTheme';

/**
 * Tailwind CSS configuration for the personal website clone. This file
 * specifies which files Tailwind should scan for class names and extends
 * the default theme with a custom primary color palette. The Nunito font is
 * also added to the sans-serif stack to better match the original design.
 */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#22c55e',
                    light: '#d9f99d',
                    dark: '#15803d',
                },
            },
        },
    },
    plugins: [],
};