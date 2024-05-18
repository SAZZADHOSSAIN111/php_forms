<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){

    $firstname = validate($_POST["firstname"]);
    $lastname = validate($_POST["lastname"]);
    $email = validate($_POST["email"]);
    $password = validate($_POST["password"]);

    

    // header("location:registration_succes.php");

    $nameErr = $emailErr = $email=$password = ""; 
    $firstname = $email = $gender = $comment = $website = "";

    if(empty($_POST["firstname"])){
        $nameErr = "Name is Required";
    }else{
        $firstname = validate($_POST["firstname"]);
    }

    
    echo "$firstname";
    echo "<br>";
    echo "$lastname";
    echo "<br>";
    echo "$email";
    echo "<br>";
    echo "$password";

}

function validate($data){
    $data= trim($data);
    $data= stripcslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}