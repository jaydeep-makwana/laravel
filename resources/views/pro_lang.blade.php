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

    <div class="container row align-items-center ">


        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/View-HTML.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">HTML</h5>
                <p class="card-text">HTML is the standard markup language for Web pages.HTML is a structure for website</p>
            </div>
        </div>

        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/Blog-Info-graphics-1000X700-02.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">CSS</h5>
                <p class="card-text">CSS is the language we use to style an HTML document.CSS describes how HTML elements should be displayed.</p>
            </div>
        </div>

        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/116907691-combination-letter-js-j-s-in-grey-red-color-alphabet-logo-icon-design-suitable-for-a-company-or-busi.webp')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">JS</h5>
                <p class="card-text">JavaScript is the world's most popular programming language.JavaScript is the programming language of the Web.</p>
            </div>
        </div>
        
        <div class="card col-lg-3 " style="width: 18rem;">
            <img src="{{url('images/php-developer-person-holding-smartphone-blurred-cityscape-background-77172925.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</p>
            </div>
        </div>
        
    </div>
        

</body>

</html>