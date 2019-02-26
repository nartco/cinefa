<?php
      if(isset($_GET['kill'])){
          if($_GET['kill'] == 'oui'){
            session_destroy();
            ?>
            <script>
                document.location.href="event.php"; 
            </script>
            <?php
          }
        
        }
?>

<link rel="icon" href="img/core-img/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
       <!-- ##### Header Area Start ##### -->
   <header class="header-area">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                    <!-- Nav brand -->
                    <a href="event.php" class="nav-brand"><img src="img/core-img/loogo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="event.php">Accueil</a></li>
                                <li><a href="actors.php">Acteurs</a></li>
                                <li><a href="directors.php">Realisateurs</a></li>

                            </ul>

                            <!-- Login/Register & Cart Button -->
                            <div class="login-register-cart-button d-flex align-items-center">
                                <!-- Login/Register -->
                                <div class="login-register-btn mr-50">
                                <?php
                                    if($db_found){
                                        if (isset($_SESSION['email']) && !empty($_SESSION['email'])){
                                            $user_query = 'SELECT * FROM USERS WHERE mail ="'. $_SESSION['email'] .'" ' ;
                                            $user = mysqli_query($db_handle, $user_query);
                                            $db_field = mysqli_fetch_assoc($user);
                                            $kill = "oui";
                                            echo "<a href='event.php?kill=". $kill ."' id='loginBtn'> ".$db_field['pseudo'] ."</a>";
                                        }
                                    
                                    else{
                                        ?>
                                        <a href="login.php" id="loginBtn">Login / Register</a>
                                        <?php
                                    } 
                                }
                                    ?>
                                </div>
                                <?php
                            
                            ?>

                                <!-- Cart Button -->
                                <form  id="searchthis" method="get">
            <input id="search" name="q" type="text" placeholder="Rechercher" />
            <input id="search-btn" type="submit" value="Rechercher" />
        </form>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

