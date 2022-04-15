<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('CSS/user_admin.css')}}"> -->
    <link rel="stylesheet" href="CSS/user_admin.css">
    <title>HOME</title>
</head>


<body class="home-bg">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  ">

        <img src="{{asset('images/ms.png')}}" width="100px" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse h4" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-4">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active ml-4">
                    <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>

    </nav>
    
    <!-- main content -->
    <div class="container mx-auto text-center   row main">

        <div class="col-lg-6 ">
            <div class="card  mx-auto border border-warning p-3 " style="width: 18rem;">
                <img src="{{asset('images/user-icon-free-18.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">USERS</h5>
                    <a href="#" class="btn btn-warning">Click here</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 ">
            <div class="card  mx-auto border border-dark p-3" style="width: 18rem;">
                <img src="{{asset('images/Admin.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ADMIN</h5>
                    <a href="#" class="btn btn-dark">Click here</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>