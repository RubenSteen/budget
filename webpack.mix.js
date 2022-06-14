const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const mix = require('laravel-mix')
const path = require('path')
const purgecss = require('@fullhuman/postcss-purgecss')
const tailwindcss = require('tailwindcss')

mix.postCss('resources/css/app.css', 'public/css/app.css')
  .options({
    postCss: [
      cssImport(),
      cssNesting(),
      tailwindcss('tailwind.config.js'),
      ...mix.inProduction() ? [
        purgecss({
          content: ['./resources/views/**/*.blade.php', './resources/js/**/*.vue'],
          defaultExtractor: content => content.match(/[\w-/:.]+(?<!:)/g) || [],
          whitelistPatternsChildren: [/nprogress/],
        }),
      ] : [],
    ],
  })
  .js('resources/js/app.js', 'public/js').vue({ version: 3 }).webpackConfig({
    output: { chunkFilename: 'js/[name].js[hash]' },
    resolve: {
      alias: {
        '@': path.resolve('resources/js'),
        vue: path.resolve('node_modules', 'vue'),
      },
    },
  })
  .version()
  .sourceMaps()