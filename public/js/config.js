app.config(['$stateProvider', '$urlRouterProvider',
	function ($stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise('/');

	$stateProvider
		.state('index', {
			url: '/',
			templateUrl: 'public/views/index.html'
		})

		.state('index.home', {
			url: '^/',
			templateUrl: 'public/views/home.html',
			controller: 'homeCtrl as home'
		})
}]);

app.run(['$rootScope', '$state', function ($rootScope, $state) {
	$rootScope.$state = $state;
}]);