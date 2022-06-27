<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>HOME</title>
</head>

<body>

    <div class="container-fluid h-100 bg-light p-0">

        @include('navbar')
        <div class="main-div">

            <h1 class="text-center mt-5 font-style">Happening now</h1>
            <h2 class="text-center mt-5 font-style">Join Twitter today.</h2>

            <div class="home-buttons text-center">
                <a href="{{url('signup')}}" class="btn home-btn">Sign Up</a>
            </div>

            <div class="home-buttons text-center">
                <a href="{{url('login')}}" class="btn home-btn">Sign In</a>
            </div>
        </div>

        @include('footer')
    </div>


</body>

</html>