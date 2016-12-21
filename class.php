<?php
    
    class User {
        
        
        var $id, 
            $nname,
            $sname,
            $ppassword,
            $mytext,
            $html,
            $js,
            $php,
            $angular,
            $prog1,
            $prog2,
            $prog3,
            $prog4,
            $image,
            $personalimagestatus,
            $backgrounddest,
            $backgroundstatus,
            $prog1status,
            $progect1imagedest,
            $prog2status,
            $progect2imagedest,
            $prog3status,
            $progect3imagedest,
            $prog4status,
            $progect4imagedest,
            $phone,
            $city,
            $progectName1,
            $progectName2,
            $progectName3,
            $progectName4;
            
            
        
        function __construct( $id = 0 ){
            
            
            global $dbcon;
            
            
            if($id === 0 )
                return;
            
                        
            
            $this->id = $id;
            
            
            $sql = "SELECT * From users WHERE id='$this->id';";
            
            
            
            $result = mysqli_query( $dbcon, $sql );      
            
            
            
            if($row = mysqli_fetch_assoc( $result ))
            {
                $this->nname = $row["name"];
		        $this->sname = $row["secondname"];
                $this->ppassword = $row["password"];
                $this->mytext = $row["abouttext"];
                $this->html = $row["html"];
                $this->js = $row["js"];
                $this->php = $row["php"];
                $this->angular = $row["angular"];
                $this->prog1 = $row["prog1"];
                $this->prog2 = $row["prog2"];
                $this->prog3 = $row["prog3"];
                $this->prog4 = $row["prog4"];
                $this->image = $row["avatardest"];
                $this->personalimagestatus = $row["avatarstatus"];
                $this->backgrounddest = $row["backgrounddest"];
                $this->backgroundstatus = $row["backgroundstatus"];
                $this->prog1status = $row["prog1status"];
                $this->progect1imagedest = $row["prog1imgdest"];
                $this->prog2status = $row["prog2status"];
                $this->progect2imagedest = $row["prog2imgdest"];
                $this->prog3status = $row["prog3status"];
                $this->progect3imagedest = $row["prog3imgdest"];
                $this->prog4status = $row["prog4status"];
                $this->progect4imagedest = $row["prog4imgdest"];
                $this->phone = $row["phone"];
                $this->city = $row["city"];
                $this->progectName1 = $row["progectname1"];
                $this->progectName2 = $row["progectname2"];
                $this->progectName3 = $row["progectname3"];
                $this->progectName4 = $row["progectname4"];
            }
                
        }
        
        
    }

?>