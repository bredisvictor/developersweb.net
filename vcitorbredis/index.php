
    <?php 
        $mypassword="cb84bc74f32b5d18f8ae59585d752a5f";
        $myname="Vcitor";
        $mysecondname="Bredis";
        $email="thevictor85@gmail.com";
        $id = "1";
?>

<?php

    include_once "../dbcon.php";

    include_once "../menuimage.php";

    include_once "../class.php";

    $user = new User ($id);
    
    $mypassword = $user->ppassword;
	
	$mailbackfolder = strtolower($myname).strtolower($mysecondname);

    session_start();
    $_SESSION["emailsend"] = $email;
    $_SESSION["myname"] = $myname;
	$_SESSION["mailbackfolder"] = $mailbackfolder;
    if(isset($_SESSION["passwordchangedon"])){
        $password = $_SESSION["passwordchangedon"];
        unset($_SESSION["passwordchangedon"]);
    }

    $cookies = 0;
    if(isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
        $coockieemail = $_COOKIE["email"];
        $cookiepassword = $_COOKIE["password"];
        $cookiename = $_COOKIE["name"];
        $cookiesecondname = $_COOKIE["secondname"];
        $foldername = $_COOKIE["folder"];
        $cookies = 1;
        if($email == $coockieemail && $mypassword == $cookiepassword){
            $loged = 1;
            $myfolder = "";
        }
        else{
            $loged = 0;
            $myfolder = "../".$foldername;
        }
    }
    
 

if($cookies){
    $logedvisitor = 1;
    
}
else{
    $logedvisitor = 0;
    $loged = 0;
}

                
    
    if($user->prog1status)
        $prog1image = $user->progect1imagedest;
    else
        $prog1image = "../image/progectsbackground.jpg";

    if($user->prog2status)
        $prog2image = $user->progect2imagedest;
    else
        $prog2image = "../image/progectsbackground.jpg";

    if($user->prog3status)
        $prog3image = $user->progect3imagedest;
    else
        $prog3image = "../image/progectsbackground.jpg";

    if($user->prog4status)
        $prog4image = $user->progect4imagedest;
    else
        $prog4image = "../image/progectsbackground.jpg";

    
    if($user->personalimagestatus)
        $imagedest = $user->image;
    else
        $imagedest = "../image/userimage.png";

    if($user->backgroundstatus)
        $backdest = $user->backgrounddest;
    else 
        $backdest = "../image/mainbackground.jpg";
?>




<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Developers Web</title>
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="../personal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
   <div id="preloadcover">
       <div id="prelodinside">
           <div id="preloadimage"></div>
           <span id="preload">UPLOADING</span><br>
           <span id="pretext">Please don't close this tab, uploading can take few minutes</span>
       </div>
   </div>
   <div id="fpfd">
       <div id="fpfc">
            <span id="fpft">ENTER YOU'R E-MAIL ADDRESS TO SEND NEW PASSWORD</span>
            <form id="fpf" action="../forgotpassword.php" method="post">
                <input id="fp" type="email" name="fp" placeholder="Enter e-mail adress">
                <button>SEND</button>
            </form>
            <span id="canselmsf">Cansel</span>
        </div>
   </div>
   <?php if($loged || $logedvisitor){ ?>
   
        <div id="delprof" class="deletecover">
        <div class="cf af">
        <span class="deletetext">YOU WHANT TO DELETE YOUR PROFILE?</span>
        <span class="error dps"></span>
        <div class="cf1">
            <form action="../deleteprof.php" method="post" id="dpsw">
                <input type="password" id="passworddps" name="password" placeholder="Enter you'r password">
                <button>OK</button>
            </form>
        </div>
        <div class="cfno">
            <span id="cansdp" class="no">CANSEL</s4pan>
        </div>
        </div> 
    </div> 
    
    
    <div id="deletprogect1" class="deletecover">
       <div class="cf">
       <span class="deletetext">DELETE THIS PROJECT?</span>
       <div class="cf1">
            <form action="../progect2.php" method="post">
                <input hidden value="1" name="prognameval">
                <button>YES</button>
            </form>
        </div>
        <div class="cfno">
            <span id="cansd1" class="no">NO</span>
        </div>
       </div> 
    </div>
    
    <div id="deletprogect2" class="deletecover">
       <div class="cf">
       <span class="deletetext">DELETE THIS PROJECT?</span>
       <div class="cf1">
            <form action="../progect2.php" method="post">
                <input hidden value="2" name="prognameval">
                <button>YES</button>
            </form>
        </div>
        <div class="cfno">
            <span id="cansd2" class="no">NO</span>
        </div>
       </div> 
    </div>
    
    <div id="deletprogect3" class="deletecover">
       <div class="cf">
       <span class="deletetext">DELETE THIS PROJECT?</span>
       <div class="cf1">
            <form action="../progect2.php" method="post">
                <input hidden value="3" name="prognameval">
                <button>YES</button>
            </form>
        </div>
        <div class="cfno">
            <span id="cansd3" class="no">NO</span>
        </div>
       </div> 
    </div>
    
    <div id="deletprogect4" class="deletecover">
       <div class="cf">
       <span class="deletetext">DELETE THIS PROJECT?</span>
       <div class="cf1">
            <form action="../progect2.php" method="post">
                <input hidden value="4" name="prognameval">
                <button>YES</button>
            </form>
        </div>
        <div class="cfno">
            <span id="cansd4" class="no">NO</span>
        </div>
       </div> 
    </div>
    <?php } ?>
   <nav>
        <h2>
           <a href="../"></a>
           DevelopersWeb.net
        </h2>
        <?php 
            if($loged || $logedvisitor){
            ?>
                <ul id="loginul">
                   <li id="profil"><a><?php echo $cookiename." ".$cookiesecondname; ?></a></li>
                   <li id="logoutbutton">
                        <form action="../out.php" methoth="post">
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
                            <?php if(!$loged){ ?>
                                <a href="<?php echo "../".$foldername; ?>">TO MY PAGE</a>
                            <?php }
                            else{ ?>
                                <span id="changename"><span id="confic"></span>SETTING</span>
                            <?php } ?>
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
    <?php    }
    ?>
       
    <div id="registration">
           <span class="head">REGISTRATION</span>
           <span class="error r"></span>
            <form action="../reg.php" method="post">
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
        <div id="login">
           <span class="head">SIGN IN</span>
           <span class="error l"></span>
            <form action="../login.php" method="post">
                <label for="logemail" id="loginlemail"></label>
                <input type="email" name="logemail" id="logemail" placeholder="E-MAIL">
                <label for="logpassword" id="loginlpassword"></label>
                <input type="password" name="logpassword" id="logpassword" placeholder="PASSSWORD">
                <button id="logi">LOGIN</button>
                <span id="forgotpassword">Forgot your password?</span>
            </form>
        </div>   
   </nav>
    <header id="headperson" style="background:url(
           <?php echo "$backdest" ?>); background-position:center; background-size:cover; background-repeat:no-repeat; ">
        <?php if($loged){ echo '<div class="changeb"></div><div id="changebdesc">Refresh background image</div>'; } ?>
        
        <h1><?php
            echo $myname." ".$mysecondname;
            ?>
       </h1>
        <div style="background:url(
           <?php echo "$imagedest" ?>); background-position:center; background-size:cover; " id="personalimage">
           <?php if($loged){ echo '<div class="changep"></div><div id="changepdesc">Refresh personal image</div>'; } ?>
        </div>
        <div id="changepersonalphoto">
                
        </div>
        
    </header>
    <section id="aboutmesec">
        <div id="aboutme">
            <?php if($loged){ echo '<div class="changet"></div><div id="changetdesc">Refresh your personal text</div>'; } ?>
            <h2>HELLO MY NAME IS <?php echo $myname." ".$mysecondname?></h2>
            <p><?php
                echo "$user->mytext";
                ?>
            </p>
            
            
        </div>
    </section>
    <section id="skills">
		<span class="headersdesc">PROGRAMMING SKILLS</span>
        <div id="buttoncover">
           <?php if($loged){ echo '<div class="changes"></div><div id="changesdesc">Confirm programing skills</div>'; } ?>
        </div>
        
        
        <div class="skillscover">
            <div class="skillscont">
                <canvas id="can" width="223" height="223"></canvas>
                <div class="text">
                    <span><?php if(isset($user->html)) echo $user->html; ?></span>
                    <span>HTML/CSS</span>
                </div>
            </div>
            <div class="skillscont">
                <canvas id="can2" width="223" height="223"></canvas>
                <div class="text">
                    <span><?php if(isset($user->js)) echo $user->js; ?></span>
                    <span>JS/JQUERY</span>
                </div>
            </div>
            <div class="skillscont">
                <canvas id="can3" width="223" height="223"></canvas>
                <div class="text">
                    <span><?php if(isset($user->php)) echo $user->php; ?></span>
                    <span>PHP/MYSQL</span>
                </div>
            </div>
            <div class="skillscont">
               <canvas id="can4" width="223" height="223"></canvas>
                <div class="text">
                    <span><?php if(isset($user->angular)) echo $user->angular; ?></span>
                    <span>ANGULAR/NODE</span>
                </div>
            </div>
        </div>
        
        
    </section>
    <section id="progects">
		<span class="headersdesc lp23">LAST PROJECTS</span>
        <div id="progectcover">
            
            <div class="progectcolom personaluser">
                <?php if($loged){ echo '<div class="changepr"></div><div class="changeprogdesc">Projects manegment</div>'; } ?>
                <div class="progecthover userhover"><a target="_blank" href="http://developersweb.net"></a></div>
                <div class="progectpic userpic" style="background:url(../image/searchpic.JPG); background-size:cover; background-position:center;"></div>
                <a target="_blank" href="http://developersweb.net" class="progectname username">
                    This Site
                </a>
            </div>
            <div class="progectcolom personaluser">
                <?php if($loged){ echo '<div class="changepr"></div><div class="changeprogdesc">Projects manegment</div>'; } ?>
                <div class="progecthover userhover"><a target="_blank" href="http://bredis.org"></a></div>
                <div class="progectpic userpic" style="background:url(../image/bredis.JPG); background-size:cover; background-position:center;"></div>
                <a target="_blank" href="http://bredis.org" class="progectname username">
                    My Personal Site
                </a>
            </div>
            <div class="progectcolom personaluser">
                <?php if($loged){ echo '<div class="changepr"></div><div class="changeprogdesc">Projects manegment</div>'; } ?>
                <div class="progecthover userhover"><a target="_blank" href="http://bredis.org/works/galleryPlugIn"></a></div>
                <div class="progectpic userpic" style="background:url(../image/pluginimg.jpg); background-size:cover; background-position:center;"></div>
                <a target="_blank" href="http://bredis.org/works/galleryPlugIn" class="progectname username">
                    Gallery Plugin
                </a>
            </div>
            <div class="progectcolom personaluser">
                <?php if($loged){ echo '<div class="changepr"></div><div class="changeprogdesc">Projects manegment</div>'; } ?>
                <div class="progecthover userhover"><a target="_blank" href="http://bredis.org/works/tictactoe"></a></div>
                <div class="progectpic userpic" style="background:url(../image/tigtac.jpg); background-size:cover; background-position:center;"></div>
                <a target="_blank" href="http://bredis.org/works/tictactoe" class="progectname username">
                    Tic-Tac-Toe
                </a>
            </div>
            
        </div>
        
        
    </section>
    <?php if($loged){ ?>
    <section <?php if(isset($_SESSION["phpfilefound1"]) || isset($_SESSION["phpfilefound2"]) || isset($_SESSION["phpfilefound3"]) || isset($_SESSION["phpfilefound4"]) || isset($_SESSION["samepname1"]) || isset($_SESSION["samepname2"]) || isset($_SESSION["samepname3"]) || isset($_SESSION["samepname4"])){echo"style='display:block';";} ?> id="mainforms">
        <div id="formscover">
           <div id="leftbar">
               
               <div id="pimagcover">
                   
                   <div id="lbimg" style="background:url(
           <?php echo "$imagedest" ?>); background-position:center; background-size:cover;" id="personalimage"></div>
                   <span><?php echo $user->nname." ".$user->sname; ?> </span>
               </div>
                <ul id="tabs">
                    <li>PERSONAL INFO</li>
                    <li>MY DESCRIPTION</li>
                    <li>PROGRAMING SKILLS</li>
                    <li>PROJECTS</li>
                    <li>IMAGES</li>
                </ul>
                
                <span id="closepi"> CLOSE</span>
                
            </div>
            <div class="content">
                <span class="infoheader"><span class="barim i1"></span>PERSONAL INFO</span>
                <span class="error myperson"></span>
                <ul id="personalblocks">
                    <li>
                        <span class="propp">NAME:</span>
                        <span class="propdb"><?php echo $user->nname; ?></span>
                        
                    </li>
                    <li>
                        <span class="propp">LAST NAME:</span>
                        <span class="propdb"><?php echo $user->sname; ?></span>
                        
                    </li>
                    <li>
                        <span class="propp">E-MAIL:</span>
                        <span class="propdb maill"><?php echo $coockieemail; ?></span>
                    </li>
                    <li>
                        <span class="propp">PHONE:</span>
                        <span class="propdb"><?php echo $user->phone; ?></span>
                        <form id="phoneform" action="../phonechange.php" class="propf" method="post">
                            <input id="phonenum" type="text" placeholder="Confirm my phone number" name="phone">
                            <button>CONFIRM</button>
                        </form>
                    </li>
                    <li>
                        <span class="propp">ADDRESS:</span>
                        <span class="propdb"><?php echo $user->city; ?></span>
                        <form id="cityform" class="propf" method="post" action="../citychange.php">
                            <input id="cityin" type="text" placeholder="Confirm my city" name="city">
                            <button>CONFIRM</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="content">
                <span class="infoheader"><span class="barim i2"></span>CONFIRM DESCRIPTION</span>
                <span class="error t"></span>
                <p id="description">
                    <?php echo $user->mytext; ?>
                </p>
                <form id="abouttextchange" action="../abouttextchange.php" method="post">
                    <textarea id="mytextfield" placeholder="Enter new description" name="text"></textarea>
                    <button class="conf">CONFIRM</button>
                </form>
            
            </div>
            <div class="content">
                <span class="infoheader"><span class="barim i3"></span>CONFIRM PROGRAMING SKILLS</span>
                <p id="skillsdesc">CONFIRM YOUR PROGRAMMING SKILLS BY SCALE FROM 0 TO 100</p>
                <span class="error sk"></span>
                <form id="skillschange" action="../skills.php" method="post" >
                    <label class="l1" for="html1">HTML/CSS</label>
                    <input placeholder="Enter the number" id="html1" type="text" name="html">
                    <label class="l1" for="js1">JS/JQUERY</label>
                    <input placeholder="Enter the number" id="js1" type="text" name="js">
                    <label class="l1" for="php1">PHP/MYSQL</label>
                    <input placeholder="Enter the number" id="php1" type="text" name="php">
                    <label class="l1" for="angular1">ANGULAN/NODE</label>
                    <input placeholder="Enter the number" id="angular1" type="text" name="angular">
                    <button class="conf">CONFIRM</button>
                </form>
            </div>
            <div class="content <?php if(isset($_SESSION["phpfilefound1"]) || isset($_SESSION["phpfilefound2"])|| isset($_SESSION["phpfilefound3"])|| isset($_SESSION["phpfilefound4"]) || isset($_SESSION["samepname1"]) || isset($_SESSION["samepname2"]) || isset($_SESSION["samepname3"]) || isset($_SESSION["samepname4"])){echo"active";} ?>">
                <span class="infoheader"><span class="barim i4"></span>PROJECTS MANAGEMENT</span>
                <ul id="tabs1">
                    <li <?php if(isset($_SESSION["phpfilefound1"]) || isset($_SESSION["samepname1"]) || !isset($_SESSION["phpfilefound2"]) && !isset($_SESSION["phpfilefound3"]) && !isset($_SESSION["phpfilefound4"]) &&  !isset($_SESSION["samepname2"]) && !isset($_SESSION["samepname3"]) && !isset($_SESSION["samepname4"])){echo"class='ac'";} ?> >PROJECT #1</li
                    ><li <?php if(isset($_SESSION["phpfilefound2"]) || isset($_SESSION["samepname2"])){echo"class='ac'";} ?>>PROJECT #2</li
                    ><li <?php if(isset($_SESSION["phpfilefound3"]) || isset($_SESSION["samepname3"])){echo"class='ac'";} ?>>PROJECT #3</li
                    ><li <?php if(isset($_SESSION["phpfilefound4"]) || isset($_SESSION["samepname4"])){echo"class='ac'";} ?>>PROJECT #4</li>
                </ul>
                <?php if(!$user->prog1status){  ?>
                <div class="content1 <?php if(isset($_SESSION["phpfilefound1"]) || isset($_SESSION["samepname1"]) || !isset($_SESSION["phpfilefound2"]) && !isset($_SESSION["phpfilefound3"]) && !isset($_SESSION["phpfilefound4"])){echo"active1";} ?>">
                   <span class="error ep1"><?php 
                                        if(isset($_SESSION["phpfilefound1"])){
                                            echo $_SESSION["phpfilefound1"];
                                            unset($_SESSION["phpfilefound1"]);                   
                                        }
                       else if(isset($_SESSION["samepname1"])){
                           echo $_SESSION["samepname1"];
                           unset($_SESSION["samepname1"]);
                       }
                       ?></span>
				   <span class="fileval1 f1">File not selected</span>
				   <span class="fileval2 f2">File not selected</span>
                    <form class="myprogects" id="prog1upload" action=../progect2.php method=post enctype=multipart/form-data >
                        <label for="progname1">PROJECT NAME:</label>
                        <input id="progname1" placeholder="Enter project name" type="text" name="progectname">
                        <label for="progectimage1">SELECT IMAGE</label>
                        <input id="progectimage1" type=file name="image">
                        <label for="progectfile1">SELECT ZIP FILE</label>
                        <input  id="progectfile1" type=file name="progectfile">
                        <button>UPLOAD</button>
                        <input hidden value="1" name="prognameval">
                    </form>
                    <span class="infofooter">
                        <span class="inst">INSTALLING INSTRUCTIONS</span><br>
                        <span>1. Your project have to be compressed by .zip file extension</span><br>
                        <span>2. You can't uploud .php file extension</span><br>
                        <span>3. Main html file in project folder should be named only "index.html" </span><br>
                        <span>4. Maximum project size 15MB</span>
                    </span>
                </div>
                <?php } 
                else{ ?>
                <div class="content1 deleteprog <?php if(!isset($_SESSION["phpfilefound1"]) && !isset($_SESSION["phpfilefound2"]) && !isset($_SESSION["phpfilefound3"]) && !isset($_SESSION["phpfilefound4"]) && !isset($_SESSION["samepname1"]) && !isset($_SESSION["samepname2"]) && !isset($_SESSION["samepname3"]) && !isset($_SESSION["samepname4"])){ echo"active1";
                } ?>" >
                    <span class="delpn"><?php echo $user->progectName1; ?> </span>
                    <div class="delpi" style="background:url(
           <?php echo "$prog1image" ?>); background-position:center; background-size:cover;"></div>
                    <span id="delp1" class="del">DELETE</span>
                </div>
                <?php } ?>
                <?php if(!$user->prog2status){  ?>
                <div  class="content1 <?php if(isset($_SESSION["phpfilefound2"]) || isset($_SESSION["samepname2"])){echo"active1";} ?>">
                   <span class="error ep2"><?php if(isset($_SESSION["phpfilefound2"])){echo $_SESSION["phpfilefound2"];
                     unset($_SESSION["phpfilefound2"]);                                                                
                    }
                       else if(isset($_SESSION["samepname2"])){
                           echo $_SESSION["samepname2"];
                           unset($_SESSION["samepname2"]);
                       } ?></span>
				   <span class="fileval1 f3">File not selected</span>
				   <span class="fileval2 f4">File not selected</span>
                    <form class="myprogects" id="prog2upload" action=../progect2.php method=post enctype=multipart/form-data >
                        <label for="progname2">PROJECT NAME:</label>
                        <input id="progname2" placeholder="Enter project name" type="text" name="progectname">
                        <label for="progectimage2">SELECT IMAGE</label>
                        <input id="progectimage2" type=file name="image">
                        <label for="progectfile2">SELECT ZIP FILE</label>
                        <input  id="progectfile2" type=file name="progectfile">
                        <button>UPLOAD</button>
                        <input hidden value="2" name="prognameval">
                    </form>
                    <span class="infofooter">
                        <span class="inst">INSTALLING INSTRUCTIONS</span><br>
                        <span>1. Your project have to be compressed by .zip file extension</span><br>
                        <span>2. You can't uploud .php file extension</span><br>
                        <span>3. Main html file in project folder should be named only "index.html" </span><br>
                        <span>4. Maximum project size 15MB</span>
                    </span>
                </div>
                <?php } 
                else{ ?>
                <div class="content1 deleteprog">
                    <span class="delpn"><?php echo $user->progectName2; ?></span>
                    <div class="delpi" style="background:url(
           <?php echo "$prog2image" ?>); background-position:center; background-size:cover;"></div>
                    <span id="delp2" class="del">DELETE</span>
                </div>
                <?php } ?>
                <?php if(!$user->prog3status){  ?>
                <div  class="content1 <?php if(isset($_SESSION["phpfilefound3"]) || isset($_SESSION["samepname3"])){echo"active1";} ?>">
                   <span class="error ep3"><?php if(isset($_SESSION["phpfilefound3"])){echo $_SESSION["phpfilefound3"];
                     unset($_SESSION["phpfilefound3"]);                                                                
                    }
                    else if(isset($_SESSION["samepname3"])){
                           echo $_SESSION["samepname3"];
                           unset($_SESSION["samepname3"]);
                       }
                       ?></span>
				   <span class="fileval1 f5">File not selected</span>
				   <span class="fileval2 f6">File not selected</span>
                    <form class="myprogects" id="prog3upload" action=../progect2.php method=post enctype=multipart/form-data >
                        <label for="progname3">PROJECT NAME:</label>
                        <input id="progname3" placeholder="Enter project name" type="text" name="progectname">
                        <label for="progectimage3">SELECT IMAGE</label>
                        <input id="progectimage3" type=file name="image">
                        <label for="progectfile3">SELECT ZIP FILE</label>
                        <input  id="progectfile3" type=file name="progectfile">
                        <button>UPLOAD</button>
                        <input hidden value="3" name="prognameval">
                    </form>
                    <span class="infofooter">
                        <span class="inst">INSTALLING INSTRUCTIONS</span><br>
                        <span>1. Your project have to be compressed by .zip file extension</span><br>
                        <span>2. You can't uploud .php file extension</span><br>
                        <span>3. Main html file in project folder should be named only "index.html" </span><br>
                        <span>4. Maximum project size 15MB</span>
                    </span>
                </div>
                <?php } 
                else{ ?>
                <div class="content1 deleteprog">
                    <span class="delpn"><?php echo $user->progectName3; ?></span>
                    <div class="delpi" style="background:url(
           <?php echo "$prog3image" ?>); background-position:center; background-size:cover;"></div>
                    <span id="delp3" class="del">DELETE</span>
                </div>
                <?php } ?>
                <?php if(!$user->prog4status){  ?>
                <div  class="content1 <?php if(isset($_SESSION["phpfilefound4"]) || isset($_SESSION["samepname4"])){echo"active1";} ?>">
                   <span class="error ep4"><?php if(isset($_SESSION["phpfilefound4"])){echo $_SESSION["phpfilefound4"];
                     unset($_SESSION["phpfilefound4"]);                                                                
                    }
                    else if(isset($_SESSION["samepname4"])){
                           echo $_SESSION["samepname4"];
                           unset($_SESSION["samepname4"]);
                       }   
                       ?></span>
				   <span class="fileval1 f7">File not selected</span>
				   <span class="fileval2 f8">File not selected</span>
                    <form class="myprogects" id="prog4upload" action=../progect2.php method=post enctype=multipart/form-data >
                        <label for="progname4">PROJECT NAME:</label>
                        <input id="progname4" placeholder="Enter project name" type="text" name="progectname">
                        <label for="progectimage4">SELECT IMAGE</label>
                        <input id="progectimage4" type=file name="image">
                        <label for="progectfile4">SELECT ZIP FILE</label>
                        <input  id="progectfile4" type=file name="progectfile">
                        <button>UPLOAD</button>
                        <input hidden value="4" name="prognameval">
                    </form>
                    <span class="infofooter">
                        <span class="inst">INSTALLING INSTRUCTIONS</span><br>
                        <span>1. Your project have to be compressed by .zip file extension</span><br>
                        <span>2. You can't uploud .php file extension</span><br>
                        <span>3. Main html file in project folder should be named only "index.html" </span><br>
                        <span>4. Maximum project size 15MB</span>
                    </span>
                </div>
                <?php } 
                else{ ?>
                <div class="content1 deleteprog">
                    <span class="delpn"><?php echo $user->progectName4; ?></span>
                    <div class="delpi" style="background:url(
           <?php echo "$prog4image" ?>); background-position:center; background-size:cover;"></div>
                    <span id="delp4" class="del">DELETE</span>
                </div>
                <?php } ?>
                
            </div>
            <div class="content">
                <span class="infoheader"><span class="barim i5"></span>IMAGES</span>
                <span class="error pier"></span>
				<span class="fileval1 f9">File not selected</span>
				<span class="fileval2 f10">File not selected</span>
                <div id="imagescover">
                    <div class="imagecovinside">
                        <span class="mypic" style="background:url(
           <?php echo "$backdest" ?>); background-position:center; background-size:cover;"><span>BACKGROUND IMAGE</span></span>
                        <form id="backchange" action="../backgroundimage.php" method="post" enctype=multipart/form-data>
                            <label class="imglabel" for="imageinput">SELECT IMAGE</label>
                            <input id="imageinput" type="file" name="backgroundimage">
                            <button>UPLOAD</button>
                        </form>
                    </div>
                    <div class="imagecovinside">
                        <span class="mypic" style="background:url(
           <?php echo "$imagedest" ?>); background-position:center; background-size:cover;"><span>PERSONAL PHOTO</span></span>
                        <form id="personalfchange" action="../personalimage.php" method="post" enctype=multipart/form-data>
                            <label class="imglabel" for="imageinput2">SELECT IMAGE</label>
                            <input id="imageinput2" type="file" name="personalimage">
                            <button>UPLOAD</button>
                        </form>
                    </div>
                </div>
                <span id="infofooter">Every image that you uplpad on this site have to be not more then 1MB and only in JPEG</span>
            </div>
        </div>
    </section>
    <?php } ?>
    <section id="contacts">
        <span class="headersdesc foo">CONTACTS</span>
        <div id="mycontinf">
            <div id="contauter">
                <div class="icotext"><span class="cicons e1"></span><span class="tc"><?php echo $email; ?></span></div>
                <div class="icotext"><span class="cicons e2"></span><span class="tc"><?php echo $user->phone; ?></span></div>
                <div class="icotext"><span class="cicons e3"></span><span class="tc"><?php echo $user->city; ?></span></div>
            </div>
            <?php if(isset($_SESSION["sentsuccessful"])){?>
            <script>
                $(function(){
                var cont = $("#contacts").offset().top;
                $('html,body').scrollTop(cont);
                    
                $(".headersdesc").eq(2).css({"margin-top":"0",
                                       "opacity":"1"});
                $("#mycontinf").css({"margin-top":"0",
                                       "opacity":"1"});
                q3 = true;
                    
                });
            </script>
            <?php } ?>
			<span class="error con <?php if(isset($_SESSION["sentsuccessful"])){ echo "succsessfulsent2";} ?>"><?php if(isset($_SESSION["sentsuccessful"])){ echo $_SESSION["sentsuccessful"]; unset($_SESSION["sentsuccessful"]);} ?></span>
            <form action="../sendemail.php" id="contactforms" method=post>
                <input id="contname" name="name" placeholder="Name" type="text">
				<textarea id="contmess" name="message" placeholder="Message"></textarea>
                <input id="contemail" name="email" placeholder="E-mail address" type="text">
                <input id="contsub" name="subject" placeholder="Subject" type="text">
                <button>SEND</button>
                <input type="hidden" name="sendtophpemail" value="<?php echo $email; ?>">
                <input type="hidden" name="sendtophpmyname" value="<?php echo $myname; ?>">
                <input type="hidden" name="sendtophpmailbackfolder" value="<?php echo $mailbackfolder; ?>">
            </form>
        </div>
    </section>
    <footer>
        <div id="footercont">
                    <span>&copy;2016 by - <a href="http://bredis.org">Bredis</a></span>
                </div>
    </footer>
    <script src="../canvas.js"></script>
    <script>
        var canvas = document.getElementById('can');
        var context = canvas.getContext('2d');
        var x1 = canvas.width / 2;
        var y1 = canvas.height / 2;
        var radius1 = 85;
        var startAngle1 = (2 * Math.PI) * 3/4;
        var endAngle1 = startAngle1 + (2 * Math.PI) / 100*<?php if(isset($user->html)) echo $user->html; ?>;
        var counterClockwise1 = false;

        context.beginPath();
        context.arc(x1, y1, radius1, startAngle1, endAngle1, counterClockwise1);
        context.lineWidth = 10;

      
        context.strokeStyle = '#189BFA';
        context.stroke(); 
        
        var canvas = document.getElementById('can2');
        var context = canvas.getContext('2d');
        var x1 = canvas.width / 2;
        var y1 = canvas.height / 2;
        var radius1 = 85;
        var startAngle1 = (2 * Math.PI) * 3/4;
        var endAngle1 = startAngle1 + (2 * Math.PI) / 100*<?php if(isset($user->js)) echo $user->js; ?>;
        var counterClockwise1 = false;

        context.beginPath();
        context.arc(x1, y1, radius1, startAngle1, endAngle1, counterClockwise1);
        context.lineWidth = 10;

      
        context.strokeStyle = '#189BFA';
        context.stroke(); 
        
        var canvas = document.getElementById('can3');
        var context = canvas.getContext('2d');
        var x1 = canvas.width / 2;
        var y1 = canvas.height / 2;
        var radius1 = 85;
        var startAngle1 = (2 * Math.PI) * 3/4;
        var endAngle1 = startAngle1 + (2 * Math.PI) / 100*<?php if(isset($user->php)) echo $user->php; ?>;
        var counterClockwise1 = false;

        context.beginPath();
        context.arc(x1, y1, radius1, startAngle1, endAngle1, counterClockwise1);
        context.lineWidth = 10;

      
        context.strokeStyle = '#189BFA';
        context.stroke(); 
        
        var canvas = document.getElementById('can4');
        var context = canvas.getContext('2d');
        var x1 = canvas.width / 2;
        var y1 = canvas.height / 2;
        var radius1 = 85;
        var startAngle1 = (2 * Math.PI) * 3/4;
        var endAngle1 = startAngle1 + (2 * Math.PI) / 100*<?php if(isset($user->angular)) echo $user->angular; ?>;
        var counterClockwise1 = false;

        context.beginPath();
        context.arc(x1, y1, radius1, startAngle1, endAngle1, counterClockwise1);
        context.lineWidth = 10;

      
        context.strokeStyle = '#189BFA';
        context.stroke(); 
        
        
    
    
    
  </script>
  <script src="../main.js"></script>
  <script src="../personal.js"></script>
  <script src="../forms.js"></script>
</body>
</html>
