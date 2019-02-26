<?php
    session_start();
    
?>
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
        
        require '../connect.php' ;
        

        $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) ;
        $db_name = "cinefa";
        $db_found = mysqli_select_db($db_handle, $db_name);
        mysqli_set_charset($db_handle, "utf8");
        include 'nav.php';
        if($db_found && isset($_GET['id'])){

            
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
                        <!-- Title -->
                        <div class="contact-title mb-50">
                            <h5>Infos</h5>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <p>Date de sortie: </p>
                            <p>	&nbsp; 	&nbsp;</p>
                            <p> <?php echo $db_field['release_date']; ?></p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <p>Acteur(s): </p>
                            <p>	&nbsp; 	&nbsp;</p>
                            <?php
                        echo '<a href="fiche_actor.php?id=' . $db_field2['id_actor'] .'&name= '. $db_field2['name'] .'"><p>' . $db_field2['name'] . '</p></a>'
                        ?>
                            
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <p>Realisateur: </p>
                            <p>	&nbsp; 	&nbsp;</p>
                            <?php
                            echo '<a href="fiche_actor.php?id=' . $db_field2['id_director'] .'&name= '. $db_field2['name_dir'] .'"><p>' . $db_field2['name_dir'] . '</p></a>'
                            ?>
                            <p><?php echo $db_field2['name_dir']; ?></p>
                        </div>

                        <div class="single-contact-info d-flex align-items-center">
                            <p>Note: </p>
                            <p>	&nbsp; 	&nbsp;</p>
                            
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>

                        </div>

                        <div class="single-contact-info d-flex align-items-center">
                            <p>Noter: </p>
                            <p>	&nbsp; 	&nbsp;</p>
                            
                            <?php
                                $id1 = $_GET['id'];
                                 
                                ?>
                            
                            <div class="rating">
                               <a href="rating.php?rating=1&movie=<?php echo $id1 ?>"><span>☆</span></a>';
                               
                            </div>
                            
                            
                        </div>

                        

                

                    </div>
                </div>

                <div class="col-12 col-lg-9">
                    <div class="event-thumbnail">
                        <img class="fiches" src='<?php echo $db_field['liens_mov'];?>'/>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
}
    ?>
    

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