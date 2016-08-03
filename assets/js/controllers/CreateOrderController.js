app.controller('CreateOrderController', function($scope, $http, $location, ordersService) {

    $scope.getRestaurantsList = function() {
        $http({
            url: basePath + '/restaurant/',
            method: 'GET'
        })
        .success(function(data) {
            $scope.restaurants = data.restaurants;
        });
    }

    $scope.getRestaurantsList();

    $scope.getUsersList = function() {
        $http({
            url: basePath + '/user/',
            method: 'GET'
        })
        .success(function(data) {
            $scope.users = data.users;
        });
    }

    $scope.getUsersList();

    $scope.createOrder = function() {
        $http({
            url: basePath + '/orders/new',
            method: 'POST',
            data: {
                restaurant: $scope.restaurant,
                owner: $scope.owner
            }
        })
        .success(function(orderId){
            ordersService.getData().then(function(response){
                ordersService.addValue(response.data);
                $location.path(basePath + '/addMeal/' + orderId);
            });
        });
    }
});