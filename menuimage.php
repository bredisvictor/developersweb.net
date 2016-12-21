<?php 
   

    if(isset($_COOKIE["email"])){
        
   $coockieemail = $_COOKIE["email"];
   $foldername = $_COOKIE["folder"];

   $row = mysqli_query($dbcon,"SELECT avatarstatus, avatardest  FROM users where email = '$coockieemail'");
    while($varibles = $row->fetch_assoc()){
        
        $menuimage = $varibles["avatardest"];
        $menupersonalimagestatus = $varibles["avatarstatus"];
        
    }
    
    
    
    if($menupersonalimagestatus){
        if(isset($email)){
            if($coockieemail == $email)
                $menuimagedest = $menuimage;
            else
                $menuimagedest = "../".$foldername."/".$menuimage;
        }
        else
            $menuimagedest = $foldername."/".$menuimage;
        
    }
    else{
        if(isset($mainpage))
            $menuimagedest = "image/userimage.png";
        else
            $menuimagedest = "../image/userimage.png";

        }
    }
?>