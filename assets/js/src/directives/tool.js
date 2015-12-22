(function(app) {

  function ToolElem() {
    return {
      restrict: 'E',
      replace: true,
      scope: {
        tool: '='
      },
      template:
      '<div class="btn-floating waves-effect waves-light technos grey">' +
        '<span class="devicons devicons-{{ tool }}"></span>' +
      '</div>',
    };
  };

  app.directive('toolIcon', ToolElem);
});
