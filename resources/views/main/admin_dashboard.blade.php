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
                <th  colspan="5" >
                    <h1>Student's Records</h1>
                </th>
            </tr>

            <tr>
                <th class="bg-dark text-white">Id</th>
                <th class="bg-dark text-white">Name</th>
                <th class="bg-dark text-white">Standard</th>
                <th class="bg-dark text-white">Age</th>
                <th class="bg-dark text-white">Roll No.</th>
            </tr>
        </thead>

        <tbody>
            @foreach($records as $record)
            <tr>
                <td class="bg-light">{{$record->id}}</td>
                <td class="bg-light">{{$record->name}}</td>
                <td class="bg-light">{{$record->standard}}</td>
                <td class="bg-light">{{$record->age}}</td>
                <td class="bg-light">{{$record->rollNo}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    
</body>

</html>