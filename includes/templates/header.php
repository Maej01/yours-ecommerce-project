<?php
    // if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //     echo "Welcome to the member's area, " . $_SESSION['loggedUser'] . "!";
    // } else {
    //     echo "Please log in first to see this page.";
    // }
?>

<!--  header -->
<header>
    <nav class="blue darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">MADUS</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons ">menu</i>
                </a>
            
                <!--larger devices navigation-->
                <ul class="right hide-on-med-and-down">
                    <li><a class="active-link" href="/group_web/index.php">Home</a></li>
                    <li><a href="/group_web/contact.php">Contact Us</a></li>
                    <li><a href="/group_web/registration.php">Sign Up</a></li>
                    <li>
                        <?php
                            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                                echo "<a href='/group_web/logout.inc.php' class='btn orange'>Logout</a>";
                            }
                            else{
                                echo "<a href='/group_web/login.php' class='btn orange'>Login</a>";
                            }
                        ?>
                    </li>
                    <li>
                        <a href="//facebook.com" class="tooltipped " data-tooltip="connect with us on facebook">
                            <i class="fab fa-facebook"></i></a>
                    </li> 
                    <li>
                        <a href="#" class="tooltipped" data-tooltip="+23231055623 or +23231109579">
                            <i class="fab fa-whatsapp"></i></a>
                    </li>
                    <li>
                        <a href="#" class="tooltipped" data-tooltip="view chart">
                            <i class="material-icons">shopping_cart</i></a>
                    </li>
                    <li>
                        <a href="#" class="btn-floating tooltipped" data-tooltip="account" id="user_account_icon">
                            <i class="material-icons">user</i></a>
                        <!-- <img src="public_files/images/account_photos/account.png" alt=""> -->
                    </li>
                </ul>
                <!-- mobile navigations -->
                <ul class="sidenav" id="mobile-nav">
                    <h4 class="orange-text text-darken-4 center">YOURS</h4>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <a href="/group_web/index.php">
                            <i class="fa fa-home gery-text"></i>Home</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons gery-text">shop</i>Shop</a>
                    </li>
                    <li>
                        <a href="/group_web/registration.php">
                            <i class="fa fa-users gery-text"></i>Sign Up</a>
                    </li>
                    <li>
                        <a href="/group_web/contact.php">
                            <i class="material-icons gery-text">contacts</i>Contact Us</a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li><a href="/group_web/login.php" class="btn orange">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header> 