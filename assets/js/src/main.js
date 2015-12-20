(function(app) {
    app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {
      $locationProvider.html5Mode(true);
			$urlRouterProvider.otherwise('/');
			$stateProvider
				.state('home', {
					url: '/',
					templateUrl: 'home-en.html',
					controller: 'MainCtrl as main'
				})
				.state('homefr', {
					url: '/fr',
					templateUrl: 'home.html',
					controller: 'MainCtrl as main'
				});
		});

    var template = angular.module('templates', []);
})( angular.module('portfolio', ['ui.router', 'templates']) );
