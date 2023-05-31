const env = process.env.NODE_ENV;

const plugins = [
	require("postcss-import"),
	require("tailwindcss"),
	require("autoprefixer"),
	require("postcss-nested"),
	// require("cssnano"),
];

if (env === "production") {
	plugins.push(require("cssnano")({ preset: "default" }));
}

module.exports = {
	plugins,
};
