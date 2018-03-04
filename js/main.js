'use strict';
var app = angular.module('myApp', []);
var my1Ctrl = app.controller('myCtrl1', myFCtrl1);
var iterCtrl = app.controller('iterMyCtrl', myIterCtrl)

function myIterCtrl($scope, $http) {
    $scope.myIterCtrlMethod = function (val) {
        console.log(val);
        $scope.data1 = {getcomm: val};
        console.log($scope.data1);
        $http.post('insert.php', JSON.stringify($scope.data1)).then(function (response) {

            if (response.data)

                $scope.iterMsg = (response.data);

        }, function (response) {

            $scope.msg = "Service not Exists";

            $scope.statusval = response.status;

            $scope.statustext = response.statusText;

            $scope.headers = response.headers();

        });
    };
}


function myFCtrl1($scope, $http) {

 /*$scope.msg = '';*/
 $scope.comments = {'id':'123'};
 $scope.today = new Date();
    $scope.postdata = function (name) {
        var data = {getcomm: name};
        $http.post('insert.php', JSON.stringify(data)).then(function (response) {

            if (response.data)

                $scope.msg = (response.data);

        }, function (response) {

            $scope.msg = "Service not Exists";

            $scope.statusval = response.status;

            $scope.statustext = response.statusText;

            $scope.headers = response.headers();

        });
    }

}



;