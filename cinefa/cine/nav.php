<?php
      if(isset($_GET['kill'])){
        session_destroy();
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
                    <a href="index.html" class="nav-brand"><img src="img/core-img/loogo.png" alt=""></a>

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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="albums-store.html">Albums</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="albums-store.html">Albums</a></li>
                                        <li><a href="event.html">Events</a></li>
                                        <li><a href="blog.html">News</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Even Dropdown</a></li>
                                                <li><a href="#">Even Dropdown</a></li>
                                                <li><a href="#">Even Dropdown</a></li>
                                                <li><a href="#">Even Dropdown</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Deeply Dropdown</a></li>
                                                        <li><a href="#">Deeply Dropdown</a></li>
                                                        <li><a href="#">Deeply Dropdown</a></li>
                                                        <li><a href="#">Deeply Dropdown</a></li>
                                                        <li><a href="#">Deeply Dropdown</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Even Dropdown</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="event.html">Events</a></li>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
                                            echo "<a href='event.php?kill='oui'' id='loginBtn'> ".$db_field['pseudo'] ."</a>";
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
                                <div class="cart-btn">
                                    <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                </div>
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

