(function(app) {

    function ProfilePictureModal() {
        return {
            template:
              '<div class="modal fade bs-example-modal-lg" id="profileModal">' +
                '<div class="modal-content">' +
                  '<div class="modal-body" ng-transclude></div>' +
                '</div>' +
              '</div>',
            restrict: 'E',
            transclude: true,
            replace:true,
        };
    };

    app.directive('pictureModal', ProfilePictureModal);

})(angular.module('portfolio'));
