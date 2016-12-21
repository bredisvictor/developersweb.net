<?php
$mainpage = 1;
include_once "dbcon.php";
include_once "menuimage.php";

$change = mysqli_query($dbcon,"UPDATE clients SET count = count+1");

session_start();

 

if(isset($_SESSION["emailexist"])){
    $emailex = $_SESSION["emailexist"];
    $counter = 1;
}
else{
    $counter = 0;
}

if(isset($_SESSION["wrongpass"])){
    $errorlog = $_SESSION["wrongpass"];
    $counterlog = 1;
}
else if(isset($_SESSION["wrongemail"])){
    $errorlog = $_SESSION["wrongemail"];
    $counterlog = 1;
}
else{
    $counterlog = 0;
}

$cookies = false;
    if(isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
        $coockieemail = $_COOKIE["email"];
        $cookiepassword = $_COOKIE["password"];
        $cookiename = $_COOKIE["name"];
        $cookiesecondname = $_COOKIE["secondname"];
        $foldername = $_COOKIE["folder"];
        $cookies = true;
    }




if(isset($coockieemail)&&isset($cookiepassword)){
    $logedvisitor = 1;
}
else{
    $logedvisitor = 0;
}

if(isset($_SESSION["changedpass"])){
    $changedpass = $_SESSION["changedpass"];
}
else{
    $changedpass = 0;
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Web developers portfolio page | Free online storage </title>
  <meta name="description" content="Portfolio page for front-end, back-end web developers. Free online storage for web progects. Free personal page with your personal url address.  Place for potential employers who are looking for a web programmer for employment.">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86931586-1', 'auto');
  ga('send', 'pageview');

</script>
  <div id="preloadcoverfirst">
       <div id="prelodinsidefirst">
           <div id="preloadimagefirst"></div>
       </div>
   </div>
   <div <?php if($changedpass){ 
        echo "style='display:block'";
        unset($_SESSION["changedpass"]);
        
    } ?> id="confnewpassc">
       <div id="confnewpassd">
           <span id="confnewpasst">CONFIRM YOUR NEW PASSWORD</span>
           <span class="error cp1"></span>
           <form id="confpassf" action="confirmnewpassword.php" method="post">
               <input id="ps1" type="password" name="password" placeholder="Enter new password">
               <input id="ps2" type="password" name="password" placeholder="Confirm password">
               <button>CONTINIE</button>
               <span id="canselmsf2">Cansel</span>
           </form>
       </div>
   </div>
    <div id="fpfd" <?php if(isset($_SESSION["wrongemailhcangepass"]) || isset($_SESSION["passwordsent"])){
    echo "style = 'display:block;'";
    
} ?> >
        <div id="fpfc">
           <span id="fpft">ENTER YOU'R E-MAIL ADDRESS TO SEND NEW PASSWORD</span>
           <span class="error fp1 <?php if(isset($_SESSION["passwordsent"])){ echo "succsessfulsent"; } ?>"><?php if(isset($_SESSION["wrongemailhcangepass"])){
            echo $_SESSION["wrongemailhcangepass"];
            unset($_SESSION["wrongemailhcangepass"]);
} 
            else if(isset($_SESSION["passwordsent"])){ echo $_SESSION["passwordsent"];
            unset($_SESSION["passwordsent"]); }   ?></span>
            <form id="fpf" action="forgotpassword.php" method="post">
                <input id="fp" type="email" name="fp" placeholder="Enter e-mail adress">
                <button>SEND</button>
            </form>
            <span id="canselmsf">Cansel</span>
        </div>
    </div>
   <?php if($logedvisitor){ ?>
   <div id="delprof" class="deletecover" <?php if(isset($_SESSION["wdpp"])){
    echo "style='display:block'";} ?> >
       <div class="cf af">
       <span class="deletetext">YOU WHANT TO DELETE YOUR PROFILE?</span>
       <span class="error dps"><?php if(isset($_SESSION["wdpp"])){
    echo $_SESSION["wdpp"];
    unset($_SESSION["wdpp"]); }?></span>
       <div class="cf1">
            <form action="deleteprof.php" method="post" id="dpsw">
                <input type="password" id="passworddps" name="password" placeholder="Enter you'r password">
                <button>OK</button>
            </form>
        </div>
        <div class="cfno">
            <span id="cansdp" class="no">CANSEL</s4pan>
        </div>
       </div> 
    </div>
    <?php } ?>
    <nav>
        <h2>
           <a href="."></a>
           DevelopersWeb.net
        </h2>
         <?php 
        
            if($logedvisitor){ ?>
            
                <ul id="loginul">
                   <li id="profil"><a><?php echo $cookiename." ".$cookiesecondname; ?></a></li>
                   <li id="logoutbutton">
                        <form action="out.php" methoth="post">
                            <button>SIGN OUT</button>
                        </form>
                       <span id="navline"></span>
                   </li>
                </ul> 
                <div id="menupersone">
                    <div id="menuimage" style="background:url(<?php echo $menuimagedest; ?>); background-position:center; background-size:cover;"></div>
                    <div id="menuinfo">
                        <span id="menuname"><?php echo $cookiename." ".$cookiesecondname; ?>
                           
                        </span>
                        <span id="menumail"><?php echo $coockieemail; ?></span>
                        <span id="tomypage">
                            <a href="<?php echo $foldername; ?>">TO MY PAGE</a>
                        </span>
                    </div>
                    <div id="menufooter">
                        <span id="deleteprofile">DELETE PROFILE</span>
                    </div>
                </div>
                
                
        <?php  } 
       else{ ?>
              
                <ul id="loguot">
                    <li id="regbutton">REGISTRATION</li>
                    <li id="logbutton">SIGN IN
                       <span id="navline"></span>
                    </li>
                </ul>
    <?php   }
    ?>
    <div <?php
    if($counter){
    echo "style='right:0'";
        
}?> id="registration">
           <span class="head">REGISTRATION</span>
           <span class="error r"><?php if($counter){
    echo "$emailex";
    unset($_SESSION["emailexist"]);
    
    $counter = 0;
} ?>
           </span>
            <form action="reg.php" method="post">
                <label for="name" id="lname"></label>
                <input type="text" name="name" id="name" placeholder="NAME">
                <label for="secondname" id="lsecondname"></label>
                <input type="text" name="secondname" id="secondname" placeholder="LAST NAME">
                <label for="email" id="lemail"></label>
                <input type="email" name="email" id="email" placeholder="E-MAIL">
                <label for="password" id="lpassword"></label>
                <input type="password" name="password" id="password" placeholder="PASSSWORD">
                <label for="confirmpassword" id="lconfirmpassword"></label>
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="CONFIRM PASSWORD">
                <button id="regist">REGISTRATE</button>
            </form>
        </div>
        <div id="login" <?php
    if($counterlog){
    echo "style='right:0'";
        
}?>>
           <span class="head">SIGN IN</span>
           <span class="error l">
               <?php 
               if($counterlog){
                   echo "$errorlog";
                   if(isset($_SESSION["wrongemail"])){
                        unset($_SESSION["wrongemail"]);
                   }
                   if(isset($_SESSION["wrongpass"])){
                        unset($_SESSION["wrongpass"]);
                   }
                   
                   $counterlog = 0;
               }
               ?>
           </span>
            <form action="login.php" method="post">
                <label for="logemail" id="loginlemail"></label>
                <input type="email" name="logemail" id="logemail" placeholder="E-MAIL">
                <label for="logpassword" id="loginlpassword"></label>
                <input type="password" name="logpassword" id="logpassword" placeholder="PASSSWORD">
                <button id="logi">LOGIN</button>
                <span id="forgotpassword">Forgot your password?</span>
            </form>
        </div>
    </nav>
    <header id="mainheader">
       <div id="cloudcov">
           <div id="cloud"></div>
       </div>
        <h1>WEB DEVELOPERS PORTFOLIO PAGE</h1>
         <div class="maintextcover">
            
            
            <p>
                Web portfolio page for web developers and free online storage for you'r web projects, get your personal site and use it for your own purposes<br>
                Also a place for potential employers who are looking for a web programmer for employment
                
            </p>
            
            
        </div>
    </header>
    
    <section id="users">
        <div id="userscover">
            <?php
    
            
    $checkname= mysqli_query($dbcon,"select name,secondname,avatardest,avatarstatus  from users GROUP BY id ");
    if($checkname){
        while($nameexist = $checkname->fetch_assoc()){
            if(isset($nameexist['name'])){
                $name = $nameexist['name'];
                $secondname = $nameexist['secondname'];
                $personalimage = $nameexist['avatardest'];
                $personalimagestatus = $nameexist['avatarstatus'];
            }
            
            if(isset($name) && isset($secondname)){
                $namelower = strtolower($name);
                $secondnamelower =  strtolower($secondname);
                $foldername = $namelower.$secondnamelower;
                if($personalimagestatus=="0")
                    $imagedest = "image/userimage.png";
                else
                    $imagedest = $foldername."/".$personalimage;
                echo"   
                    <div class='personaluser'>
                       <div class='userhover'><a href='$foldername'></a></div>
                        <div style='background:url($imagedest); background-size:cover; background-position:center;' class='userpic'></div>
                        <a href='$foldername' class='username'>
                        $name $secondname
                        </a>
                    </div>";
            }
            
        }
    
    }
    ?>
        </div>
        
        
    </section>
    
    <footer>
        <div id="footercont">
            <span>&copy;2016 by - 
                <a href="http://bredis.org">Bredis</a>
            </span>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>  
    <script src="main.js"></script>
    <script src="forms.js"></script>
	<img src="image/searchpic.JPG" style="width:0; height:0; opacity:0; position:absolute; z-index:-100;">
</body>
</html>