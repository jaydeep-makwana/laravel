<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>Sign In</title>
</head>


<body>

    <div class="container-fluid p-0" id="signin-bg">
        @include('main.navbar')

        <div class="col-lg-4 form-bg-user bg-light mt-5 mx-auto">

            <form>

                <h1 class="text-center p-3">Sign In</h1>

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
                    <a href="signup"> click here</a>
                </div>

            </form>

        </div>
    </div>


</body>

</html>