<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Database with Angular JS</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <style type="text/css">
            p{color: green; font-weight: bold}
            .button{cursor: pointer}
        </style>
    </head>
    
    <body>
        
        <div ng-app="myApp" ng-controller="inputCtrl">
            <form>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" ng-model="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td>:</td>
                        <td><input type="text" ng-model="instansi" name="instansi"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" ng-model="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td>:</td>
                        <td><input type="text" ng-model="no_telp" name="no_telp"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="3"><input type="button" class="button" value="Simpan Data" ng-click="insertdata()"></td>
                    </tr>
                </table>
                <p>{{msg}}</p>
            </form>
        </div>
        
        <script type="text/javascript">
            var app = angular.module('myApp',[]);
            
            app.controller('inputCtrl',function($scope,$http) {
                $scope.insertdata = function() {
                    $http.post("input.php", {
                        'nama':$scope.nama, 
                        'instansi':$scope.instansi, 
                        'email':$scope.email, 
                        'no_telp':$scope.no_telp})
                        .then(function(response) {
                        $scope.msg = "Response : "+response.status;
//                        $scope.displayStud();
                    }, function(error) {
                        alert("Sorry! Data Couldn't be inserted!");
                        $scope.msg = error;
                    });
                };
            });
        </script>
        
    </body>
</html>