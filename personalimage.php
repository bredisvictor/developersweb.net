<?php

include_once "dbcon.php";

$email = $_COOKIE["email"];
$userfolder = $_COOKIE["folder"];




$res = mysqli_query($dbcon,"select avatarstatus from users where email = '$email'");

while($row = $res->fetch_assoc()){
    
    $as = $row["avatarstatus"];
}

if($as){
    
    $res = mysqli_query($dbcon,"select avatardest from users where email = '$email'");
    while($row = $res->fetch_assoc()){
    
        $persimage = $row["avatardest"];
    }
    unlink($userfolder."/".$persimage);
}

$image = $_POST["personalimage"];


@mkdir("$userfolder/pesonlImage/",0777);

$uploaddir = "$userfolder/pesonlImage/";


@mkdir("$uploaddir", 0777);

$imagename = $_FILES['personalimage']['name'];

$index =  strpos($imagename," ");
    
    if($index){
        $imagename = str_replace(" ", "",$imagename);
    }

$_FILES['personalimage']['name'] = $imagename;

$imagedestination = "pesonlImage/$imagename";

copy($_FILES['personalimage']['tmp_name'],"$uploaddir".basename($_FILES['personalimage']['name']));


   





$imgstat  = mysqli_query($dbcon,"update users set avatardest= '$imagedestination', avatarstatus = 1
where email = '$email'");

header("location:$userfolder");
?>