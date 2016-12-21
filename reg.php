<?php 
include_once "dbcon.php";



$name1 = htmlentities($_POST["name"]);
$secondname1 = htmlentities($_POST["secondname"]);
$email1 = htmlentities(strtolower($_POST["email"]));
$password1 = htmlentities(strtolower(md5($_POST["password"])));
$confirmpassword1 = htmlentities(strtolower(md5($_POST["confirmpassword"])));



$name = trim($name1);
$secondname = trim($secondname1);
$email = trim($email1);
$password = trim($password1);
$confirmpassword = trim($confirmpassword1);

$index =  strpos($name," ");
    
    if($index){
        $name = str_replace(" ", "",$name);
    }

$index2 =  strpos($secondname," ");
    
    if($index2){
        $secondname = str_replace(" ", "",$secondname);
    }



$namelower = strtolower($name);
$secondnamelover =  strtolower($secondname);
$foldername = $namelower.$secondnamelover;



$checkemail  = mysqli_query($dbcon,"select email from users ");   
if($checkemail){
while($emailexist = $checkemail->fetch_assoc()){
   if($emailexist['email']==$email){
       
       session_start();
       $emailex = "E-MAIL ADDRESS YOU ENTERED EXIST ALREADY";
       $_SESSION["emailexist"] = $emailex;
       
       header("location:index.php");
       exit();
   }
}
}



if(isset($_SESSION["emailexist"])){
    unset($_SESSION["emailexist"]);
    
}

setcookie("name","$name",time()+60*60*24*30);
setcookie("secondname","$secondname",time()+60*60*24*30);
setcookie("email","$email1",time()+60*60*24*30);
setcookie("password","$password1",time()+60*60*24*30);
setcookie("folder","$foldername",time()+60*60*24*30);

$newuser = mysqli_query($dbcon,"INSERT INTO users (name,secondname,password,
email,prog1,prog2,prog3,prog4,abouttext,avatardest,
backgrounddest,prog1imgdest ,prog2imgdest ,prog3imgdest ,prog4imgdest, phone, city, changedpass) VALUES ('$name','$secondname','$password','$email','','','','','A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:
            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)
            Understanding, creating, manipulating, and querying databases
            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.
            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.','','','','','','','0500000000','Unknow','0');"
        );

$checkid = mysqli_query($dbcon,"select id from users;");
while($ids = mysqli_fetch_assoc($checkid)){
    $idlast = $ids["id"];
}

$htmlcontent = '
    <?php 
        $mypassword="'.$password.'";
        $myname="'.$name.'";
        $mysecondname="'.$secondname.'";
        $email="'.$email.'";
        $id = "'.$idlast.'";
        include "../personal.php";
        
?>
';

@mkdir("$foldername", 0777);

file_put_contents("$foldername/index.php","$htmlcontent");


header("location:$foldername");

?>