<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Fetch Data Using Model</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Student's Id</th>
                <th>Name</th>
                <th>Standard</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->stu_id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->standard}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>