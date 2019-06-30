<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <br><h4 class="card-title text-danger">Add new user</h4></br>

                    <form  method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating ">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control" style="display: inline" name="firstName" class="@error('firstName'){{$errors->first('firstName')}} @enderror">
                                @error('firstName')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Second Name</label>
                                <input type="text" class="form-control" name="secondName" class="@error('secondName'){{$errors->first('secondName')}} @enderror">
                                @error('secondName')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Third Name</label>
                                <input type="text" class="form-control" name="thirdName" class="@error('thirdName'){{$errors->first('thirdName')}} @enderror">
                                @error('thirdName')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Fourth Name</label>
                                <input type="text" class="form-control" name="fourthName" class="@error('fourthName'){{$errors->first('fourthName')}} @enderror">

                                @error('fourthName')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" class="@error('email'){{$errors->first('email')}} @enderror">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Id Number</label>
                                <input type="number" class="form-control" name="idNum" min="0" class="@error('idNum'){{$errors->first('idNum')}} @enderror">
                                @error('idNum')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Functional Number</label>
                                <input type="number" class="form-control" name="functionalNum" min="0"  class="@error('functionalNum'){{$errors->first('functionalNum')}} @enderror">
                                @error('functionalNum')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Specialization</label>
                                <input type="text" class="form-control" name="specialization" class="@error('specialization'){{$errors->first('specialization')}} @enderror">
                                @error('specialization')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">mobile</label>
                                <input type="text" class="form-control" name="mobile"   class="@error('mobile'){{$errors->first('mobile')}} @enderror">
                                @error('mobile')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Phone</label>
                                <input type="number" class="form-control" name="phone" min="0" class="@error('phone'){{$errors->first('phone')}} @enderror">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">dateOfHiring</label>
                                <input type="date" class="form-control" name="dateOfHiring" class="@error('dateOfHiring'){{$errors->first('dateOfHiring')}} @enderror">
                                @error('dateOfHiring')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">date Birthay</label>
                                <input type="date" class="form-control" name="dateBirth" class="@error('dateBirth'){{$errors->first('dateBirth')}} @enderror">
                                @error('dateBirth')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Address</label>
                                <input type="text" class="form-control" name="address" class="@error('address'){{$errors->first('address')}} @enderror">
                                @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Social Status</label>
                                <input type="radio" name="socialStatus" value="single" class="@error('socialStatus'){{$errors->first('socialStatus')}} @enderror">Single
                                <input type="radio" name="socialStatus" value="married" class="@error('socialStatus'){{$errors->first('socialStatus')}} @enderror"> Married
                                <input type="radio" name="socialStatus" value="divorced" class="@error('socialStatus'){{$errors->first('socialStatus')}} @enderror"> Divorced
                                <input type="radio" name="socialStatus" value=" widow" class="@error('socialStatus'){{$errors->first('socialStatus')}} @enderror"> Widow
                                @error('socialStatus')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-label-floating">
                                <label class="control-label">Gender: </label>
                                <input type="radio" name="gender" value="0" class="@error('gender'){{$errors->first('gender')}} @enderror"> Male
                                <input type="radio" name="gender" value="1" class="@error('gender'){{$errors->first('gender')}} @enderror"> Female
                                @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="control-label">Image</label>
                            <input type="file" name="featured_image" accept="image" class="@error('image'){{$errors->first('image')}} @enderror">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                        </div></br>
                        <a href="{{route('user.index')}}" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>

                </div>
            </div>
        </div>
    </div>


</body>
</html>
