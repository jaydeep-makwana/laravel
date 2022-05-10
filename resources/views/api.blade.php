<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>API DATA</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($api_data['data'] as $data)
            <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['first_name']}}</td>
                <td>{{$data['last_name']}}</td>
                <td>{{$data['email']}}</td>
                <td><img src="{{$data['avatar']}}" alt="can't load image"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>