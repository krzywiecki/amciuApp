app.controller('HomepageController', function($scope, $http) {

    $http.get('/app_dev.php/orders/')
        .success(function(data) {
            $scope.orders = data.orders;
        });

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

});