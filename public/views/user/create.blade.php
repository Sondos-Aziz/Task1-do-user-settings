<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

</head>

<body  ng-app="myApp" ng-controller="infoUserController">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <br><h4 class="card-title text-danger">Add new user</h4></br>
                 <div class="alert alert-danger" ng-if="errors.length > 0"  class="close" data-dismiss="alert" aria-label="Close">

                            <div ng-repeat="error in errors"><i class="material-icons">close</i> {{ error }}</div>

                 </div>

                <form  method="post"  enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating ">
                            <label class="control-label">First Name</label>
                            <input type="text" class="form-control" style="display: inline" ng-model="firstName" name="firstName">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Second Name</label>
                            <input type="text" class="form-control" name="secondName"  ng-model="secondName">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Third Name</label>
                            <input type="text" class="form-control" name="thirdName" ng-model="thirdName">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Fourth Name</label>
                            <input type="text" class="form-control" name="fourthName" ng-model= "fourthName" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" ng-model="email" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Id Number</label>
                            <input type="number" class="form-control" name="idNum"  ng-model="idNum">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Functional Number</label>
                            <input type="number" class="form-control" name="functionalNum" min="0" ng-model="functionalNum">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Specialization</label>
                            <input type="text" class="form-control" name="specialization" ng-model="specialization">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile" ng-model="mobile" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">Phone</label>
                            <input type="number" class="form-control" name="phone" min="0" ng-model="phone">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label">dateOfHiring</label>
                            <input type="date" class="form-control" name="dateOfHiring"  ng-model="dateOfHiring">
                        </div>
                    </div>

                     <div class="col-md-12">
                         <div class="form-group bmd-label-floating">
                            <label class="control-label" for="dateBirth">date Birthay</label>
                            <input type="date" class="form-control" name="dateBirth" ng-model="dateBirth">
                        </div>
                     </div>

                    <div class="col-md-12">
                         <div class="form-group bmd-label-floating">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control" name="address" ng-model="address" >
                         </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label" for="socialStatus">Social Status</label>
                            <input type="radio" name="socialStatus"  ng-model="socialStatus" value="married"> Married
                            <input type="radio" name="socialStatus"  ng-model="socialStatus" value="single"> Single
                            <input type="radio" name="socialStatus"  ng-model="socialStatus" value="divorced"> Divorced
                            <input type="radio" name="socialStatus"  ng-model="socialStatus" value=" widow"> Widow
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group bmd-label-floating">
                            <label class="control-label" for="gender">Gender: </label>
                            <input type="radio" name="gender"  ng-model="gender" value="0"> Male
                            <input type="radio" name="gender"  ng-model="gender" value="1"> Female
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <label class="control-label" for="featured_image">Image</label>
                            <input type="file" name="featured_image"  ng-model="image" accept="image">
                        </div><br>
                    </div>


                    <a ng-href="#!/" class="btn btn-danger">Back</a>
                        <button type="button" class="btn btn-primary" ng-click="addUser()">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
