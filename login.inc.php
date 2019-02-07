<?php

include 'conn/conn.php';

$errorMessage = ''; //variable to store error message

if(isset($_POST['loginButton'])){
    if(empty($_POST['loginUsername']) || empty($_POST['loginPassword'])){
        $errorMessage = "Username or Password is invalid";
    }
    else{
        //Define username and password
        $loginUsername = $_POST['loginUsername'];
        $loginPassword = $_POST['loginPassword'];

        //decrypting the password
        $password = md5($loginPassword);

        // selecting query
        $sql = "SELECT * FROM CustomersTBL WHERE Email='$loginUsername' AND User_Password='$password' ";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0) {
            if ($row = $result->fetch_assoc()) {

                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['loggedUser'] = $loginUsername;

                // if(md5($_SESSION['pwd']) == $res["hashstring"])
                
                // $_SESSION['id'] = $row['ID'];
                header("Location: index.php?loginsuccess");
                exit();
            }
        }else {
            // header("Location: login.php?loginfailed");
            $errorMessage = "Username or Password is invalid";
            exit();
        }
    }
    
}
// else{
//     echo "You are required to login. <a href='login.php'>Try again</a>";
// }

// logout function
// function logOut() {
//     if(isset($_POST['logoutButton'])) {
//         session_start();
//         session_destroy();
//         header('Location: index.php');
//         exit();
//     }
// }