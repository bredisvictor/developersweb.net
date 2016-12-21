<?php

include_once "dbcon.php";

$email1 = htmlspecialchars(strtolower($_POST["logemail"]));

$password1 =htmlspecialchars(strtolower(md5($_POST["logpassword"])));

$email = trim($email1);

$password = trim($password1);







$checkemail = mysqli_query($dbcon,"select name, secondname, email, changedpass, password from users where email = '$email' ");   
while($row = $checkemail->fetch_assoc()){
    $name =  $row["name"];
    $secondname = $row["secondname"];
    $pass = $row["password"];
    $email = $row["email"];
    $changedpass = $row["changedpass"];
}

if(isset($pass)){
    if($password == $pass){
        if($changedpass){
            
            session_start();
            $_SESSION["changedpass"] = 1;
            $_SESSION["changepassemail"] = $email;
            header("location:index.php");
            
        }
        else{
            
            $namelower = strtolower($name);
            $secondnamelower =  strtolower($secondname);
            $foldername = $namelower.$secondnamelower;
            
            setcookie("name",$name,time()+60*60*24*30);
            setcookie("secondname",$secondname,time()+60*60*24*30);
            setcookie("email",$email,time()+60*60*24*30);
            setcookie("password",$pass,time()+60*60*24*30);
            setcookie("folder",$foldername,time()+60*60*24*30);
            
            if(isset($_SESSION["emailexist"])){
                unset($_SESSION["emailexist"]);
            }
            if(isset($_SESSION["wrongpass"])){
                unset($_SESSION["wrongpass"]);
            }
        
            header("location:$foldername/");
        }   
    }
    else{
        session_start();
        $_SESSION["wrongpass"] = "WRONG PASSWORD";
        header("location:index.php");
    }
}
else{
    session_start();
        $_SESSION["wrongemail"] = "THIS E-MAIL ADRESS NOT EXIST IN SYSTEM";
        header("location:index.php");
}






?>