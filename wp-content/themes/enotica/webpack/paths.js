// Native Node modules.
const path = require('path');

const baseDir = path.resolve(__dirname, '..');

module.exports = {
  base: baseDir,
  dist: path.resolve(baseDir, 'dist'),
  fonts: path.resolve(baseDir, 'fonts'),
  publicPath: '',
  resources: {
    fonts: path.resolve(baseDir, 'assets', 'fonts'),
    images: path.resolve(baseDir, 'assets', 'images')
  }
};