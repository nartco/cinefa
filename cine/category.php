<?php
    session_start();
 
    require '../connect.php' ;
    $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) ;
    $db_name = "cinefa";
    $db_found = mysqli_select_db($db_handle, $db_name);

    if($db_found && isset($_SESSION['id']) && isset($_POST['title_c'])){

            
      if($db_found){
        $date_c = intval(date("Y"));
        $id_user = intval($_SESSION['id']);
        $query3 = 'INSERT INTO `CATEGORIES`(`title_c`, `creation_date`, `id_user`) VALUES ("'.$id_user.'" , "'.$date_c.'" , "'.$_SESSION['id'].'")';
        $send = mysqli_query($db_handle, $query3);
        var_dump($date_c);
        var_dump($query3);
        var_dump($send);
          
      }
  }

mysqli_set_charset($db_handle, "utf8");
  
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
    <title>listes
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
        <h2>Listes
        </h2>
        <p></p>
      </div>
    </section>

    <?php
    if($db_found){
            if (isset($_SESSION['email']) && !empty($_SESSION['email'])){

        $user_query = 'SELECT title_c, id_category FROM CATEGORIES INNER JOIN USERS ON  CATEGORIES.id_user = USERS.ref_user WHERE mail ="'. $_SESSION['email'] .'" ' ;
        $user = mysqli_query($db_handle, $user_query);
        while($db_field = mysqli_fetch_assoc($user)){
          $link = $db_field['id_category'];
  ?>
          
          
            <div class="single-event-area mb-30">
              <div class="event-thumbnail">
                <h4><?php echo $db_field['title_c']; ?></h4>
              </div>
                <a href="categories_cont.php?play=<?php echo $link?>" class="btn see-more-btn">Voir plus
                </a>
              </div>
            </div>
          </div> <?php echo '</a>'; ?>

<?php
        }
              
            }
          }

          

?>

<div class="col-12 col-md-6 col-lg-4">
  <div class="single-event-area mb-30">
              
              <div class="event-text">
        <form action=""  method="post">
                <h4>
                  Nom categorie:
                  <input type="text" name="title_c">
                </h4>
                <input type="submit" value="envoyer">
        </form>
              </div>
            </div>
        </div>
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
