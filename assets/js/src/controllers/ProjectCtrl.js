(function(app) {
    function ProjectCtrl($rootScope) {
        this.projects = [
            {
              name: 'WebRTConf',
              description: 'Multi-User Video/Audio Peer To Peer web application, construite sur un serveur NodeJS (Express), développée avec AngularJS et WebRTC.',
              tools: 'nodejs_small angular',
              demo: 'https://chalas-rtc.herokuapp.com',
              source: 'https://chalas-rtc.herokuapp.com',
            },
        ];

        $rootScope.status = 'ready';
    };
    app.controller('ProjectCtrl', ProjectCtrl);
})(angular.module('portfolio'));
