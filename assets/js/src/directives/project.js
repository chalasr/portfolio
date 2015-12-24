(function(app) {
  function ProjectBlock($compile, $rootScope) {
    return {
      restrict: 'E',
      replace: true,
      scope: {
        name:   '=',
        description: '=',
        tools:  '=',
        demo:   '=',
        source: '=',
      },
      template:
        '<div class="no-after timeline-panel work" id="{{ name | lower | trim }}">' +
          '<div class="caption">' +
            '<div class="card">' +
              '<div class="card-content white-text">' +
                '<span class="card-title">{{ name }}</span>' +
                '<p class="description">{{ description }}</p>' +
                '<div ng-repeat="tool in tools" class="btn-floating waves-effect waves-light technos grey">' +
                  '<span class="devicons devicons-{{ tool }}"></span>' +
                '</div>' +
                '<div class="showprod">' +
                  '<a target="_blank" href="{{ source }}" class="waves-effect waves-light btn showproj grey">Source</a>' +
                  '<a target="_blank" href="{{ demo }}" class="waves-effect waves-light btn showproj grey">Demo</a>' +
                '</div>' +
              '</div>' +
            '</div>' +
          '</div>' +
        '</div>',
      link: function(scope, element,attrs) {
         $compile(element)(scope);
      },
    };
  };
  app.directive('project', ProjectBlock);
})(angular.module('portfolio'));
