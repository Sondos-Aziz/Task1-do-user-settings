 <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    </head>

    <body ng-app="myApp" ng-controller="infoUserController">
    <div class="content">
        <div class="container-fluid">
            <br class="row">
                <br class="col-md-12">
        <a href="#!create" class="btn btn-info">Add new user</a></br></br>

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">All users</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
                    <table id="table1" class="table table-striped table-bordered" style="width:100%">
                            <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                First Name
                            </th>
                            <th>
                                Second Name
                            </th>
                            <th>
                                Third Name
                            </th>
                            <th>
                                Fourth Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                               ID Number
                            </th>
                            <th>
                                Functional Num
                            </th>
                            <th>
                                Specialization
                            </th>
                            <th>
                               social Status
                            </th>
                            <th>
                                Gender
                            </th>
                            <th>
                                Mobile
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                date Of Hiring
                            </th>
                            <th>
                                date Of Birthay
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Image
                            </th>

                            <th>
                                Action
                            </th>
                            </thead>
                            <tbody>

                                <tr  ng-repeat="(index,item) in users">
                                    <td>{{index + 1}}</td>
                                    <td>{{item.firstName}}</td>
                                    <td>{{item.secondName}}</td>
                                    <td>{{item.thirdName}}</td>
                                    <td>{{item.fourthName}}</td>
                                    <td>{{item.email}}</td>
                                    <td>{{item.idNum}}</td>
                                    <td>{{item.functionalNum}}</td>
                                    <td>{{item.specialization}}</td>
                                    <td>{{item.socialStatus}}</td>
                                    <td ng-if="item.gender ==0" >male</td>
                                    <td ng-if="item.gender ==1" >female</td>
                                    <td>{{item.mobile}}</td>
                                    <td>{{item.phone}}</td>
                                    <td>{{item.dateOfHiring}}</td>
                                    <td>{{item.dateBirth}}</td>
                                    <td>{{item.address}}</td>
                                    <td>
                                     <img src ="images/{{item.image}}" height="100" width="100"/>
                                   </td>

                                    <td>
                                        <button ng-click="confirmDelete(item.id)" type="button" class="btn btn-danger btn-sm  deleteClass">

                                            <i class="material-icons">delete</i></button>
                                    </td>
                                </tr>

                            </tbody>
                      </table>
                   </div>
                  </div>
                </div>
            </div>
        </div>
   </div>
</div>
    <script src="{{ asset('js/myjs.js')}}"></script>

    <script>



        $(document).on('click','.deleteClass',function (){

            var id =  $(this).attr('id');
            if(confirm('Are you sure? You want to delete this?')){
                $.ajax({
                    url:'{{ route('del') }}',
                    data:{id:id},
                    method:'get',
                    success:function (data) {
                        console.log(data);
                        window.location.reload();
                    },

                });
            }else {
                console.log('cancel');
            }
        })

    </script>
     </body>
 </html>
