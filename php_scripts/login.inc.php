<?php

include 'conn/conn.php';
include 'login.inc.php';

if(isset($_POST['loginButton'])){
    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];

    // selecting query
    $sql = "SELECT * FROM registration_tbl WHERE Email='$loginUsername' AND User_Password='$loginPassword'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0) {
        if ($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['ID'];
            header("Location: index.php?loginsuccess");
            exit();
        }
    }else {
        header("Location: login.php?loginfailed");
        exit();
    }
}

// logout function
// function logOut() {
//     if(isset($_POST['logoutButton'])) {
//         session_start();
//         session_destroy();
//         header('Location: index.php');
//         exit();
//     }
// }