<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>TIME</title>
    <style>
        #time {

            background-color: rgb(209, 243, 177);
            text-align: center;

        }

        #date {

            background-color: rgb(209, 243, 177);
            text-align: center;


        }

        .clock {

            /* background-color: rgb(237, 155, 245); */
            width: 20%;
            margin-left: 40%;
            align-items: center;
            top: 17%;
            margin-top: 5%;
            padding: 10px;
            border-radius: 4px;
            padding-top: 1px;

        }
        img{
            border-radius: 50%;
        }
    </style>
</head>

<body class="bg-light">
    
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="images/Sapling-Analog-Round-Front-View-Dial-S-Hands-Standard.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Clock
        </a>
    </nav>

    <div class="clock bg-primary ">
        <p class="text-white"> TIME</p>
        <div id="time">

        </div>
        <p class="text-white">DATE</p>
        <div id="date">

        </div>

    </div>


    <script>
        let newDate;
        let time;
        let date;

        setInterval(() => {

            newDate = new Date();
            date = newDate.toDateString();
            time = newDate.toLocaleTimeString();
            document.getElementById('time').innerHTML = time;
            document.getElementById('date').innerHTML = date;
        }, 1000);
    </script>
</body>

</html>