var myApp = angular.module('myApp', [
    'ngRoute',
    'studentModule'
]);

myApp.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'view/list.html',
        controller: 'ListController'
    }).when('/add', {
        templateUrl: 'view/add.html',
        controller: 'AddController'
    }).otherwise({
        redirectTo: '/'
    });
}]);