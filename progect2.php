<?php 

include_once "dbcon.php";
$email = $_COOKIE["email"];
$userfolder = $_COOKIE["folder"];

$progectnumber = $_POST["prognameval"];

$res = mysqli_query($dbcon,"select prog".$progectnumber."status from users where email = '$email'");

while($row = $res->fetch_assoc()){
    
    $ps = $row["prog".$progectnumber."status"];
}



if($ps){
	
	
    $res = mysqli_query($dbcon,"select prog".$progectnumber." from users where email = '$email'");
    while($row = $res->fetch_assoc()){
    
        $progname = $row["prog".$progectnumber];
    }
    
    $index =  strpos($progname,"/");
    
    if($index){
        $progname = substr($progname, 0, $index);
    }
    
    $dir = $userfolder."/".$progname;
    
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
    $res = mysqli_query($dbcon,"update users set prog".$progectnumber." = '', prog".$progectnumber."status = 0,
    prog".$progectnumber."imgdest ='',progectname".$progectnumber." = 'PROJECT' where email = '$email'");
    header("location:$userfolder");
}
else{
    
    $pnames = mysqli_query($dbcon,"select progectname1,progectname2,progectname3,progectname4 from users where email = '$email';");
    while($row = mysqli_fetch_assoc($pnames)){
        $p1 = strtolower($row["progectname1"]);
        $p2 = strtolower($row["progectname2"]);
        $p3 = strtolower($row["progectname3"]);
        $p4 = strtolower($row["progectname4"]);
    }
    
    $pArr = array($p1,$p2,$p3,$p4);
    
    
    
    
    
    
    $progectname = $_POST["progectname"];
    
    $pN = $progectname;
    
    $tN = strtolower($pN);
    
    
    
    for($i = 0; $i < 4; $i++){
        if($tN == $pArr[$i]){
            
            session_start();
            
            $_SESSION["samepname".$progectnumber] = "THIS PROJECT NAME EXIST ALREADY CHOOSE ANOTHER";
            
            header("location:$userfolder");
            
            die();
        
        }
    }
    
    
    $index =  strpos($progectname," ");
    
    if($index){
        $progectname = str_replace(" ", "",$progectname);
    }

    $uploaddir = "$userfolder/$progectname/";

    $prog2imagename = $_FILES['image']['name'];
    
    $index =  strpos($prog2imagename," ");
    
    if($index){
        $prog2imagename = str_replace(" ", "",$prog2imagename);
    }
    
    $_FILES['image']['name'] = $prog2imagename;

    $imagedestination = "$userfolder/$progectname/progectimage/$prog2imagename";

    $imagefolder = "$userfolder/$progectname/progectimage/";

    @mkdir("$uploaddir", 0777);
    @mkdir("$userfolder/$progectname/progectimage/", 0777);


    copy($_FILES['progectfile']['tmp_name'],"$uploaddir".basename($_FILES['progectfile']['name']));

    copy($_FILES['image']['tmp_name'],"$imagefolder".basename($_FILES['image']['name']));
    
    $tempfilename = $_FILES['progectfile']['name'];

    $zip = new ZipArchive;
    $zip->open("$uploaddir/$tempfilename");
    $zip->extractTo("$uploaddir");
    $zip->close();
    
    
    unlink("$uploaddir/$tempfilename");
    
    $dir = scandir($uploaddir);
    
    if(count($dir) == 4){
        
        for($i = 2; $i < count($dir); $i++){
           $check = strpos($dir[$i],".html");
            
           if($check == 0 && $dir[$i] !="progectimage"){
               
               $index =  strpos($dir[$i]," ");
    
                if($index){
                    $newDirName = str_replace(" ", "",$dir[$i]);
                    
                    rename("$userfolder/$progectname/$dir[$i]","$userfolder/$progectname/$newDirName");
                    $progectname2 = "$progectname/$newDirName/";
                }
                else{
                    $progectname2 = "$progectname/$dir[$i]/";
                }
            }
        }
    }
    

    function myscan(&$arr, $dir){
        $cont=glob($dir."/*");
        foreach($cont as $file){
            if (is_dir($file)){
                myscan($arr, $file);
            }
            else{
                $file = strtolower($file);
                if (strpos($file, "php")!==false){
                    $arr[]=$file;
                }
            }
        }
    }
 
    $arr=array();
    myscan($arr, $uploaddir);
 
    
    if (!empty($arr)){
        
    session_start();
    $_SESSION["phpfilefound".$progectnumber] = "YOU CAN'T UPLOAD PHP FILE EXTENTION";
    $dir = $uploaddir;
    
    
    
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
    $res = mysqli_query($dbcon,"update users set prog".$progectnumber." = '', prog".$progectnumber."status = 0,
    prog".$progectnumber."imgdest ='',progectname".$progectnumber." = 'PROJECT' where email = '$email'");
    header("location:$userfolder");
        
    }
    else{
    $imagedestination = "$progectname/progectimage/$prog2imagename";
    if(isset($progectname2)){
    $progectname = $progectname2;
    }

    $checkname  = mysqli_query($dbcon,"update users set prog".$progectnumber." = '$progectname', prog".$progectnumber."status = 1,
    prog".$progectnumber."imgdest ='$imagedestination', progectname".$progectnumber." = '$pN' where email = '$email'");
    
    header("location:$userfolder");
    }

}

?>