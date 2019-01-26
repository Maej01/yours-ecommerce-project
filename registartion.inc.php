<?php

include 'conn/conn.php';

// set user registration function
// function setUserRegistration() {
// }

if(isset($_POST['submit'])) {
    $regFirstName = $_POST['regFirstName']; 
    $regLastName = $_POST['regLastName']; 
    $regEmail = $_POST['regEmail']; 
    $regCountry = $_POST['regCountry']; 
    $regStAddress = $_POST['regStAddress']; 
    $regCity = $_POST['regCity']; 
    $regState = $_POST['regState']; 
    $regZip = $_POST['regZip']; 
    $regPassword = $_POST['regPassword']; 
    $regPassword2 = $_POST['regConfirmPassword']; 

    // check if none of the fields are empty
    if(!empty($regFirstName) || !empty($regLastName) || !empty($regEmail) || !empty($regCountry) ||
    !empty($regStAddress) || !empty($regCity) || !empty($regState) || !empty($regZip) ||
    !empty($regPassword) || !empty($regPassword2)){

        // check if both input password are equal
        if($regPassword == $regPassword2){
            // encrypting the password
            $hashKey = md5($regPassword);
    
            // query
            $sql = "INSERT INTO registration_tbl (First_Name, Last_Name, Email, Country, Street, City, State, Zip_Code,	User_Password) 
            VALUES('$regFirstName','$regLastName','$regEmail','$regCountry','$regStAddress','$regCity','$regState','$regZip','$hashKey')";

            // executing the query
            $result = $conn->query($sql);

            echo '<h1>NEW RECORD ADDED</h1>';
            header('Location: registration.php'); //redirecting to the registration page
        }else{
            echo '<h1>Password not match</h1>';
        }

    }else{
        echo '<h1>NO FIEDS MUST BE EMPTY</h1>';
    }

}