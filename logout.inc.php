<?php

    session_start();
    session_destroy();

    echo "<p>You have successfully logged out" .$_SESSION['loggedUser']; "</p>";

    header('Location: index.php');
