const env = process.env.NODE_ENV;

const plugins = [
	require("postcss-import"),
	require("tailwindcss/nesting"),
	require("tailwindcss"),
	require("autoprefixer"),
];

if (env === "production") {
	plugins.push(require("cssnano")({ preset: "default" }));
}

module.exports = {
	plugins,
};
