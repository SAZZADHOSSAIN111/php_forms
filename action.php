<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){

    $firstname = validate($_POST["firstname"]);
    $lastname = validate($_POST["lastname"]);
    $email = validate($_POST["email"]);
    $password = validate($_POST["password"]);

    
    echo "$firstname";
    echo "<br>";
    echo "$lastname";
    echo "<br>";
    echo "$email";
    echo "<br>";
    echo "$password";

    // header("location:registration_succes.php");

}

function validate($data){
    $data= trim($data);
    $data= stripcslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}