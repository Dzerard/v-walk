var path = require('path');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: ['./public/js/es6/main.js', './public/css/scss/app.scss'],
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'public/app-dist/')
    },
    context: path.join(__dirname, 'public/app-dist/'),
    module: {
        rules: [
            {
                test: path.join(__dirname, 'es6'),
                loader: 'babel-loader'
            },
            {
                test: /\.css$/,
                loader: ExtractTextPlugin.extract({
                    loader: 'css-loader?importLoaders=1'
                })
            },
            {
                test: /\.(sass|scss)$/,
                loader: ExtractTextPlugin.extract(['css-loader', 'sass-loader'])
            },
            // {
            //     test: /\.s[ac]ss$/,
            //     use: [
            //         'to-string-loader',
            //         ExtractTextPlugin.extract({
            //             fallbackLoader: 'style-loader',
            //             loader: [
            //                 'css-loader?-url&sourceMap',
            //                 'postcss-loader',
            //                 'sass-loader?sourceMap'
            //             ]
            //         })
            //     ],
            //     exclude: [
            //         root('node_modules')
            //     ]
            // }
        ]
    },
    plugins: [
        new ExtractTextPlugin({ // define where to save the file
            filename: 'css/[name].min.css',
            allChunks: true
        }),

        new BrowserSyncPlugin({
            // browse to http://localhost:3000/ during development,
            // ./public directory is being served
            host: 'localhost',
            port: 3000,
            proxy: 'http://mgr.dev/'
            //server: { baseDir: ['public'] }
        })
    ]
};