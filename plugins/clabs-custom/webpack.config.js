const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const StatsPlugin = require('webpack-stats-plugin').StatsWriterPlugin;
const createWriteWpAssetManifest = require('./webpack/wpAssets');

module.exports = (env, argv) => {
  const { mode } = argv;

  return {
    devtool: mode === 'production'
      ? 'source-map'
      : 'cheap-module-eval-source-map',
    entry: {
      blockSampleBlock: './blocks/sampleBlock/index.jsx',
      blockReadMore: './blocks/readmore/index.jsx',
    },
    module: {
      rules: [
        {
          exclude: /node_modules/,
          test: /.jsx?$/,
          use: [
            'babel-loader',
            'eslint-loader',
          ],
        },
      ],
    },
    output: {
      filename: mode === 'production'
        ? '[name].[chunkhash].bundle.min.js'
        : '[name].js',
      path: path.join(__dirname, 'build'),
    },
    plugins: [
      new StatsPlugin({
        transform: createWriteWpAssetManifest(mode),
        fields: ['assetsByChunkName', 'hash'],
        filename: 'assetMap.json',
      }),
      ...(mode === 'production'
        ? [
          new CleanWebpackPlugin(),
        ] : []
      ),
    ],
    resolve: {
      extensions: ['.js', '.jsx'],
    },
  };
};
