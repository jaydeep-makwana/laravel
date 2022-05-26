<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/main.css')}}">
    <title>ADMIN</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-0" id="nav">
        <a class="navbar-brand ml-3" href="/"><img src="{{ asset('images/twitter.png')}}" width="50px" alt="">
        </a>
        <div class="navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse  " id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto mr-3 text-white">
                <li class="nav-item active ml-3">
                    <a class="nav-link" href="{{ asset('/') }}">Home </a>
                </li>
                <li class="nav-item active ml-3">
                    <a class="nav-link" href="{{ url('about') }}">About </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item active ml-3">
                    <a class="btn btn-danger " href="{{ url('logout') }}">Sign out</a>
                </li>

            </ul>


        </div>
    </nav>
    <div class="table-responsive">

        <table class="table  text-center">

            <thead>
                <tr class="bg-warning">
                    <th colspan="13">
                        <h1>{{session('admin')}}</h1>
                    </th>

                </tr>

                <tr>
                    <th class="bg-dark text-white">Id</th>
                    <th class="bg-dark text-white">First Name</th>
                    <th class="bg-dark text-white">Last Name</th>
                    <th class="bg-dark text-white">Age</th>
                    <th class="bg-dark text-white">Gender</th>
                    <th class="bg-dark text-white">Department</th>
                    <th class="bg-dark text-white">Date Of Join</th>
                    <th class="bg-dark text-white">Salary</th>
                    <th class="bg-dark text-white">Email</th>
                    <th class="bg-dark text-white">Mobile No.</th>
                    <th class="bg-dark text-white">Hobby</th>
                    <th class="bg-dark text-white">Photo</th>
                    <th class="bg-dark text-white">Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach($records as $record)
                <tr>
                    <td class="bg-light">{{$record->emp_id}}</td>
                    <td class="bg-light">{{$record->first_name}}</td>
                    <td class="bg-light">{{$record->last_name}}</td>
                    <td class="bg-light">{{$record->age}}</td>
                    <td class="bg-light">{{$record->gender}}</td>
                    <td class="bg-light">{{$record->department}}</td>
                    <td class="bg-light">{{$record->date_of_join}}</td>
                    <td class="bg-light">{{$record->salary}}</td>
                    <td class="bg-light">{{$record->email}}</td>
                    <td class="bg-light">{{$record->mobile}}</td>
                    <td class="bg-light">{{$record->hobby}}</td>
                    <td class="bg-light"><img src="{{ asset($record->image) }}" width="75" height="75" alt=""> </td>
                    <td class="bg-light"><a href="delete/{{$record->emp_id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</body>

</html>