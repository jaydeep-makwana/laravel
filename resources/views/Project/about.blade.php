<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>About</title>
</head>

<body id="main-bg">


    <div class="container-fluid p-0">
       @include('Project.navbar')

        <div class="container">
            <h3 class="text-black mt-5 p-2 para border border-dark">
                Twitter was created by Jack Dorsey, Noah Glass, Biz Stone, and Evan Williams in March 2006 and launched in July of that year. By 2012, more than 100 million users posted 340 million tweets a day, and the service handled an average of 1.6 billion search queries per day. In 2013, it was one of the ten most-visited websites and has been described as "the SMS of the Internet". By the start of 2019, Twitter had more than 330 million monthly active users. In practice, the vast majority of tweets are written by a minority of users.
            </h3>
        </div>

        <div class="container row mt-5  owner ">
            
            <div class="col col-lg-4  ">
<!-- "rounded" class only round corner -->
                <img src="{{ asset('images/elon-musk-twitter.jpg')}}" class="img-thumbnail border-dark" width="300px" alt="...">
            </div>
            <div class="col col-lg-8 ">

                <h3 class="text-black mt-5 p-2 para border border-dark">
                    On April 25, 2022, the Twitter board of directors agreed to a $44 billion buyout by Elon Musk, the CEO of SpaceX and Tesla, potentially making it one of the biggest deals to turn a company private.
                </h3>
            </div>
        </div>



    </div>


</body>

</html>