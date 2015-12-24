(function(app) {
  function HardTrim() {
    return function(str) {
      return str.replace(/\s+/, "")
    };
  };
  app.filter('trim', HardTrim);
})(angular.module('portfolio'));
