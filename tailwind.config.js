/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#D1FA94",
                    secondary: "#272727",
                    "base-100": "#f5f6f6" /* background image */,
                },
            },
            "dark",
        ],
    },
    theme: {
        extend: {
            colors: {
                primary: "#D1FA94",
                secondary: "#272727",
                text: "#212122",
                white: "#f5f6f6",
            },
            fontSize: {
                xxs: "14px",
                xs: "16px",
                base: "20px",
                xl: "24px",
                "2xl": "48px",
                "3xl": "128px",
                price: "40px",
                pricexl: "64px",
            },
        },
    },
    plugins: [require("daisyui")],
};
