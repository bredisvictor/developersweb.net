<?php 
    include_once "dbcon.php";
    $phone = $_POST["phone"];
    $email = $_COOKIE["email"];
    $foldername = $_COOKIE["folder"];

    mysqli_query($dbcon,"update users set phone = '$phone'
where email = '$email'");


    header("location:$foldername");



?>