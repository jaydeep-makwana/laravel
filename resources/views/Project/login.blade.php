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
    <div class="container-fluid p-0 bg-light">
        @include('Project.navbar')
        
        <div class="col-lg-4  mt-5 mx-auto">
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong>  {{session('status')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <form action="login" method="post">
                <div class="form-head ">

                    <h1 class="text-center p-1 m-0">Sign In</h1>
                </div>
                <div class="form-body p-4">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="">Email</label>
                        <input class="form-control" type="text" name="email" id="email" value="">
                        <small>@error("email"){{$message}}@enderror</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" value="">
                        <small>@error("password"){{$message}}@enderror</small>
                    </div>

                    <!-- <div class="form-check showPassword">
                    <input type="checkbox" class="form-check-input" id="signInPass">
                    <label for="signInPass" class="form-check-label">show password</label>
                    </div> -->

                    <input type="submit" value='Sign In' class="btn btn-primary">


                    <div class="form-group mt-5 text-center bg-light ">
                        <p class="text-danger"> don't have have an account </p>
                        <a href="signup" class="text-primary"> click here</a>
                    </div>
                </div>

            </form>

        </div>
        @include('Project.footer')
    </div>


</body>

</html>