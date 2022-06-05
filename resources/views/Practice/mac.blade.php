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
            <h2> <label for="language">Languages</label></h2>
            <select class="custom-select" id="language" onchange="selectLang(this)">
                <option id="english" value="{{url('mac/en')}}">English</option>
                <option id="hindi" value="{{url('mac/hi')}}">Hindi</option>
                <option id="gujarati" value="{{url('mac/gu')}}">Gujarati</option>
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


    <script>
        let english = document.getElementById('english');
        let hindi = document.getElementById('hindi');
        let gujarati = document.getElementById('gujarati');

        function selectLang(lang) {
            changeLocation = window.location = lang.value;
        }


        let getPath = window.location.pathname;
        console.log(getPath);
        switch (getPath) {
            case '/mac/gu':
                gujarati.setAttribute('selected',true);
                break;
            case '/mac/hi' :
                hindi.setAttribute('selected',true);
                break;
        }
    </script>
</body>

</html>