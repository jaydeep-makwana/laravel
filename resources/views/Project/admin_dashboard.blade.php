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
    <div class="container-fluid h-100 p-0">

        <!-- Navbar -->
        @include('Project.navbar')
        <div class="table-responsive">

        <table class="table  text-center">

            <thead>
                <tr class="admin-dashboard-heading">
                    <th colspan="11">
                        <h1>{{session('admin')}}</h1>
                    </th>
                    
                </tr>
                
                <tr>
                    <th class="bg-dark text-white">Id</th>
                    <th class="bg-dark text-white">First Name</th>
                    <th class="bg-dark text-white">Last Name</th>
                    <th class="bg-dark text-white">Gender</th>
                    <th class="bg-dark text-white">Date Of Birth</th>
                    <th class="bg-dark text-white">Email</th>
                    <th class="bg-dark text-white">Mobile No.</th>
                    <th class="bg-dark text-white">Hobby</th>
                    <th class="bg-dark text-white">Photo</th>
                    <th class="bg-dark text-white">Delete</th>
                    <th class="bg-dark text-white">Update</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td class="bg-light">{{$record->id}}</td>
                    <td class="bg-light">{{$record->first_name}}</td>
                    <td class="bg-light">{{$record->last_name}}</td>
                    <td class="bg-light">{{$record->gender}}</td>
                    <td class="bg-light">{{$record->DOB}}</td>
                    <td class="bg-light">{{$record->email}}</td>
                    <td class="bg-light">{{$record->mobile}}</td>
                    <td class="bg-light">{{$record->hobby}}</td>
                    <td class="bg-light"><img src="{{ asset($record->image) }}" width="75" height="75" alt=""> </td>
                    <td class="bg-light"><a href="delete/{{$record->id}}" class="btn btn-danger">Delete</a></td>
                    <td class="bg-light"><a href="edit/{{$record->id}}" class="btn btn-warning">Update</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    @include('Project.footer')
</div>

</body>

</html>