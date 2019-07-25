<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Data BMKG Gempa</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body ng-app="myApp" ng-controller="dataCtrl">
        <h1>60 Data Gempa Terkini BKMG</h1>
        <input type="text" ng-model="cari" placeholder="Cari Data">
        
        <table>
            <tr>
                <th>No.</th>
                <th ng-click="orderByMe('Tanggal')">Tanggal</th>
                <th ng-click="orderByMe('Jam')">Jam</th>
                <th>Coordinates</th>
                <th ng-click="orderByMe('Lintang')">Lintang</th>
                <th ng-click="orderByMe('Bujur')">Bujur</th>
                <th class="magnitude" ng-click="orderByMe('Magnitude')">Skala</th>
                <th ng-click="orderByMe('Kedalaman')">Kedalaman</th>
                <th ng-click="orderByMe('Wilayah')">Wilayah</th>
            </tr>
            
            <tr ng-repeat="x in gempa | filter:cari | orderBy:myOrderBy">
                <td align="center">{{$index+1}}</td>
                <td>{{x.Tanggal}}</td>
                <td>{{x.Jam}}</td>
                <td>{{x.point.coordinates}}</td>
                <td>{{x.Lintang}}</td>
                <td>{{x.Bujur}}</td>
                <td>{{x.Magnitude}}</td>
                <td>{{x.Kedalaman}}</td>
                <td>{{x.Wilayah}}</td>
            </tr>
        </table>
        
        <script>
            var app = angular.module('myApp',[]);
            
            app.controller('dataCtrl',function($scope,$http) {
                //call gempa.php
                $http.get('gempa.php').then(function(response) {
                    //response data array gempa (dari json decode)
                    $scope.gempa = response.data.gempa;
                });
                
                //filter data asc (abjad)
                $scope.orderByMe = function(x) {
                    $scope.myOrderBy = x;
                };
            });
        </script>
        
    </body>
</html>