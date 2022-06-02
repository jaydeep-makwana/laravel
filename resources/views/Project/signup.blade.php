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


<body>



    <div class="container-fluid p-0 form-border">
        @include('Project.functions')
        @include('Project.navbar')
        <!-- register form -->
        <div class="container mt-5 w-100">
            <form action="user_data" method="POST" enctype="multipart/form-data">
                <div class="row form-head">

                    <h1 class="text-center col-lg-12 p-1">Sign Up</h1>
                </div>
                <div class="row form-body   mb-1">

                    <div class="col-lg-6 ">
                        @csrf

                        <div class="form-group">
                            <label for="first_name" class="">First Name</label>
                            <input class="form-control" type="text" name="firstName" id="first_name" value="{{ old('firstName') }}"> <!-- use old function for set old value in input feild -->
                            <small>@error('firstName'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="last_name" value="{{ old('lastName') }}">
                            <small>@error('lastName'){{$message}} @enderror </small>
                        </div>

                        <label for="">Gender <small>@error('gender'){{$message}} @enderror </small>
                            <div class="form-check">
                                <label for="male" class="form-check-label">
                                    <input type="radio" value="male" class="form-check-input" id="male" name="gender" @if(old('gender')=='male' ) checked @endif> male
                                </label>
                            </div>
                            <div class="form-check">

                                <label for="female" class="form-check-label">

                                    <input type="radio" value="female" class="form-check-input" id="female" name="gender" @if(old('gender')=='female' ) checked @endif> female
                                </label>
                            </div>
                        </label>

                        <div class="form-group">
                            <label for="age">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" value="{{ old('dob') }}">
                            <small>@error('dob'){{$message}} @enderror </small>
                        </div>



                        <!-- <div class="form-ckeck">
                            <label for="department">Department <small>@error('department'){{$message}} @enderror </small>
                                <select name="department" class="form-control" id="department">
                                    <option value="" selected disabled>---Choose Department</option>
                                    <option value="R & D" @if(old('department')=='R & D' ) selected @endif>R & D</option>
                                    <option value="Sales" @if(old('department')=='Sales' ) selected @endif>Sales</option>
                                    <option value="Marketing" @if(old('department')=='Marketing' ) selected @endif>Marketing</option>
                                    <option value="HR" @if(old('department')=='HR' ) selected @endif>HR</option>
                                </select>
                            </label>

                        </div>

                        <div class="form-group">
                            <label for="doj">Date Of Join</label>
                            <input type="date" class="form-control" name="date_of_join" id="doj" value="{{ old('date_of_join') }}">
                            <small>@error('date_of_join'){{$message}} @enderror </small>
                        </div>

                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" class="form-control" name="salary" id="salary" value="{{ old('salary') }}">
                            <small>@error('salary'){{$message}} @enderror </small>
                        </div> -->


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                            <small>@error('email'){{$message}} @enderror </small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile No.</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" value="{{ old('mobile') }}">
                            <small>@error('mobile'){{$message}} @enderror </small>
                        </div>

                    </div>


                    <div class="col-lg-6  ">



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
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="reading" value="reading" {{hobbyCheck('reading')}}>
                                <label for="reading" class="form-check-label">Reading</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="dancing" value="dancing" {{hobbyCheck('dancing')}}>
                                <label for="dancing" class="form-check-label">Dancing</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="programming" value="programming" {{hobbyCheck('programming')}}>
                                <label for="programming" class="form-check-label">Programming</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="hobby[]" id="gaming" value="gaming" {{hobbyCheck('gaming')}}>
                                <label for="gaming" class="form-check-label">Gaming</label>
                            </div>

                        </label>

                        <div class="form-group">
                            <label for="image">Upload Your Photo</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                            <small> @error('image'){{$message}} @enderror </small>
                        </div>


                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="folderCkeck" id="folderCkeck">
                            <label for="folderCkeck" class="form-check-label">Want you store image in spacific folder?</label>
                        </div>

                        <div class="form-group">
                            <label for="folderName">Folder Name</label>
                            <input type="text" class="form-control" name="folderName" id="folderName" disabled>
                        </div>

                        <div class="form-group">
                            <small> @error('fileName'){{$message}} @enderror </small>
                            <select name="fileName" class="form-control" id="">
                                <option value="" selected disabled>--Select Name Of Image</option>
                                <option value="original">Original Name</option>
                                <option value="random">Random Name</option>
                            </select>
                        </div> -->

                        <div>

                            <button class="btn btn-primary ">Sign UP</button>
                            <button type="reset" class="btn btn-warning">Reset</button>

                            <div class="form-group mt-4 text-center   bg-light ">
                                <p class="text-danger">already have an account?</p>
                                <a href="login" class="text-primary"> click here</a>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
        @include('Project.footer')
    </div>

 
</body>

</html>