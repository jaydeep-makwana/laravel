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

        @include('Project.navbar')
        <div class="main-div">

            <h1 class="text-center mt-5">Happening now</h1>
            <h2 class="text-center mt-5">Join Twitter today.</h2>

            <div class="home-buttons text-center">
                <a class="btn">Sign Up</a>
            </div>
            
            <div class="home-buttons text-center">
                <a class="btn">Sign In</a>
            </div>





        </div>


        <footer class="mb-0">
            <p> © 2022 Twitter, Inc.</p>
            <p> © 2022 Twitter, Inc.</p>
        </footer>
    </div>



</body>

</html>