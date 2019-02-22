<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Connexion</title>

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
    include 'nav.php';
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>Cinefa</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <?php
    if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['mdp'])){
        require '../connect.php';
        
        $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
        $db_name = "cinefa";
        $db_found = mysqli_select_db($db_handle, $db_name);

        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $mdp = $_POST['mdp'];
        $pseudo = $_POST['pseudo'];
        $tel = $_POST['tel'];

        function verif($pseudo, $mdp, $db_handle, $db_name, $db_found){

            
            $verif_query = "SELECT * FROM USERS";
            $verif = mysqli_query($db_handle, $verif_query);
            while($db_field = mysqli_fetch_assoc($verif)){
                if($db_field['pseudo'] == $pseudo){
                    return false;
                }
                if(($db_field['mdp'] == $mdp)){
                    return false;
                }
            }
            return true;
        }

        if(verif($pseudo, $mdp, $db_handle, $db_name, $db_found) == true){

                if($db_found){
                    $query = 'INSERT INTO `USERS`(`pseudo`, `mail`, `phone`, `address`,`mdp`) VALUES ("'. $pseudo . '","'. $email .'","'. $tel .'", "'. $adresse .'", "'.$mdp .'")';
                    $send = mysqli_query($db_handle, $query);
                }
                

                ?>
                <section class="login-area section-padding-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <div class="login-content">
                                <h3>bienvenue à bord</h3>
                                <h4>Connecte toi !</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }

   
    }

    ?>
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Bienvenue</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="event.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email </label>
                                    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">Se connecter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1 style="text-align: center"> Vous n'avez pas de compte ? </h1>
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Rejoignez nous !</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="login.php" method="post">
                            <div class="form-group">
                                    <label for="pseudonew">Pseudo</label>
                                    <input type="text" name="pseudo" class="form-control" id="pseudonew" aria-describedby="emailHelp" placeholder="Entrez votre Pseudo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email </label>
                                    <input type="email" name="email" class="form-control" id="Email1new" aria-describedby="emailHelp" placeholder="Entrez votre E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="adressenew">Adresse</label>
                                    <input type="text" name="adresse" class="form-control" id="adressenew" placeholder="Entrez votre adresse">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telephone</label>
                                    <input type="tel" name="tel"  class="form-control" id="telnew" placeholder="Entrez votre numero">
                                </div>
                                <div class="form-group">
                                    <label for="Mdpnew">Mot de passe</label>
                                    <input type="password" name="mdp"  class="form-control" id="Mdpnew" placeholder="Mot de passe">
                                </div>
                                
                                
                                <button type="submit" class="btn oneMusic-btn mt-30">S'enregister</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> tous droits réservés | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="event.php">Accueil</a></li>
                            <li><a href="#">Realisateurs</a></li>
                            <li><a href="#">Acteurs</a></li>
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