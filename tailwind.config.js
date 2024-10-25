/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#859aa2",
                    600:"#7c98a5",
                    800:"#011224",
                },
                secondary: {},
                accent: {
                    400: "#d9b000",
                    600: "#b59100",
                },

                bgPrimary: "#ffffff",
                bgSecondary: {
                    200: "#F2F2F2",
                    400: "#eeebe6",
                    600: " #cbcbcb",
                    800: " #555",
                },
                bgThird: "#eeebe6",

                fontLight: "#ffffff",
                fontDark: "#2f3e47",
            },
            fontFamily: {
                heading: ["Russo One", "sans-serif"],
                text: ["Nunito Sans", "sans-serif"],
            },
        },
    },
    plugins: [require('@tailwindcss/typography')],
};
