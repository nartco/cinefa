<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>acteurs</title>
</head>
<body>  
    <?php
        require 'connect.php' ;
        include 'navbar.php';

        $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) ;
        $db_name = "cinefa";
        $db_found = mysqli_select_db($db_handle, $db_name);
        mysqli_set_charset($db_handle, "utf8");

        if($db_found)
        {
            $sql_query = "SELECT * FROM ACTORS";
            $result_query = mysqli_query($db_handle, $sql_query);

            echo '<section class="wrapper">';
            while($db_field = mysqli_fetch_assoc($result_query)) { 
                        
                        ?>
                        <div class="data">
                        <p>acteurs<p>
                        <?php
                        echo "\n";
                        echo $db_field['name'];
                        echo "\n";
                        echo $db_field['gender'];
                        echo "\n";
                        echo $db_field['age'];
                        echo "\n";
                        echo '<a href="fiche_actor.php?id=' . $db_field['id_actor'] .'&name= '. $db_field['name'] .'">Dis-moi bonjour !</a>'
                        ?>
                       
                        <img src='<?php echo $db_field['liens_act'];?>'/>
                        <?php
                        echo '</div>';
                        
                        
                    } 
            echo '</section>';

            }
        else 
            {
                echo 'Erreur'; 
            }
        ?>
    
</body>
</html>