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
    @include("main.navbar")

    <table class="table text-center">

        <thead>
            <tr class="bg-warning">
                <th  colspan="12" >
                    <h1>User's Records</h1>
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
                <th class="bg-dark text-white">Password</th>
                <th class="bg-dark text-white">Hobby</th>
            </tr>
        </thead>

        <tbody>
            @foreach($records as $record)
            <tr>
                <td class="bg-light">{{$record->id}}</td>
                <td class="bg-light">{{$record->first_name}}</td>
                <td class="bg-light">{{$record->last_name}}</td>
                <td class="bg-light">{{$record->age}}</td>
                <td class="bg-light">{{$record->gender}}</td>
                <td class="bg-light">{{$record->department}}</td>
                <td class="bg-light">{{$record->date_of_join}}</td>
                <td class="bg-light">{{$record->salary}}</td>
                <td class="bg-light">{{$record->email}}</td>
                <td class="bg-light">{{$record->mobile}}</td>
                <td class="bg-light">{{$record->password}}</td>
                <td class="bg-light">{{$record->hobby}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    
</body>

</html>