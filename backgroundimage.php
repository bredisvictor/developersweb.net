<?php
include_once "dbcon.php";

$email = $_COOKIE["email"];
$userfolder = $_COOKIE["folder"];


$res = mysqli_query($dbcon,"select backgroundstatus from users where email = '$email'");

while($row = $res->fetch_assoc()){
    
    $bs = $row["backgroundstatus"];
}

if($bs){
    
    $res = mysqli_query($dbcon,"select backgrounddest from users where email = '$email'");
    while($row = $res->fetch_assoc()){
    
        $backdest = $row["backgrounddest"];
    }
    unlink($userfolder."/".$backdest);
}


$image = $_POST["backgroundimage"];

@mkdir("$userfolder/backgroundImage/",0777);

$uploaddir = "$userfolder/backgroundImage/";


@mkdir("$uploaddir", 0777);

$imagename = $_FILES['backgroundimage']['name'];

$index =  strpos($imagename," ");
    
    if($index){
        $imagename = str_replace(" ", "",$imagename);
    }

$_FILES['backgroundimage']['name'] = $imagename;

$imagedestination = "backgroundImage/$imagename";

copy($_FILES['backgroundimage']['tmp_name'],"$uploaddir".basename($_FILES['backgroundimage']['name']));


$bgstatus  = mysqli_query($dbcon,"update users set backgrounddest= '$imagedestination', backgroundstatus = 1
where email = '$email'");

header("location:$userfolder");
?>