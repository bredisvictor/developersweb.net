$(function(){
    var q1 = false;
    var q2 = false;
    var q3 = false;
    
    
    $(document).scroll(function(){
        
         var scrolltop = (document.body.scrollTop || document.documentElement.scrollTop);
         var clientW = (document.body.clientWidth || document.documentElement.clientWidth);
        
        var screenHeight = (document.body.clientHeight || document.documentElement.clientHeight);
        var aboutFirst = ($(".headersdesc").eq(0).offset().top) - screenHeight + 250;
        var aboutSecond = ($(".headersdesc").eq(1).offset().top) - screenHeight + 250;
        var aboutThirth = ($(".headersdesc").eq(2).offset().top) - screenHeight +250;
       
        if(scrolltop>aboutFirst&&!q1){
           $(".headersdesc").eq(0).animate({"margin-top":"0",
                                       "opacity":"1"},700);
            $(".skillscover").animate({"margin-top":"0",
                                       "opacity":"1"},700);
            q1 = true;
        }
        if(scrolltop>aboutSecond&&!q2){
            $(".headersdesc").eq(1).animate({"margin-top":"0",
                                       "opacity":"1"},700);
            $("#progectcover").animate({"margin-top":"0",
                                       "opacity":"1"},700);
            
            q2 = true;
         }
        
        if(scrolltop>aboutThirth&&!q3){
            $(".headersdesc").eq(2).animate({"margin-top":"0",
                                       "opacity":"1"},700);
            $("#mycontinf").animate({"margin-top":"0",
                                       "opacity":"1"},700);
            
            q3 = true;
         }
        
         if(clientW>1000 && screen.width>1000 ){
                var scrol = (document.body.scrollTop || document.documentElement.scrollTop)-900;
                var scrol2 = (document.body.scrollTop || document.documentElement.scrollTop)-2200;
                
                $("#skills").css("background-position","0 "+scrol/3+"px");
                $("#contacts").css("background-position","0 "+scrol2/3+"px");
            }
        
        
    });
    
    $(window).resize(function(){
        $("#skills").css("background-position","center");
        $("#contacts").css("background-position","center");
    });
    
    var gred = 0;
    
    var setGlob;
    
    var conuterIm = true;
    
    function iconwhile(){
        
        gred -= 360;
        
        $("#confic").css("transform","rotate("+gred+"deg)");
        
        setGlob = setTimeout(iconwhile,2000);
        
    }
    
    
    $("#profil").click(function(){
        
        if(conuterIm){
         iconwhile();
         conuterIm = false;
        }
        else{
            clearTimeout(setGlob);
            conuterIm = true;
        }
        
    });
    
    $(".changeb").mouseover(function(){
        $("#changebdesc").stop().fadeIn(300);
        
    });
    $(".changeb").mouseleave(function(){
        $("#changebdesc").stop().fadeOut(300);
        
    });
    
    $(".changep").mouseover(function(){
        $("#changepdesc").stop().fadeIn(300);
        
    });
    $(".changep").mouseleave(function(){
        $("#changepdesc").stop().fadeOut(300);
        
    });
    
    $(".changet").mouseover(function(){
        $("#changetdesc").stop().fadeIn(300);
        
    });
    $(".changet").mouseleave(function(){
        $("#changetdesc").stop().fadeOut(300);
        
    });
    
    $(".changes").mouseover(function(){
        $("#changesdesc").stop().fadeIn(300);
        
    });
    $(".changes").mouseleave(function(){
        $("#changesdesc").stop().fadeOut(300);
        
    });
    
    
    
    
    
    
    $(".changepr").eq(0).mouseover(function(){
        $(".changeprogdesc").eq(0).stop().fadeIn(300);
        
    });
    $(".changepr").eq(0).mouseleave(function(){
        $(".changeprogdesc").eq(0).stop().fadeOut(300);
        
    });
    $(".changepr").eq(1).mouseover(function(){
        $(".changeprogdesc").eq(1).stop().fadeIn(300);
        
    });
    $(".changepr").eq(1).mouseleave(function(){
        $(".changeprogdesc").eq(1).stop().fadeOut(300);
        
    });
    $(".changepr").eq(2).mouseover(function(){
        $(".changeprogdesc").eq(2).stop().fadeIn(300);
        
    });
    $(".changepr").eq(2).mouseleave(function(){
        $(".changeprogdesc").eq(2).stop().fadeOut(300);
        
    });
    $(".changepr").eq(3).mouseover(function(){
        $(".changeprogdesc").eq(3).stop().fadeIn(300);
        
    });
    $(".changepr").eq(3).mouseleave(function(){
        $(".changeprogdesc").eq(3).stop().fadeOut(300);
        
    });
    
});