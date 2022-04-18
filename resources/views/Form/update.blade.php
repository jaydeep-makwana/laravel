<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/user_admin.css">
    <title>welcome user </title>
</head>

<body class="admin-bg">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">

        <img src="images/ms.png" width="100px" alt="">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse h4" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item active ml-4">
                    <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item active ml-4">
                    <a class="nav-link" href="#">Add Users</a>
                </li>

            </ul>

        </div>

    </nav>


    <!-- update form, update user's data by admin -->
    <div class="container w-100">
        <form   class="form-bg-admin mt-5  p-3" enctype="multipart/form-data">
            <h1 class="text-center">Update Record </h1>

            <div class="row">

                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="" class="">First Name</label>
                        <input class="form-control" type="text" name="fName" value="Jaydeep">
                        <small class="red"><?php   ?></small>
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input class="form-control" type="text" name="lName" value="Makwana">
                        <small class="red"><?php  ?></small>
                    </div>

                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" class="form-control" name="age" value="22">
                        <small class="red"><?php  ?></small>
                    </div>


                    <label for="">Gender
                        <div class="form-check">
                            <label for="" class="form-check-label">
                                <input type="radio" value="male" class="form-check-input" name="gender" checked <?php  ?>> Male
                            </label>
                        </div>
                        <div class="form-check">

                            <label for="" class="form-check-label">

                                <input type="radio" value="female" class="form-check-input" name="gender" <?php  ?>> Female
                            </label>
                        </div>
                    </label>


                    <div class="form-ckeck">
                        <label for="department">Department
                            <select name="department" class="form-control" id="department">
                                <option value="R & D" selected>R & D</option>
                                <option value="Sales">Sales</option>
                                <option value="Marketing">Marketing</option>
                                <option value="HR">HR</option>
                            </select>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="">Date Of Join</label>
                        <input type="date" class="form-control" name="doj" value="<?php  ?>">
                        <small class="red"><?php  ?></small>
                    </div>

                    <div class="form-group">
                        <label for="">Salary</label>
                        <input type="text" class="form-control" name="salary" value="$1234567890">
                        <small class="red"><?php  ?></small>
                    </div>

                </div>

                <div class="col-lg-6  ">

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="jobandstudypoint@gmail.com">
                        <small class="red"><?php  ?></small>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="P@$$w0rd">
                        <small class="red"><?php  ?></small>
                    </div>

                    <div class="form-group">
                        <label for="cPassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cPassword" id="cPassword" value="P@$$w0rd">
                        <small class="red"><?php   ?></small>
                    </div>

                    <div class="form-check showPassword">
                        <input type="checkbox" class="form-check-input" id="showPassword">
                        <label for="showPassword" class="form-check-label">show password</label>
                    </div>


                    <label for=""> Hobby
                        <small class="red"><?php   ?></small>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="reading" <?php ?>>
                            <label for="hobby" class="form-check-label">reading</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="dancing" <?php  ?>>
                            <label for="hobby" class="form-check-label">Dancing</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="programming" checked <?php   ?>>
                            <label for="hobby" class="form-check-label">Programming</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="gaming" <?php  ?>>
                            <label for="hobby" class="form-check-label">Gaming</label>
                        </div>

                    </label>


                    <div>
                        <img src="images/ms.png" width="120px" alt="">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Your Photo</label>
                        <small class="red"><?php  ?></small>
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <input type="submit" name="submit" value='Update' class="btn btn-primary">
                    <a href="#" class="btn btn-warning">Back </a>

                </div>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>