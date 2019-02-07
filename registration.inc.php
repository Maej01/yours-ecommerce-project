<?php

include 'conn/conn.php';

//email function 
ini_set("SMTP", "smtp.server.com");//confirm smtp

session_start();

if(isset($_POST['register'])) {
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
            $sql = "INSERT INTO CustomersTBL (First_Name, Last_Name, Username, Email, Country, Street, City, State, Zip_Code,	User_Password) 
            VALUES('$regFirstName','$regLastName','$regEmail','$regEmail','$regCountry','$regStAddress','$regCity','$regState','$regZip','$hashKey')";

            // executing the query
            $result = $conn->query($sql);

                
            $to=$regEmail;
            // Your subject
            $subject="MADUS ACTIVATION REQUIRED";
            // From
            $header="from: MADUS <madus@madus.com>";
            // Your message
            $message="Your Comfirmation link\r\n";
            $message.="Click on this link to activate your account\r\n";
            $message.="You can not login to your new account until you have confirmed your activation\r\n";
            //$message.="http://test.com/activation-confirmation.php?passkey=$securecode";
            // send email
            $sentmail = mail($to,$subject,$message,$header);




            header('Location: index.php'); //redirecting to the registration page
        }else{
            echo '<h1>Password not match</h1>';
        }

    }else{
        echo '<h1>NO FIEDS MUST BE EMPTY</h1>';
    }

}
