<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>Sign Up</title>
</head>


<body id="signup-bg">

    <div class="container-fluid p-0 text-white">
        @include('main.navbar')
        <!-- register form -->
        <div class="container mt-5 w-100">
            <form action="user_data" method="POST" enctype="multipart/form-data">
                <div class="row form-head">

                    <h1 class="text-center col-lg-12 p-1">Sign Up</h1>
                </div>
                <div class="row form-body">

                    <div class="col-lg-6 ">
                        @csrf

                        <div class="form-group">
                            <label for="" class="">First Name</label>
                            <input class="form-control" type="text" name="firstName" value="{{ old('firstName') }}"> <!-- use old function for set old value in input feild -->
                            <small>@error('firstName'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input class="form-control" type="text" name="lastName" value="{{ old('lastName') }}">
                            <small>@error('lastName'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                            <small>@error('age'){{$message}} @enderror </small>
                        </div>


                        <label for="">Gender <small>@error('gender'){{$message}} @enderror </small>
                            <div class="form-check">
                                <label for="" class="form-check-label">
                                    <input type="radio" value="male" class="form-check-input" name="gender" <?php  ?>> male
                                </label>
                            </div>
                            <div class="form-check">

                                <label for="" class="form-check-label">

                                    <input type="radio" value="female" class="form-check-input" name="gender" <?php  ?>> female
                                </label>
                            </div>
                        </label>


                        <div class="form-ckeck">
                            <label for="department">Department <small>@error('department'){{$message}} @enderror </small>
                                <select name="department" class="form-control" id="department">
                                    <option value="" selected disabled>---Choose Department</option>
                                    <option value="R & D" <?php   ?>>R & D</option>
                                    <option value="Sales" <?php  ?>>Sales</option>
                                    <option value="Marketing" <?php  ?>>Marketing</option>
                                    <option value="HR" <?php  ?>>HR</option>
                                </select>
                            </label>

                        </div>

                        <div class="form-group">
                            <label for="">Date Of Join</label>
                            <input type="date" class="form-control" name="date_of_join" value="{{ old('date_of_join') }}">
                            <small>@error('date_of_join'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" class="form-control" name="salary" value="{{ old('salary') }}">
                            <small>@error('salary'){{$message}} @enderror </small>
                        </div>

                    </div>


                    <div class="col-lg-6  ">

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            <small>@error('email'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="Password" id="password" value="{{ old('Password') }}">
                            <small>@error('Password'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="cPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="cPassword" value="{{ old('confirm_password') }}">
                            <small>@error('confirm_password'){{$message}} @enderror </small>
                        </div>

                        <!-- <div class="form-check showPassword">
                        <input type="checkbox" class="form-check-input" id="showPassword">
                        <label for="showPassword" class="form-check-label">show password</label>
                    </div> -->


                        <label for=""> Hobby <small>@error('hobby'){{$message}} @enderror </small>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="" value="reading" <?php  ?>>
                                <label for="hobby" class="form-check-label">reading</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="" value="dancing" <?php  ?>>
                                <label for="hobby" class="form-check-label">Dancing</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="" value="programming" <?php   ?>>
                                <label for="hobby" class="form-check-label">Programming</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="" value="gaming" <?php  ?>>
                                <label for="hobby" class="form-check-label">Gaming</label>
                            </div>

                        </label>

                        <!-- <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Your Photo</label> 
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        <small> * @error('file'){{$message}} @enderror </small>
                    </div> -->
                        <div>

                            <button class="btn btn-primary ">Sign UP</button>
                            <button type="reset" class="btn btn-warning">Reset</button>

                            <div class="form-group mt-5 text-center   bg-light ">
                                <p class="text-danger">already have an account?</p>
                                <a href="signin"> click here</a>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>


</body>

</html>