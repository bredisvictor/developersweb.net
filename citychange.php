<?php 
    include_once "dbcon.php";
    $city = $_POST["city"];
    $email = $_COOKIE["email"];
    $foldername = $_COOKIE["folder"];

    mysqli_query($dbcon,"update users set city = '$city'
where email = '$email'");


    header("location:$foldername");



?>