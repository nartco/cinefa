 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>home</title>
</head>
<body>
    <?php
        require 'connect.php' ;

        $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) ;
        $db_name = "cinefa";
        $db_found = mysqli_select_db($db_handle, $db_name);
        mysqli_set_charset($db_handle, "utf8");
        if($db_found)
            {
                $sql_query = "SELECT * FROM MOVIES";
                $result_query = mysqli_query($db_handle, $sql_query);

                while($db_field = mysqli_fetch_assoc($result_query)) { 
                        ?>
                        <p>movie<p>
                        <?php
                        echo "\n";
                        echo $db_field['title'];
                        echo "\n";
                        echo $db_field['release_date'];
                        echo "\n";
                        ?>
                        <img src='<?php echo $db_field['liens'];?>'/>
                        <?php
                        
                        
                        
                    }  

            }
        else 
            {
                echo 'Erreur'; 
            }
            mysqli_close($db_handle) ;
        ?>


        
    
</body>
</html>