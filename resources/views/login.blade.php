<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/./user_admin.css">
    <title>Login</title>
</head>

<body class="login-bg">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  ">

<img src="{{asset('images/ms.png')}}" width="100px" alt="">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse h4" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active ml-4">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active ml-4">
            <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
        </li>

    </ul>
</div>

</nav>
    <!-- user login form -->
    <div class="container mt-5 text-dark  mx-auto  row w-100">
        <div class="col-lg-4 form-bg-user   mx-auto">
            
            <form >

                <h1 class="text-center p-3">User Log in</h1>

                <div class="form-group">
                    <label for="" class="">Email</label>
                    <input class="form-control" type="text" name="email" value="">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" type="password" id="password" name="password" value="">
                </div>

                <div class="form-check showPassword">
                    <input type="checkbox" class="form-check-input" id="signInPass">
                    <label for="signInPass" class="form-check-label">show password</label>
                </div>

                <input type="submit" name="submit" value='Log in' class="btn btn-primary">

                <div class="form-group mt-5 text-center bg-light ">
                    <p class="text-danger"> don't have have an account </p>
                    <a href="#"> click here</a>
                </div>

            </form>

        </div>


        <div class="col-lg-4 form-bg-admin mx-auto">

            <form>
                <h1 class="text-center p-3"> Admin Log in</h1>

                <div class="form-group">
                    <label for="" class="">User Name</label>
                    <input class="form-control" type="text" name="userName" value="">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" type="password" id="apassword" name="password" value="">
                </div>

                <div class="form-check showPassword">
                    <input type="checkbox" class="form-check-input" id="asignInPass">
                    <label for="asignInPass" class="form-check-label">show password</label>
                </div>

                <input type="submit" name="" value='Log in' class="btn btn-primary">

            </form>

        </div>

    </div>

</body>

</html>