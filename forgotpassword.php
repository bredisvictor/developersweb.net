<?php  

include_once "dbcon.php";

$mymail = trim(htmlspecialchars($_POST["fp"]));

    $checkemail = mysqli_query($dbcon,"select email from users where email = '$mymail'");
    while($row = $checkemail->fetch_assoc()){
    
        $email = $row["email"];
    
    }

    if(!$email){
        session_start();
        $_SESSION["wrongemailhcangepass"] = "THIS E-MAIL ADRESS NOT EXIST IN SYSTEM";
        header("location:index.php");
        die();
    }
    else{
    $arr = array("q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","1","2","3","4","5","6","7","8","9","0");

    $simbhol1 = rand(0,35);
    $simbhol2 = rand(0,35);
    $simbhol3 = rand(0,35);
    $simbhol4 = rand(0,35);
    $simbhol5 = rand(0,35);
    $simbhol6 = rand(0,35);

    $pass1 = $arr[$simbhol1];
    $pass2 = $arr[$simbhol2];
    $pass3 = $arr[$simbhol3];
    $pass4 = $arr[$simbhol4];
    $pass5 = $arr[$simbhol5];
    $pass6 = $arr[$simbhol6];
    
    $newPassword = $pass1.$pass2.$pass3.$pass4.$pass5.$pass6;
	$codenpass = md5($pass1.$pass2.$pass3.$pass4.$pass5.$pass6);

    
    
   $updatePass = mysqli_query($dbcon,"update users set password = '$codenpass', changedpass = '1' where email = '$mymail'");

    
    
    $subject = "You got message from DevelopersWeb.net";

    $message = "Your temporary password is $newPassword";


    
    mail($mymail,$subject,$message);
        
    session_start();
    
    $_SESSION["passwordsent"] = "PASSWODR SENT SUCCSESSFUL";
    
    header("location: .");
    
}
?>
