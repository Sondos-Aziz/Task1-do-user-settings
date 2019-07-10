


// $(document).on('click','.deleteClass',function (){
//
//     var id =  $(this).attr('id');
//     if(confirm('Are you sure? You want to delete this?')){
//         // console.log('okkk'+id);
//
//
//         $.ajax({
//             url:'{{ route(\'user.destroy\',$item->id) }}'
//         });
//     }else {
//         console.log('cancell');
//     }
// })
// var app = angular.module('myApp', []);
// app.controller('myCtrl', function($scope) {
//     $scope.firstName= "John";
//     $scope.lastName= "Doe";
// });
var myApp =angular.module('myApp',["ngRoute"]);
myApp.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl : "views/user/index.blade.php",
            controller: "infoUserController"
        }).otherwise({
        template : "<h1>None</h1><p>Nothing has been selected</p>"
    });
});

myApp.controller("infoUserController", function ($scope, $http ) {

    $scope.users = [];
    // List users
    $scope.loadUsers = function () {
        $http.get('/user')
            .then(function success(e) {
                $scope.users = e.data.users;
            });
    };
    $scope.loadUsers();

    ////////////////////



    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            var url='/user/' + id;
            $http.delete(url).then(function (data) {

                console.log(data);
                //     // location.reload();
                $scope.loadUsers();

            }, function (response) {
                console.log(data);
                alert('Unable to delete');

            });
        } else {
            return false;
        }
     };
});
