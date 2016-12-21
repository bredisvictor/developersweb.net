<?php

include_once "dbcon.php";
$email = $_COOKIE["email"];
$userfolder = $_COOKIE["folder"];
$password1 =htmlspecialchars(strtolower(md5($_POST["password"])));
$password = trim($password1);

$res = mysqli_query($dbcon,"select password from users where email = '$email'");

while($row = $res->fetch_assoc()){
    
    $userpass = $row["password"];
}

if($password==$userpass){
$dir = $userfolder;
    
    $it = new RecursiveDirectoryIterator($dir);
    $files = new RecursiveIteratorIterator($it,
             RecursiveIteratorIterator::CHILD_FIRST);
    foreach($files as $file){
        if($file->getFilename() === '.' || $file->getFilename() === '..') {
            continue;
        }
        if($file->isDir()){
            rmdir($file->getRealPath());
        } 
        else{
            unlink($file->getRealPath());
        }
        
    }
    rmdir($dir);


$deletprofile = mysqli_query($dbcon,"delete from users where email = '$email'");

setcookie("name",'Vcitor',time()-3000);
setcookie("secondname","Bredis",time()-3000);
setcookie("email",'victor@mail.com',time()-3000);
setcookie("password",'202cb962ac59075b964b07152d234b70',time()-3000);
setcookie("folder",'victorbredis',time()-3000);
    
header("location:.");
}
else{
    session_start();
    $_SESSION["wdpp"] = "WRONG PASSWORD";
    header("location:.");
}


?>