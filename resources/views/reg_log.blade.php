<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Register/Login</title>
    <style>
        .nav {

            background-color: rgb(20, 20, 27);
            color: greenyellow;
        }

        .nav center {
            color: white;
        }

        .form {
            height: 100%;
            width: 45%;
            position: fixed;
        }

        .left {
            left: 0;
            margin-left: 30px;
        }

        .right {
            right: 0;
            margin-right: 30px;

        }
    </style>
</head>

<body>

    <nav class=" navbar navbar-light bg-light">
        <div class="nav container-fluid">
            <span class=" navbar-brand mb-0 h1">
                <center>Register/Login</center>
            </span>
        </div>
    </nav>

    <div class="form left">
        <h1>Register</h1>
        <div id="rs"></div>

        <form>
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Mobile No.</label>
                <input type="text" class="form-control" id="mobile" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>

            </div>

            <div class="mb-3">
                <label class="form-label">confirm Password</label>
                <input type="password" class="form-control" id="cpassword" required>
            </div>

            <button type="submit" class="btn btn-primary" id="register">Register</button>
        </form>

    </div>
    <div class="form right">
        <h1>Login</h1>
        <form>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="lemail" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="lpassword" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary" id="login">Login</button>
        </form>

        <div id="ls"></div>
    </div>


</body>

</html>

