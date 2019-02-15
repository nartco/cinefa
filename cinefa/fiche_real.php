<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <?php
            require 'connect.php' ;

            $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) ;
            $db_name = "cinefa";
            $db_found = mysqli_select_db($db_handle, $db_name);
            mysqli_set_charset($db_handle, "utf8");
            if($db_found && isset($_GET['id']))
                {
                    $sql_query = 'SELECT * FROM DIRECTORS WHERE id_director ="'.  $_GET['id'] .'"';
                    $result_query = mysqli_query($db_handle, $sql_query);
                    while($db_field = mysqli_fetch_assoc($result_query)){
                        echo "\n";
                        echo $db_field['name'];
                        echo "\n";
                        echo $db_field['gender'];
                        echo "\n";
                        echo $db_field['age'];
                        echo "\n";
                        ?>
                       
                        <img src='<?php echo $db_field['liens'];?>'/>
                        <?php
                    }

                }
        ?>

    <h1>
</body>
</html>