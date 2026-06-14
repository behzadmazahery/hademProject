import defaultTheme from 'tailwindcss/defaultTheme'

export default {

    dark: 'class',

    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/Livewire/**/*.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Vazirmatn', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                bg: 'rgb(var(--color-bg) / <alpha-value>)',
                surface: 'rgb(var(--color-surface) / <alpha-value>)',
                border: 'rgb(var(--color-border) / <alpha-value>)',
                text: 'rgb(var(--color-text) / <alpha-value>)',
                muted: 'rgb(var(--color-text-muted) / <alpha-value>)',
                primary: 'rgb(var(--color-primary) / <alpha-value>)',
            }
        },
    },

    plugins: [],
}
