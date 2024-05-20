<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}

if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        } 
        else {
            echo "<script> alert('Wrong Password'); </script>";
        }
    } else {
        echo "<script> alert('User Not Registered'); </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="body">

    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->

    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="./main.php">Close</a>
            </li>
            <li>
                <a href="./registration.php">Singup</a>
            </li>
            <li>
                <a href="./login.php">Login</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div class="login-container">
        <div class="header-login">
            <h2>Login</h2>
            <hr>
        </div>

        <form action="" method="post" autocomplete="off">
            <div class="col-12">
                <label for="usernameemail" class="form-label">Username or Emial :- </label>
                <input type="text" class="form-control" name="usernameemail" id="usernameemail" required value=""><br>
            </div>

            <div class="col-12">
                <label for="password" class="form-label">Password :- </label>
                <input type="password" class="form-control" name="password" id="password" required value=""><br>
            </div>

            <div class="text-center">
                <button class="btn btn-secondary" type="submit" name="submit">Login</button>
            </div>

        </form><br>
        <div class="text-center">
            <button class="btn btn-light" type="submit" name="submit">
                <a href="registration.php">Registration</a>
            </button>
        </div>
    </div>
</body>

</html>