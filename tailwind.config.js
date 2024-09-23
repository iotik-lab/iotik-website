/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                primary: "#FF8901",
            },
            fontFamily: {
                "jakarta-sans": ["Plus Jakarta Sans", "sans-serif"],
            },
        },
    },
    darkMode: "class",
    plugins: [],
}
