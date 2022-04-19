<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/user_admin.css">
    <title>Register</title>
</head>


<body class="user-bg">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  ">

        <img src="{{asset('images/ms.png')}}" width="100px" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse h4" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-4">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active ml-4">
                    <a class="nav-link" href="login">Login <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>

    </nav>

    <!-- register form -->
    <!-- mv .env.example .env
    php artisan key:genrate -->
    <div class="container mt-5 form-bg-user w-100 ">
        <form action="user_data" method="POST" enctype="multipart/form-data">
            <h1 class="text-center">Register</h1>
            <div class="row">
                
                <div class="col-lg-6 ">
                    @csrf
                    
                    <div class="form-group">
                        <label for="" class="">First Name</label> <small> * <?php    ?> </small>
                        <input class="form-control" type="text" name="fName" value="<?php ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label> <small>* <?php     ?> </small>
                        <input class="form-control" type="text" name="lName" value="<?php  ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Age</label> <small>* <?php    ?> </small>
                        <input type="text" class="form-control" name="age" value="<?php  ?>">
                    </div>


                    <label for="">Gender <small> * <?php   ?> </small>
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
                        <label for="department">Department <small> * <?php   ?> </small>
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
                        <label for="">Date Of Join</label> <small> * <?php  ?> </small>
                        <input type="date" class="form-control" name="doj" value="<?php   ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Salary</label> <small> * <?php    ?> </small>
                        <input type="text" class="form-control" name="salary" value="<?php   ?>">
                    </div>

                </div>


                <div class="col-lg-6  ">

                    <div class="form-group">
                        <label for="">Email</label> <small> * <?php   ?> </small>
                        <input type="text" class="form-control" name="email" value="<?php  ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label><small> * <?php  ?> </small>
                        <input type="password" class="form-control" name="password" id="password" value="<?php ?>">
                    </div>

                    <div class="form-group">
                        <label for="cPassword">Confirm Password</label> <small> * <?php    ?> </small>
                        <input type="password" class="form-control" name="cPassword" id="cPassword" value="<?php   ?>">
                    </div>

                    <div class="form-check showPassword">
                        <input type="checkbox" class="form-check-input" id="showPassword">
                        <label for="showPassword" class="form-check-label">show password</label>
                    </div>


                    <label for=""> Hobby <small> * <?php    ?> </small>

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


                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Your Photo</label> <small> * <?php    ?> </small>
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" name="submit" value="Reset" class="btn btn-warning">Reset</button>

                    <div class="form-group mt-5 text-center   bg-light ">
                        <p class="text-danger">already have an account?</p>
                        <a href="login"> click here</a>
                    </div>

                </div>

            </div>
        </form>
    </div>



</body>

</html>