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
    <div class="container">
        <table class="table text-center ">
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
                @foreach($api_data_1['data'] as $data)
                <tr>
                    <td>{{$data['id']}}</td>
                    <td>{{$data['first_name']}}</td>
                    <td>{{$data['last_name']}}</td>
                    <td>{{$data['email']}}</td>
                    <td><img src="{{$data['avatar']}}" alt="can't load image"></td>
                </tr>
                @endforeach

                @foreach($api_data_2['data'] as $data)
                <tr>
                    <td>{{$data['id']}}</td>
                    <td>{{$data['first_name']}}</td>
                    <td>{{$data['last_name']}}</td>
                    <td>{{$data['email']}}</td>
                    <td><img src="{{$data['avatar']}}" alt="can't load image"></td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="5">
                        <h3>Support By</h3>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">URL</th>
                    <th colspan="3">Text Message</th>
                </tr>
                <tr>
                    <td colspan="2">{{$api_data_1['support']['url']}}</td>
                    <td colspan="3">{{$api_data_1['support']['text']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>