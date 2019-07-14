


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
        })
        .when("/create",{
        templateUrl : "views/user/create.blade.php",
        controller: "infoUserController"
    })
        .otherwise({
        template : "<h1>None</h1><p>Nothing has been selected</p>"
    });
});

myApp.controller("infoUserController", function ($scope, $http ,$filter, $window ) {

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
//make the delete button
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

    /////////////////
    //2. show the create form
    $scope.errors = [];

    $scope.user = {
        firstName: '',
        secondName: '',
        thirdName: '',
        fourthName: '',
        email: '',
        idNum: '',
        functionalNum: '',
        specialization: '',
        socialStatus: '',
        gender: '',
        mobile: '',
        dateOfHiring: '',
        dateBirth: '',
        phone: '',
        address: '',
        image: ''
    };

    // Add new User
    $scope.addUser = function () {
        $http.post('/user', {
            firstName: $scope.firstName,//the right direction from ng-model that is exist in view
            secondName: $scope.secondName,
            thirdName: $scope.thirdName,
            fourthName: $scope.fourthName,
            email: $scope.email,
            idNum: $scope.idNum,
            functionalNum: $scope.functionalNum,
            specialization: $scope.specialization,
            socialStatus: $scope.socialStatus,
            gender: $scope.gender,
            mobile: $scope.mobile,
            dateOfHiring: $filter('date')(new Date($scope.dateOfHiring), 'yyyy-MM-dd') ,
            dateBirth:$filter('date')(new Date($scope.dateBirth), 'yyyy-MM-dd') ,
            phone: $scope.phone,
            address: $scope.address,
             image: $scope.image,
        }).then(function success(e) {
            // $scope.users.push(e.data.user);
            // $scope.loadUsers();
           // $location.url('#!/');
                $window.location ='#!/';
        }
        , function error(error) {
            $scope.recordErrors(error);
        }
        );
    };
    $scope.recordErrors = function (error) {
        $scope.errors = [];
        if (error.data.errors.firstName) {
            $scope.errors.push(error.data.errors.firstName[0]);
        } else if (error.data.errors.secondName) {
            $scope.errors.push(error.data.errors.secondName[0]);
        } else if (error.data.errors.thirdName) {
        $scope.errors.push(error.data.errors.thirdName[0]);
       } else if (error.data.errors.fourthName) {
        $scope.errors.push(error.data.errors.fourthName[0]);
        } else if (error.data.errors.email) {
            $scope.errors.push(error.data.errors.email[0]);
        } else if (error.data.errors.idNum) {
            $scope.errors.push(error.data.errors.idNum[0]);
        } else if (error.data.errors.functionalNum) {
            $scope.errors.push(error.data.errors.functionalNum[0]);
        } else if (error.data.errors.specialization) {
            $scope.errors.push(error.data.errors.specialization[0]);
        } else if (error.data.errors.mobile) {
            $scope.errors.push(error.data.errors.mobile[0]);
        } else if (error.data.errors.phone) {
            $scope.errors.push(error.data.errors.phone[0]);
        } else if (error.data.errors.dateOfHiring) {
            $scope.errors.push(error.data.errors.dateOfHiring[0]);
        } else if (error.data.errors.dateBirth) {
            $scope.errors.push(error.data.errors.dateBirth[0]);
        }else if (error.data.errors.address) {
            $scope.errors.push(error.data.errors.address[0]);
        }else if (error.data.errors.socialStatus) {
            $scope.errors.push(error.data.errors.socialStatus[0]);
        }else if (error.data.errors.gender) {
            $scope.errors.push(error.data.errors.gender[0]);
         }else if (error.data.errors.image) {
            $scope.errors.push(error.data.errors.image[0]);
        }
    }


});
