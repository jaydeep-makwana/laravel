<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>HOME</title>
</head>

<body>


    <div class="container-fluid p-0" id="main-bg">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark p-0" id="nav">
            <a class="navbar-brand ml-3" href="/"><img src="{{ asset('images/twitter.png')}}" width="50px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active ml-3">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link" href="#">Sign up </a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="#">Sign in </a>
                    </li>

                </ul>


            </div>
        </nav>

        <h1 class="text-white text-center mt-5">Welcome To Twitter</h1>

        <div class="container">
            <h3 class="text-black mt-5 p-2 para">
                Twitter was created by Jack Dorsey, Noah Glass, Biz Stone, and Evan Williams in March 2006 and launched in July of that year. By 2012, more than 100 million users posted 340 million tweets a day, and the service handled an average of 1.6 billion search queries per day. In 2013, it was one of the ten most-visited websites and has been described as "the SMS of the Internet". By the start of 2019, Twitter had more than 330 million monthly active users. In practice, the vast majority of tweets are written by a minority of users.
            </h3>
        </div>

        <!-- <div class="container row m-0">
            <div class="col-lg-6">
                <img src="{{ asset('images/twitter.png')}}" width="50px" alt="">
            </div>
            <div class="col-lg-6">
                <h3 class="text-black mt-5 p-2 para">
                    On April 25, 2022, the Twitter board of directors agreed to a $44 billion buyout by Elon Musk, the CEO of SpaceX and Tesla, potentially making it one of the biggest deals to turn a company private.
                </h3>
                
            </div>
        </div> -->
        <div class="container row mt-5  owner ">
            
            <div class="col col-lg-4  ">

                <img src="{{ asset('images/elon-musk-twitter.jpg')}}" width="300px" alt="...">
            </div>
            <div class="col col-lg-8 ">

                <h3 class="text-black mt-5 p-2 para">
                    On April 25, 2022, the Twitter board of directors agreed to a $44 billion buyout by Elon Musk, the CEO of SpaceX and Tesla, potentially making it one of the biggest deals to turn a company private.
                </h3>
            </div>
        </div>



    </div>


</body>

</html>