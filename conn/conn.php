<?php

    $conn = mysqli_connect("localhost", "root", "");

    // if a connection is exists
    if($conn){
        
        // selecting everything from the database
        mysqli_select_db($conn, "yoursEcommerce_db");
        
    }
    else {
        
        echo "connection failed";
    }
?>