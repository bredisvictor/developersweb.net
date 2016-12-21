<?php 

    include_once "dbcon.php";

    $text = trim(htmlspecialchars($_POST["text"]));
    $email = $_COOKIE["email"];
    $foldername = $_COOKIE["folder"];

    $index =  strpos($text,"'");
    
    if($index){
        $text = str_replace("'", "",$text);
    }
    
    
    $res = mysqli_query($dbcon,"update users set abouttext = '$text'
    where email = '$email'");
   
    header("location:$foldername");
?>