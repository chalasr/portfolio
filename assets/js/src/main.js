(function(app) {
    app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {
      $locationProvider.html5Mode(true);
			$urlRouterProvider.otherwise('/');
			$stateProvider
				.state('home', {
					url: '/',
					templateUrl: '/templates/home-en.html',
					controller: 'MainCtrl as main'
				})
				.state('homefr', {
					url: '/fr',
					templateUrl: '/templates/home.html',
					controller: 'MainCtrl as main'
				});
		});
})( angular.module('portfolio', ['ui.router']) );
