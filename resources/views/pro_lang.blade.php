<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Pictures</title>
    <style>
        .container{
            margin : 200px 0 0 0;
        }
        /* .card{
            padding : 10px;
            margin: 0 0 0 0 ;
        
        } */

    </style>
</head>

<body>

    <div class="container row align-items-center  ">


        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/View-HTML.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">HTML</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/Blog-Info-graphics-1000X700-02.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">CSS</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/116907691-combination-letter-js-j-s-in-grey-red-color-alphabet-logo-icon-design-suitable-for-a-company-or-busi.webp')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">JS</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        
        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/php-developer-person-holding-smartphone-blurred-cityscape-background-77172925.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        
    </div>
        

</body>

</html>