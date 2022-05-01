<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>Dashboard</title>
</head>

<body>


    <div class="container-fluid p-0" id="main-bg">
        @include('main.navbar')
 
        <h1 class="text-white text-center mt-5"> Hello, Jaydeep </h1>
        <h2 class="text-white text-center mt-5">Welcome To Twitter</h2>
    </div>


</body>

</html>