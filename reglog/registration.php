<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $gander = $_POST["gander"];
    $planes = $_POST["planes"];
    $branch = $_POST["branch"];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script> alert('Username or Email Already Taken'); </script>";
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$gander', '$password', '$planes', '$branch')";
            mysqli_query($conn, $query);
            echo "<script> alert('Registration Succesfully'); </script>";
            header("Location: index.php");
        } else {
            echo "<script> alert('Password Does Not Match'); </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./project/reglog/registration.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
</head>

<body>

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

    <div class="registration-container">
        <div class="header-registration">
            <h2>Registration</h2>
            <hr>
        </div>
        <form class="" action="" method="post" autocomplete="off">

            <div class="col-12">
                <label for="name" class="form-label">Name :- </label>
                <input type="text" class="form-control" name="name" id="name" required value=""> <br>
            </div>

            <div class="col-12">
                <label for="name" class="form-label">Username :- </label>
                <input type="text" class="form-control" name="username" id="username" required value=""> <br>
            </div>

            <div class="col-12">
                <label for="name" class="form-label">Email :- </label>
                <input type="email" class="form-control" name="email" id="email" required value=""> <br>
            </div>

            <div class="gander">
                <label for="radio">Gander :- </label>
                <div class="form-check">
                    Male <input type="radio" name="gander" value="male" required>
                    Female <input type="radio" name="gander" value="female">
                </div>
            </div><br>

            <div class="col-12">
                <label for="name" class="form-label">Password :- </label>
                <input type="password" class="form-control" name="password" id="password" required value=""> <br>
            </div>

            <div class="col-12">
                <label for="confirmpassword" class="form-label">Confirm Password :- </label>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required value=""> <br>
            </div>
            <hr>

            

            <div id="plane">
                <h3>Food Planes</h3>
            </div>

            <div class="dropdown">
                <label for="plane">Avilable Planes :- </label>
                <select data-toggle="dropdown" class="btn btn-light dropdown-toggle" name="planes" required>
                    <option value="1-Monthe = ₹3000">1-Monthe = ₹3000</option>
                    <option value="3-Monthe = ₹8500">3-Monthe = ₹8500</option>
                    <option value="1-Dya = ₹100">1-Dya = ₹100</option>
                </select>
            </div><br>

            <div class="branch">
                <label for="dropdown">Student branch :- </label>
                <select class="btn btn-light" name="branch" required>
                    <option value="B.Tach">B.Tach</option>
                    <option value="M.Tach">M.Tach</option>
                    <option value="B.E">B.E</option>
                    <option value="M.E">M.E</option>
                    <option value="None">None</option>
                </select>
            </div><br>


            <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>

        </form>
        <br>

        <div class="text-center">
            <button class="btn btn-light" type="submit" name="submit">
                <a href="login.php">Login</a>
            </button>
        </div>

    </div>
</body>

</html>