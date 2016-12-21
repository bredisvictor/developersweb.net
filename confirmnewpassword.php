<?php 
    include_once "dbcon.php";
    
    session_start();

    $coockieemail = $_SESSION["changepassemail"];
    
    $password1 = htmlentities(strtolower(md5($_POST["password"])));


    $updatePass = mysqli_query($dbcon,"update users set password = '$password1', changedpass = '0' where email = '$coockieemail'");

    $checkemail = mysqli_query($dbcon,"select name, secondname, email, password from users where email = '$coockieemail' ");   
    while($row = $checkemail->fetch_assoc()){
        $name =  $row["name"];
        $secondname = $row["secondname"];
        $pass = $row["password"];
        $email = $row["email"];
        $changedpass = $row["changedpass"];
    }

    $namelower = strtolower($name);
    $secondnamelower =  strtolower($secondname);
    $foldername = $namelower.$secondnamelower;
            
    setcookie("name",$name,time()+60*60*24);
    setcookie("secondname",$secondname,time()+60*60*24);
    setcookie("email",$email,time()+60*60*24);
    setcookie("password",$pass,time()+60*60*24);
    setcookie("folder",$foldername,time()+60*60*24);

    unset($_SESSION["changedpass"]);
    unset($_SESSION["changepassemail"]);
    $_SESSION["passwordchangedon"] = $password1;

    header("location:$foldername/");

    
    

?>