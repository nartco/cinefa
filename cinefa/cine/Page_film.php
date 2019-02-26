<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo $_GET['name']; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
<?php
    require 'connect.php' ;
    include 'nav.php';
    $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) ;
    $db_name = "cinefa";
    $db_found = mysqli_select_db($db_handle, $db_name);
    mysqli_set_charset($db_handle, "utf8");
    if(isset($_GET['rating']) && isset($_SESSION['email']) && !empty($_SESSION['email'])){
        if($db_found){
            $query = 'INSERT INTO `MOVIE_NOTES`(`id_movie`, `id_user`, `note`) VALUES ("'. $_GET['id'] . '","'. $_SESSION['id'] .'","'. $_GET['rating'] .'")';
            $send = mysqli_query($db_handle, $query);
        } 
        if($db_found && isset($_GET['id']))
                {
                    $sql_query = 'SELECT * FROM MOVIES WHERE id_movie ="'.  $_GET['id'] .'"';
                    $result_query = mysqli_query($db_handle, $sql_query);
                    $db_field = mysqli_fetch_assoc($result_query);
                    
                    $sql_query2 = 'SELECT * FROM MOVIES INNER JOIN PLAYS_IN ON PLAYS_IN.id_movie = MOVIES.id_movie INNER JOIN ACTORS ON PLAYS_IN.id_actor = ACTORS.id_actor INNER JOIN DIRECTORS ON MOVIES.id_director = DIRECTORS.id_director ';
                    $result_query2 = mysqli_query($db_handle, $sql_query2);
                    $db_field2 = mysqli_fetch_assoc($result_query2);
                    
                    ?>
                    <!-- ##### Breadcumb Area Start ##### -->
                    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb.jpg);">
                        <div class="bradcumbContent">
                            <h2><?php echo $db_field['title']; ?></h2>
                        </div>
                    </section>
                    <!-- ##### Breadcumb Area End ##### -->
                    
                       <!-- ##### Contact Area Start ##### -->
                        <section class="contact-area section-padding-100-0">
                            <div class="container">
                                <div class="row">

                                    <div class="col-12 col-lg-3">
                                        <div class="contact-content mb-100">

                                    </div>

                                    <div class="col-12 col-lg-9">
                                        <!-- ##### Google Maps ##### -->
                                        <div class="map-area mb-100">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
                                        </div>
                                    </div>
====================
                                </div>
                            </div>
                        </section>
    <!-- ##### Contact Area End ##### -->
   
                        <!--<img src='<?php echo $db_field['liens_mov'];?>'/> -->
                <?php
                    }
}
?>



 

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>