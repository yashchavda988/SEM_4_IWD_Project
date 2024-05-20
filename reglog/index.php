<?php

require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="logined.css">
    <title>Index</title>
    <style>
        #lead-overlay {
            height: 100%;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .continer h2 {
            text-align: center;
        }

        .continer h2.section-head:after {
            background-color: #167cbb;
            content: "";
            border-radius: 15px;
            display: block;
            width: 15vh;
            height: 4px;
            margin: 5px auto;
        }
    </style>
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->

    <div id="lead">

        <div class="continer">
            <div class="box-1">
                <h2 class="section-head">Profile</h2>
                <div class="image">
                    <img src="./img/user-6380868_1280.png" alt="Profile Picture" style="width: 200%;
    transform: translate(-175.5px, -175.5px);">
                </div>
            </div>

            <div class="box-2">
                <h2 class="section-head">Mess id</h2>
                <div class="your-info">
                    <p>Name &nbsp;&nbsp; :- &nbsp;&nbsp;
                        <?php echo $row["name"]; ?>
                    </p>
                    <p>User Name &nbsp;&nbsp; :- &nbsp;&nbsp;
                        <?php echo $row["username"]; ?>
                    </p>
                    <p>Email &nbsp;&nbsp; :- &nbsp;&nbsp;
                        <?php echo $row["gander"]; ?>
                    </p>
                    <p>Gander &nbsp;&nbsp; :- &nbsp;&nbsp;
                        <?php echo $row["email"]; ?>
                    </p>
                    <p>Branch &nbsp;&nbsp; :- &nbsp;&nbsp;
                        <?php echo $row["branch"]; ?>
                    </p>
                </div>
                <div class="plane-info">
                    <p>Your Active Plane :-
                        <?php echo $row["planes"]; ?>
                    </p>
                </div>
            </div>
        </div>

        <div id="lead-overlay">
        </div>

    </div>

    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="./main.php">Home</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
            <li>
                <a href="./registration.php">Singup</a>
            </li>
        </ul>
    </header>
</body>

</html>