app.service('ordersService', ['$http', function($http){
    var observer = new Observer();

    this.addValue = function (value) {
        observer.notify(value);
    };
    
    this.getData = function () {
        return $http({
            url: basePath + '/orders/',
            method: 'GET'
        });
    };
    
    this.addObserver = function (listener) {
        observer.addObserver(listener);
    };
    
    this.removeObserver = function (listener) {
        observer.removeObserver(listener);
    };
}]);