var app = angular.module('newsletterApp', []);
app.controller('newsletterController', function ($scope, DataService) {
console.log('hey!!');
    if ($scope.email == "") {
        return "Invalid";
    }
    $scope.newsletter = {};
    $scope.result = {};
    $scope.showModal = false;
    var element = angular.element('#myModal');
    $scope.Submit = function() {
        DataService.postData($scope.newsletter, function(data) {
            $scope.result = data;
            element.modal('show');
        });
    }
});

var app2 = angular.module('newsletterApp2', []);
app2.controller('newsletterController2', function ($scope, DataService2) {
    $scope.newsletter2 = {};
    $scope.result = {};
    $scope.showModal = false;
    var element = angular.element('#myModal');
    $scope.Submit = function() {
        DataService2.postData($scope.newsletter2, function(data) {
            $scope.result = data;
            element.modal('show');
        });
    };
});

app.service('DataService', function($http) {
console.log("made it!!");
    this.postData = function(data, callback) {
//console.log(data);
       $http({
           method: 'POST',
           url: '/wp-content/themes/portalplanet/post.php',
           data: data,
           headers: {
               'Content-type': 'application/json'
           }
       }).success(function(resp) {
console.log(resp);
           callback(resp);
       }).error(function() {
           callback(undefined);
       });
   };
});

app.service('DataService2', function($http) {
    this.postData = function(data, callback) {
       $http({
           method: 'POST',
           url: '/wordpress/wp-content/themes/portalplanet/post.php',
           data: data,
           headers: {
               'Content-type': 'application/json'
           }
       }).success(function(resp) {
           callback(resp);
       }).error(function() {
           callback(undefined);
       });
   };
});

