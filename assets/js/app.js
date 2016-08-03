var app = angular.module('amciu', ['ngRoute']);

app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

app.config(function($routeProvider, $locationProvider) {

    $routeProvider
        .when(basePath + '/createOrder', {
            templateUrl: basePath + '/createOrder'
        })
        .when(basePath + '/addMeal/:id', {
            templateUrl: function(urlAttr) {
                return basePath + '/addMeal/' + urlAttr.id
            }
        })
        .otherwise({
            redirectTo: basePath
        });

        $locationProvider.html5Mode(true);

});
