<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>Career</title>
</head>

<body>


    <div class="container-fluid p-0">
        @include('navbar')

        <div class="container">
            <h1 class="mt-5 p-2 para border border-dark mx-auto">
                <p>Join us and get a wonderful career opportunity</p>
            </h1>
            <h1 class="mt-5 p-2 para border border-dark mx-auto">
                <p>Come for the purpose.</p>
                <p>Stay for the people. </p>
            </h1>
            <h1 class="mt-5 p-2 para border border-dark mx-auto">
                <p>Life's not about a job,</p>
                <p> it's about purpose. </p>
            </h1>
            <div class="mx-auto">

                <img src="{{ asset('images/twitter-osm.PNG')}}" class="career-img img-thumbnail border-dark" height="200px" width="700px" alt="">
            </div>
        </div>


        @include('footer')
    </div>


</body>

</html>