<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <title>Language</title>
</head>


<body>
    <div class="container-fluid">

        <!-- language dropdown -->
        <div class="col-md-3 mb-3">
           <h2> <label for="validationDefault04">Languages</label></h2>
            <select class="custom-select" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option><a href="{{url('mac/en')}}">English</a></option>
                <option><a href="{{url('mac/gu')}}">Gujarati</a></option>
            </select>
        </div>

        <!-- main content -->
        <div class="container text-center">
            <img src="{{ asset('images/macbook.webp')}}" width="700px" alt="...">

            <h2 class=""> {{__('macbook.model')}} </h2>
            <hr>

            <div class="">
                <h4 class="">{{__('macbook.specification')}}</h4>
            </div>


            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h4 class="">{{__('macbook.Overview')}}</h4>
                </li>
                <li class="list-group-item">
                    <h5 class="">{{__('macbook.o-heading')}}</h5>
                </li>
                <li class="list-group-item">{{__('macbook.o-row-1')}}</li>
                <li class="list-group-item">{{__('macbook.o-row-2')}}</li>
                <li class="list-group-item">{{__('macbook.o-row-3')}}</li>
                <li class="list-group-item">{{__('macbook.o-row-4')}}</li>
                <li class="list-group-item">{{__('macbook.o-row-5')}}</li>
            </ul>



        </div>

    </div>

</body>

</html>