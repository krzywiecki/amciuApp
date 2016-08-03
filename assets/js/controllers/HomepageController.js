app.controller('HomepageController', function($scope, $http, ordersService) {

    $scope.basePath = basePath;

    $scope.showOrdedDetailsHandler = function(){
        $scope.ordersHeader = document.getElementsByClassName('ordered-item-header');
        $scope.showHideDetails = function() {
            var item = this.parentNode;

            if(!$scope.hasClass(item, 'active')) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        };
        [].map.call($scope.ordersHeader, function(elem) {
            elem.addEventListener("click", $scope.showHideDetails);
        });

        $scope.hasClass = function(el, cls) {
            return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
        }
    }

    ordersService.getData().then(function(response){
        $scope.orders = response.data.orders;
    });
    
    function onDataChange(data) {
        $scope.orders = data.orders;
    }
    
    ordersService.addObserver(onDataChange);
    
    $scope.$on('$destroy', function () {
        ordersService.removeObserver(onDataChange)
    });

});
