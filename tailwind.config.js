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
                    primary: "#2A5EDC",
                    secondary: "#cfdcf8",
                    "base-100": "#FAFAFB" /* background image */,
                },
            },
            "dark",
        ],
    },
    theme: {
        extend: {
            colors: {
                primary: "#2A5EDC",
                secondary: "#cfdcf8",
                text: "#212122",
                white: "#ffffff",
                sectext: "#4B5563",
            },
            fontSize: {
                xxs: "14px",
                xs: "16px",
                base: "20px",
                xl: "24px",
                "2xl": "32px",
                "3xl": "48px",
                "4xl": "64px",
                "5xl": "96px",
                "icon": "40px"
                // "3xl": "128px",
                // price: "40px",
                // pricexl: "64px",
            },
            borderRadius: {
                'none': '0',
                'sm': '16px',
                'md': '24px',
                'lg': '32px',
                'full': '9999px',
                'large': '64px',
            },
            
        },
        
    },
    plugins: [require("daisyui")],
};
