<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mess Management</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#experience">Experience</a>
            </li>
            <li>
                <a href="#education">Education</a>
            </li>
            <li>
                <a href="./registration.php">Singup</a>
            </li>
            <li>
                <a href="./login.php">Login</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
    <!-- End header -->
    <div id="lead">
        <div id="lead-content">
            <div class="head-name">
                Food Mess On Live
            </div>
        </div>
        <div id="lead-content">
            <div class="card-1" id="card-img">
                <a href="registration.php">
                    <div class="pay">
                        1. 1-Month --> Buy This
                    </div>
                </a>
            </div>
            <div class="card-2" id="card-img">
                <a href="registration.php">
                    <div class="pay">
                        2. 3-Month --> Buy This
                    </div>
                </a>
            </div>
            <div class="card-3" id="card-img">
                <a href="registration.php">
                    <div class="pay">
                        3. 1-Day --> Buy This
                    </div>
                </a>
            </div>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay">
            <video autoplay muted id="myVideo1" width="400px">
                <source src="./Video/Coffee shop_3.mp4" type="video/mp4">
            </video>
            <video autoplay muted id="myVideo2" width="400px">
                <source src="./Video/Order food_2.mp4" type="video/mp4">
            </video>
        </div>


        <div id="lead-down">
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="about">
        <div class="row">
            <div class="col-md-4">
                <h2 class="heading">About Me</h2>
            </div>
            <div class="col-md-8">
                <p>
                    I am a Diploma in Computer Engineer Student. This Project made by Three Student. 1)
                    Yash Chavda, 2) Rutvik Kanzariya And 3) Smitraj Kaklotar.
                    4th SEM Project - IWD(Introduction to Wed Devolopment).
                </p>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading" style="color: white;">Workers</h2>
        <div id="experience-timeline">
            <div data-date="September 2015 – September 2016">
                <h3>Manoj Agraval</h3>
                <h4>Maintance Managament</h4>
                <p>
                    Experience :- 4 year. Keeping track of expenses and profit loss
                </p>
            </div>

            <div data-date="September 2015 – September 2016">
                <h3>Datta Raju</h3>
                <h4>Hall Management</h4>
                <p>
                    Experience :- 1 year. Hall electricity and table management
                </p>
            </div>

            <div data-date="September 2015 – September 2016">
                <h3>Kisor Kumar</h3>
                <h4>Meals Management</h4>
                <p>
                    Experience :- 1 year. Every Day Managament of Meals.
                </p>
            </div>
        </div>
    </div>
    <!-- End #experience -->

    <div id="education">
        <h2 class="heading">Education</h2>
        <div class="education-block">
            <h3>Gujarat Technological University</h3>
            <span class="education-date">Sept 2016 - Sept 2020</span>
            <h4>Bachelor of Science in Computer Science</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in iaculis ex. Etiam volutpat laoreet
                urna. Morbi ut tortor nec nulla commodo malesuada sit amet vel lacus. Fusce eget efficitur libero. Morbi
                dapibus porta quam laoreet placerat.
            </p>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Gujarat Technological University</h3>
            <span class="education-date">Sept 2016 - Sept 2017</span>
            <h4>Bachelor of Engineering in Computer Engineering/h4>
            <ul>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
            </ul>
        </div>
        <!-- End .education-block -->
    </div>
    <!-- End #education -->

    <div id="contact">
        <h2>Get in Touch</h2>
        <div id="contact-form">
            <form method="POST" action="https://formspree.io/email@email.com">
                <input type="hidden" name="_subject" value="Contact request from personal website" />
                <input type="email" name="_replyto" placeholder="Your email" required>
                <textarea name="message" placeholder="Your message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->

    <footer>
        <div class="row">
            <div class="col-sm-5 copyright">
                <p>
                    Copyright &copy; <span id="current-year">2024</span> FOOD MESS ON LIVE
                </p>
            </div>
            <div class="col-sm-5 social">
                <ul>
                    <li>
                        <a href="https://github.com/" target="_blank"><i class="fa fa-github" aria-hidden="true"><img
                                    src="./img/3d-fluency-github-logo.png" alt="github" width="30px"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"
                                aria-hidden="true"><img src="./img/icons8-linkedin-94.png" alt="linked-in"
                                    width="30px"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>