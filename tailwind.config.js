/** @type {import('tailwindcss').Config} */
const plugin = require("tailwindcss/plugin");
const themeDirectory = "/wp-content/themes/the-brave-fight";

module.exports = {
	content: ["./**/*.{html,php}"],
	theme: {
		extend: {
			colors: {
				"tbf-white": "#F5F5F5",
				"tbf-seashell": "#FAF6F0",
				"tbf-pastel-gray": "#D9CEBE",
				"tbf-khaki": "#BFB39F",
				"tbf-light-taupe": "#A68E69",
				"tbf-green": "#2B3B33",
				"tbf-orange": "#F1623D",
			},
			fontFamily: {
				liberator: "Liberator, sans-serif",
				erbaum: `"erbaum", sans-serif`,
			},
			fontSize: {
				"5xl": ["3rem", "1.1"],
				"6xl": ["3.75rem", "1.1"],
				"7xl": ["4.5rem", "1.1"],
				"8xl": ["6rem", "1.1"],
				"9xl": ["8rem", "1.1"],
				"10xl": ["13rem", "1"],
			},
			borderWidth: {
				1: "1px",
			},
			letterSpacing: {
				tbf: "0.2em",
			},
		},
	},
	plugins: [
		plugin(({ addBase, addComponents, addUtilities, theme }) => {
			addUtilities({
				".notched-corner-tr": {
					clipPath:
						"polygon( 0 0, calc(100% - 1.5rem) 0, 100% calc(0% + 1.5rem), 100% 100%, 0% 100%, 0% 0% )",
				},
				".notched-corner-br": {
					clipPath:
						"polygon( 0 0, 100% 0, 100% calc(100% - 1.5rem), calc(100% - 1.5rem) 100%, 0% 100%, 0% 0% )",
				},
				".notched-corner-tl": {
					clipPath:
						"polygon( calc(0% + 1.5rem) 0%, 100% 0, 100% 100%, 0% 100%,  0% calc(0% + 1.5rem) )",
				},
				".notched-corner-bl": {
					clipPath:
						"polygon( 0 0, 100% 0, 100% 100%, calc(0% + 1.5rem) 100%, 0% calc(100% - 1.5rem), 0% 0% )",
				},
				".nothed-corner-all": {
					clipPath:
						"polygon( calc(0% + 1.5rem) 0%, calc(100% - 1.5rem) 0, 100% calc(0% + 1.5rem), 100% calc(100% - 1.5rem), calc(100% - 1.5rem) 100%, calc(0% + 1.5rem) 100%, 0% calc(100% - 1.5rem), 0% calc(0% + 1.5rem) )",
				},
			});
		}),
	],
};
