// Karma configuration
//
module.exports = function(config) {
  config.set({

    basePath: '',
    plugins: [
      'karma-mocha',
    ],
    
    frameworks: ['mocha'],

    files: [
      'assets/js/libs/jquery.js',
      'assets/js/libs/angular.js',
      'assets/js/src/**/*.js',
      'assets/js/specs/**/*Spec.js'
    ],

    exclude: [
    ],

    preprocessors: {
    },

    reporters: ['mocha'],

    port: 9876,

    colors: true,

    logLevel: config.LOG_INFO,

    autoWatch: true,

    browsers: ['Chrome', 'Firefox', 'PhantomJS'],

    singleRun: false,

    concurrency: Infinity
  })
}
