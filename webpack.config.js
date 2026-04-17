process.env.WP_SRC_DIRECTORY = 'src/blocks';

const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
	...defaultConfig,
	output: {
		...defaultConfig.output,
		path: path.resolve(__dirname, 'src/build/blocks'),
	},
};
