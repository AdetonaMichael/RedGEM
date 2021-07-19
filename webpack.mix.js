const mix = require('laravel-mix');
const purgecss = require('@fullhuman/postcss-purgecss')({

  // specify the pats to all of the emplate files in your project
  
  content: [
    './resources/**/*.blade.php',
    // './resources/**/*.vue',
    // './resources/**/*.jsx',
  
    //etc
  ],
  
  // include any special characters you're using in this regular expression
  defaultExtractor: content=> content.match(/[\w-/:]+(?<!:)/g)||[]
  })
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    ...mix.inProduction() ? [purgecss]:[],
    require('autoprefixer'),
  ]);

if (mix.inProduction()) {
  mix
    .version();
}
