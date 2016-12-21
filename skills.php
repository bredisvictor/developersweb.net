<?php
include_once "dbcon.php";


$html1 = htmlspecialchars($_POST["html"]);
$js1 = htmlspecialchars($_POST["js"]);
$php1 = htmlspecialchars($_POST["php"]);
$angular1 = htmlspecialchars($_POST["angular"]);
$email = $_COOKIE["email"]; 
$name = $_COOKIE["name"]; 
$secondname = $_COOKIE["secondname"]; 
$foldername = $_COOKIE["folder"]; 

$html = trim($html1);
$js = trim($js1);
$php = trim($php1);
$angular = trim($angular1);

if($html == "")
    $html = 0;
if($js == "")
    $js = 0;
if($php == "")
    $php = 0;
if($angular == "")
    $angular = 0;





$myskills = mysqli_query($dbcon,"update users set 
html ='$html',js = '$js',php = '$php', angular = '$angular'
where email = '$email' ");   
header("location:$foldername/");








?>