<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
    body {
        background-image: url("Background.jpg");
        background-size: cover;
    }

    form {
        background-color: white;
        margin-top: 6em;
        margin-left: 30em;
        margin-right: 10em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;
    }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST" action="login.php">
            <?php include 'errors.php'?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <input type="submit" name="lsubmit" value="Submit"
                    style="color:white;background-color:blue;border:none; width:90px;height: 40px;border-radius:12px;">
                <p style="text-align: center">New User? <br> Create Account <a href="register.php">Sign Up</a> </p>
        </form>
    </div>
</body>

</html>