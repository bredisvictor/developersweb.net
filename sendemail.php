<?php 
    $personname = htmlspecialchars($_POST["name"]);
    $personEmail = htmlspecialchars($_POST["email"]);
    $personMessage = htmlspecialchars($_POST["message"]);
    $personsubject = htmlspecialchars($_POST["subject"]);
    $email = $_POST["sendtophpemail"];
    $myname = $_POST["sendtophpmyname"];
    $mailbackfolder = $_POST["sendtophpmailbackfolder"];
	
    $subject = "You got message from DevelopersWeb.net";

    $message = "Hello $myname, you got message from:
	
    Name: $personname
    E-MAIL: $personEmail
    Subject: $personsubject
    Message: 
	$personMessage";


    $from  = "From: $personname <$personEmail> \r\n Reply-To: $personEmail \r\n"; 
    mail($email,$subject,$message,$from);
    
    session_start();
    $_SESSION["sentsuccessful"] = "E-MAIL SENT SUCCSESSFUL";

    header("location:$mailbackfolder");
?>