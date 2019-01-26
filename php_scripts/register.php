<?php
/*  
    PROJECT NAME  :   YOURS E-COMMERCE WEBSITE
    AUTHOR        :   MUHAMMAD MUSTAPHA SESAY, AHMED SAIDU KAMARA, CHRISTOPHER SOPA
    INSTITUTION   :   LIMOKWING UNIVERSITY OF CREATIVE TECHNOLOGY
    START DATE    :   18TH - JANUARY - 2019 1:15-AM
    FINISH DATE   :   UNKNOWN
*/
include "/conn/conn.php";

    // this variables will hold the clients inputs
    $fName = $lName = $email = $country = $address = $city = $state = $zip = $password = $confirmPassword= false;

    // check if the request is a post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // check if the input fields are not empty
        if(!empty($_POST['regFirstName'])){
            
            $fName = $_POST['regFirstName'];
            $fName = mysqli_real_escape_string($conn, $fName);
        }
        else {
            
            echo "<p>No first Entered</p>";
        }
        if(!empty($_POST['regLastName'])){
            
            $lName = $_POST['regLastName'];
            
            $lName = mysqli_real_escape_string($conn, $lName);
        }
        else {
            
            echo "<p>No last name entered</p>";
        }
        if(!empty($_POST['regEmail'])){
            
            $email = $_POST['regEmail'];
            
            $email = mysqli_real_escape_string($conn, $email);
        }
        else {
            
            echo "<p>No email address entered</p>";
        }
        if(!empty($_POST['regCountry'])){
            
            $country = $_POST['regCountry'];
            $country = mysqli_real_escape_string($conn, $country);
        }
        else {
            
            echo "<p>No country is selected</p>";
        }
        if(!empty($_POST['regStAddress'])){
            
            $address = $_POST['regStAddress'];
            
            $address = mysqli_real_escape_string($conn, $address);
        }
        else {
            
            echo "<p>No address entered</p>";
        }
        if(!empty($_POST['regCity'])){
            
            $city = $_POST['regCity'];
            
            $city = mysqli_real_escape_string($conn, $city);
        }
        else {
            
            echo "<p>No city entered</p>";
        }
        if(!empty($_POST['regState'])){
            
            $state = $_POST['regState'];
            $state = mysqli_real_escape_string($conn, $state);
        }
        else {
            
            echo "<p>No state Entered</p>";
        }
        if(!empty($_POST['regZip'])){
            
            $zip = $_POST['regZip'];
            
            $zip = mysqli_real_escape_string($conn, $zip);
        }
        else {
            
            echo "<p>No zip code entered</p>";
        }
        if(!empty($_POST['regPassword'])){
            
            $password = $_POST['regPassword'];
            $confirmPassword = $_POST['regConfirmPassword'];

            // checking if passwords doesn't match
            if($password != $confirmPassword){
                echo "<p>Passwprd doesn't match</p>";
            }
            else{
                $password = mysqli_real_escape_string($conn, $password);
            } 
        }
        else {
            
            echo "<p>No password entered</p>";
        }
        
        // check if all variables have values
        if($fName and $lName and $email and $country and $address and $city and $state and $zip and $password){
            
            $query = "INSERT INTO registration_tbl(First_Name,Last_Name,Email,Country,Street,City,User_State,Zip_Code,User_Password) VALUES('$fName', '$lName','$email','$country', '$address','$city','$state', '$zip','$password', NOW())";
            
            $result = mysqli_query($conn, $query);
            
            if(mysqli_affected_rows($conn) == 1){
                
                echo "<h3>Comment successfully Saved</h3>";
            }
            else {
                
                echo "<p>Failed to save Data</p>";
            }
        }
        else {
            
            echo "<p>Missing form value(s)</p>";
        }
    }
?>