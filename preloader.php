<?php 

echo '<!DOCTYPE html>
<html>
    <head>
        <title>WAIT PLEASE</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                width:100%;
                height: 100%;
            }
            #preloader{
                width: 250px;
                height: 250px;
                position: absolute;
                top:0;
                bottom:0;
                left:0;
                right:0;
                margin:auto;
                background: url(image/preloader.gif);
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <body>
        <div id="preloader"></div>
    </body>
</html>';

?>