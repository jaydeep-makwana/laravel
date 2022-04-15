<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/user_admin.css">
    <title>Dashboard</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  ">
        <img src="images/ms.png" width="100px" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse h4" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-4">
                    <a class="nav-link" href="#">Add Users</a>
                </li>
            </ul>


        </div>


    </nav>



    <!--  show data of users  -->
    <div class="table-responsive ">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>

                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>

            <tbody class="bg-light">

                <tr>

                    <td>Jaydeep</td>
                    <td>Makwana</td>
                </tr>
                <tr>

                    <td>Krisha</td>
                    <td>Radadiya</td>
                </tr>
                <tr>

                    <td>Priya</td>
                    <td>Thummar</td>
                </tr>

            </tbody>

        </table>
    </div>

</body>

</html>

