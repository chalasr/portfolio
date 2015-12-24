(function(app) {
  function StrToLower() {
      return function(str) {
          return str.toLowerCase();
      };
  };
  app.filter('lower', StrToLower)
})(angular.module('portfolio'));
