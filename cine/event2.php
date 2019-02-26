<?php
    session_start();
 
    require '../connect.php' ;
    $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) ;
    $db_name = "cinefa";
    $db_found = mysqli_select_db($db_handle, $db_name);

mysqli_set_charset($db_handle, "utf8");
if($db_found){
  if (isset($_SESSION['email']) && !empty($_SESSION['email'])){

    $user_query = 'SELECT * FROM USERS WHERE mail ="'. $_SESSION['email'] .'" ' ;
    $user = mysqli_query($db_handle, $user_query);
    $db_field = mysqli_fetch_assoc($user);
    
  }


}
  
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
    <title>Accueil
    </title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="lds-ellipsis">
        <div>
        </div>
        <div>
        </div>
        <div>
        </div>
        <div>
        </div>
      </div>
    </div>
    <?php
include 'nav.php';
?>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
      <div class="bradcumbContent">
        <h2>Films
        </h2>
        <p></p>
        <p><br>uniquement  avec note</p>
      </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### Events Area Start ##### -->
    <section class="events-area section-padding-100">
      <div class="container">
        <div class="row">
          <!-- Single Event Area -->
          <?php
if($db_found && (isset($_GET['q']) == false) && (isset($_GET['note']) == true))
{
$sql_query4 = "SELECT DISTINCT MOVIES.id_movie, title, release_date, liens_mov FROM MOVIES INNER JOIN MOVIE_NOTES  ON MOVIES.id_movie = MOVIE_NOTES.id_movie   WHERE note > 0 ";
$result_query4 = mysqli_query($db_handle, $sql_query4);
while($db_field4 = mysqli_fetch_assoc($result_query4)) { 

  echo '<a href="fiche_film.php?id=' . $db_field4['id_movie'] .'&name= '. $db_field4['title'] .'"><div class="col-12 col-md-6 col-lg-4">'
  ?>

          
            <div class="single-event-area mb-30">
              <div class="event-thumbnail">
                <img src='<?php echo $db_field4['liens_mov']; ?>'/>
              </div>
              <div class="event-text">
                <h4>
                  <?php echo $db_field4['title']; ?>
                </h4>
                <div class="event-meta-data">
                  <a href="#" class="event-place">
                    <?php echo $db_field4['release_date']; ?>
                  </a>
                </div>
                <a href="#" class="btn see-more-btn">Voir plus
                </a>
              </div>
            </div>
          </div> <?php echo '</a>'; ?>
          <!--echo '<a href="fiche_movie.php?id=' . $db_field['id_movie'] .'&name= '. $db_field['title'] .'">Dis-moi bonjour !</a>' -->
          <?php
}
}  

else if($db_found && (isset($_GET['q'])))
{
  $search = $_GET['q'];
  $result = 0;
  $sql_query5 = "SELECT DISTINCT MOVIES.id_movie, title, release_date, liens_mov FROM MOVIES INNER JOIN MOVIE_NOTES  ON MOVIES.id_movie = MOVIE_NOTES.id_movie   WHERE note > 0 AND title LIKE '%{$search}%' ";
  $result_query5 = mysqli_query($db_handle, $sql_query5);

  while($db_field5 = mysqli_fetch_assoc($result_query5)){
      ++$result;
      echo '<a href="fiche_film.php?id=' . $db_field5['id_movie'] .'&name= '. $db_field5['title'] .'"><div class="col-12 col-md-6 col-lg-4">'
      ?>
    
              
                <div class="single-event-area mb-30">
                  <div class="event-thumbnail">
                    <img src='<?php echo $db_field5['liens_mov']; ?>'/>
                  </div>
                  <div class="event-text">
                    <h4>
                      <?php echo $db_field5['title']; ?>
                    </h4>
                    <div class="event-meta-data">
                      <a href="#" class="event-place">
                        <?php echo $db_field5['release_date']; ?>
                      </a>
                    </div>
                    <a href="#" class="btn see-more-btn">Voir plus
                    </a>
                  </div>
                </div>
              </div> <?php echo '</a>'; ?>
      <?php
}
if($result == 0){
echo "aucun résultat ne correspond à votre recherche";
}
}
else 
{
echo 'Erreur'; 
}
mysqli_close($db_handle) ;
?>
</section>

          <!-- ##### Footer Area Start ##### -->
          <footer class="footer-area">
            <div class="container">
              <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                  <a href="#">
                    <img src="img/core-img/loogo.png" alt="">
                  </a>
                  <p class="copywrite-text">
                    <a href="#">
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;
                      <script>document.write(new Date().getFullYear());
                      </script> All rights reserved | This template is made with 
                      <i class="fa fa-heart-o" aria-hidden="true">
                      </i> by 
                      <a href="https://colorlib.com" target="_blank">Colorlib
                      </a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                </div>
                <div class="col-12 col-md-6">
                  <div class="footer-nav">
                    <ul>
                      <li>
                        <a href="#">Home
                        </a>
                      </li>
                      <li>
                        <a href="#">Albums
                        </a>
                      </li>
                      <li>
                        <a href="#">Events
                        </a>
                      </li>
                      <li>
                        <a href="#">News
                        </a>
                      </li>
                      <li>
                        <a href="#">Contact
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!-- ##### Footer Area Start ##### -->
          <!-- ##### All Javascript Script ##### -->
          <!-- jQuery-2.2.4 js -->
          <script src="js/jquery/jquery-2.2.4.min.js">
          </script>
          <!-- Popper js -->
          <script src="js/bootstrap/popper.min.js">
          </script>
          <!-- Bootstrap js -->
          <script src="js/bootstrap/bootstrap.min.js">
          </script>
          <!-- All Plugins js -->
          <script src="js/plugins/plugins.js">
          </script>
          <!-- Active js -->
          <script src="js/active.js">
          </script>
          </body>
        </html>
