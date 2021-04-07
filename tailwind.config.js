const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                fadeIn: "fadeIn 2s ease-in forwards"
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 }
                }
            },
            padding: { "fluid-video": "56.25%" },
            aspectRatio: {
                none: 0,
                square: [1, 1],
                "16/9": [16, 9],
                "4/3": [4, 3],
                "21/9": [21, 9]
            }
        },
    },

    variants: {
        animation: ["motion-safe"],
        aspectRatio: ['responsive'],
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require("tailwindcss-responsive-embed"),
        require("tailwindcss-aspect-ratio"),
    ],

    corePlugins: {
        container: false
    },
};
