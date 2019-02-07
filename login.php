<?php
    include ('login.inc.php');

    // if(isset($_SESSION['loggedUser'])){
    //     echo '<h1>Welcome' .$_SESSION '</h1>';
    // }
?>

<html lang="en">
<head>
    <!-- requiring the headlinks -->
    <?php require 'includes/templates/headlinks.php'; ?>

    <title>Login</title>
</head>
<body id="login-section-body">
    
    <section class="section login-section">
        <div class="container">
            <img src="public_files/images/sliderImg/avt.png" class="avt"/>
            <h4 class="center blue-text lighten-2">Please Login</h1>
            <!-- LOGIN FORM -->
            <form method="POST" action="login.inc.php">
                <span><?php echo $errorMessage; ?></span>
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <label for="icon_prefix">Username or Email</label>
                    <input id="loginUsername" type="email" class="validate" name="loginUsername">
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <label for="icon_telephone">Password</label>
                    <input id="loginPassword" type="password" class="validate" name="loginPassword">
                </div>
                <!-- <div class="col s12 m12 push-s3 push-m3"> -->
                    <input class="btn btn-large btn-extend blue white-text" type="submit" value="login" name="loginButton">
                <!-- </div> -->
            </form>
        </div>
    </section>
    <div class="fixed-action-btn ">
        <a class="btn-floating btn-large red pulse">
            <i class="large material-icons">more_vert</i>
        </a>
        <ul>
            <li><a href="/group_web/index.php" class="btn-floating red tooltipped" data-position="left" data-tooltip="Home"><i class="material-icons">home</i></a></li>
            <li><a href="/group_web/contact.php" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Contact Us"><i class="material-icons">contacts</i></a></li>
            <li><a href="/group_web/registration.php" class="btn-floating green tooltipped" data-position="left" data-tooltip="Sign Up"><i class="material-icons">account_circle</i></a></li>
        </ul>
    </div>

    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</body>
</html>