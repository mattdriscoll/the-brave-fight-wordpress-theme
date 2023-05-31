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
		},
	},
	plugins: [
		plugin(({ addBase, addComponents, addUtilities, theme }) => {
			addUtilities({});
		}),
	],
};
