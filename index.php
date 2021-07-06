<?php
require  'Database.php';
$db = new Database();
$conn = $db->conn;
$statement = "SELECT  * FROM portfolio_dekelbendavid";
$stmt = $conn->prepare($statement);
$stmt->execute();
$result = $stmt->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">

    <title>Dekel Ben-David</title>

    <link rel="stylesheet" type="text/css" href="css/plugin.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


</head>

<body>

<!-- Menu Section Start -->
<header id="home">

    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-13">
                    <div class="navigation-menu">
                        <div class="navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smoth-scroll" href="#home">Home
                                        <div class="ripple-wrapper"></div>
                                    </a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#about">About</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#portfolio">Project</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#services">Skill</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Menu Section End -->


<!-- Home Section Start -->
<section class="home-section">
    <div class="container">
        <div class="row">

            <div class="col-sm-offset-2 col-md-4 col-sm-6 margin-left-setting">
                <div class="margin-top-150">

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>Dekel Ben-David</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>Dekeldbd@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>B.Sc Software Engineering Student</td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td>+972-52-8607636</td>
                            </tr>
                            <tr>
                                <td>Resume</td>
                                <td style="background-color: rgba(0,0,0,0.85);"><a href="cv/cvPort.pdf" target="_blank" data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   title="Check Out My Resume">CV.pdf</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="me-image">
                    <img src="images/bg/profile.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Section End -->


<!-- About Start -->
<section id="about" class="about section-space-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>About Me</h2>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-25">
                <div class="about-me-text margin-top-50">
                    <p>Hi my name is Dekel Ben-David, and I am a software engineering student at Shenkar College.
                        Today I live in Givatayim but originally from Misgav in the north.
                        From childhood I was involved in everything related to programming, robotics, electricity and scientific creation.
                        I volunteered at Magen David Adom for about 4 years until I enlisted in the Israel Defense Forces.
                        During my service I served in the Special Forces Combat Engineering Corps and when I finished my military service,
                        I flew on a trip to South America for 7 months.
                        went back and improved my grades, and today I am on track to be a software engineer in the future.
                        <br><br> Thank you for coming to visit my portfolio site</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Portfolio Start -->
<section id="portfolio" class="portfolio section-space-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>My Project</h2>
                </div>
            </div>
        </div>
        <div class="col-md-15">
            <div class="portfolio-inner margin-top-30">

                <?php

                foreach ($result as $project) {

                    echo '
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                    <div class="item">
                        <a href="projectImages/' . $project["image"] . '" class="portfolio-popup" title="' . $project["desc"] . '">
                            <img src="projectImages/' . $project["image"] . '" alt="">
                        </a>
                    </div>
                    <a class="mx-auto" href="' . $project["link"] . '" id="' . $project["id"] . '">' . $project["desc"] . '</a>
                </div>
                    
                    ';
                }
                ?>


            </div>
        </div>
    </div>
    </div>


</section>
<!-- Portfolio End -->

<!-- Services Start -->
<section id="services" class="services-section section-space-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>My Skill</h2>
                    <div class="divider dark">
                        <i class="icon-drop"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row margin-top-30">

            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="icon-screen-smartphone color-1"></i>
                    <h3>C</h3>
                    <hr>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="icon-screen-tablet color-2"></i>
                    <h3>C++</h3>
                    <hr>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="fa fa-code color-3"></i>
                    <h3>JS</h3>
                    <hr>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="icon-support color-4"></i>
                    <h3>PHP</h3>
                    <hr>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="fa fa-html5 color-5"></i>
                    <h3>HTML / CSS</h3>
                    <hr>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="icon-bulb color-6"></i>
                    <h3>ASSEMBLY</h3>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Services End -->

<!-- Contact Start -->
<section id="contact" class="section-space-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Contact Me.</h2>
                    <div class="divider dark">
                        <i class="icon-envelope-open"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="margin-top-30 margin-bottom-50">
            <div class="row">

                <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">

                    <div class="row">
                        <div class="contact-us-detail"><a href="mailto:name@domain.com">Dekeldbd@gmail.com</a></div>
                        <div class="contact-us pattern-bg">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h4>Dekel Ben-David</h4>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h4>+972-52-8607636</h4>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <!--                                    <input type="text" id="website" class="form-control" placeholder="Your Website">-->
                                    <a href="https://github.com/Dekelbd"><h4>GitHub</h4></a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Contact End -->

<!-- Footer Start -->
<footer class="footer-section">
            <div class="uipasta-credit">
                <p>&copy Dekel Ben-David</p>
                <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת
                    תוכנה שנקר</a>
            </div>
</footer>
<!-- Footer End -->

<!-- All Javascript Plugins  -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugin.js"></script>

<!-- Main Javascript File  -->
<script type="text/javascript" src="js/scripts.js"></script>


</body>
</html>