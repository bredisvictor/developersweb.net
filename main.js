$(function(){
    var screenHeight = (document.body.clientHeight || document.documentElement.clientHeight);
        
        
    $(window).load(function(){
        
        $("#preloadcoverfirst").css("display","none");
        
        if(screenHeight > 750){
            for(i = 0; i < 4; i++){
                $(".personaluser").eq(i).animate({"margin-top":"10px",
                                       "opacity":"1"},700);
            }
        }
        if(screenHeight > 950){
            setTimeout(function(){
                for(i = 4; i < 8; i++){
                    $(".personaluser").eq(i).animate({"margin-top":"10px",
                                       "opacity":"1"},700);
                }
            },500);
        }
        
        $("#cloudcov").animate({"margin-top":"20px",
                           "opacity":"1"},1000);
    
        $("#mainheader>h1").animate({"margin-left":"0",
                           "opacity":"1"},1000);
    
        $(".maintextcover").animate({"bottom":"70px",
                           "opacity":"1"},1000);
    
        $("#aboutme").animate({"opacity":"1"},1500);
        
         $("#headperson>h1").animate({"opacity":"1",
                                 "top":"0"},1000);
    
        $("#personalimage").css({"transform":"rotate(360deg)",
                            "width":"200px",
                            "height":"200px"});
    
    });
    
    
    var regist = false;
    var log = false;
    $("#regbutton").click(function(){
        if(!regist){
            $("#registration").stop().animate({"right":"0"},500).css("z-index","4");
            $("#login").stop().animate({"right":"-500"},500).css("z-index","4");
            regist = true;
            log = false;
        }
        else{
            $("#registration").stop().animate({"right":"-500"},500).css("z-index","4");
            regist = false;
        }
        
    });
    $("#logbutton").click(function(){
        if(!log){
            $("#login").stop().animate({"right":"0"},500).css("z-index","2");
            $("#registration").stop().animate({"right":"-500"},500).css("z-index","4");
            log = true;
            regist = false;
        }
        else{
            $("#login").stop().animate({"right":"-500"},500).css("z-index","4");
            log = false;
        }
    });
    
    
    
    $(".personaluser").mouseover(function(){
            
            $(this).children(".userhover").css({"opacity":"1"});
            $(this).children(".username").css({"color":"#fff",
                                               "bottom":"88px"});
            $(this).children(".userpic").css("height","100%");
            $(this).children(".changepr").css({"background":"url(../image/progectuploadhover.svg)",
                                           "background-size":"cover",
                                          "background-position":"center"});
            
            
        });
    
    $(".personaluser").mouseleave(function(){
            $(this).children(".userhover").css({"opacity":"0"});
            $(this).children(".username").css({"color":"#888",
                                               "bottom":"0"});
            $(this).children(".userpic").css("height","180px");
            $(this).children(".changepr").css({"background":"url(../image/progectupload.svg)",
                                          "background-size":"cover",
                                          "background-position":"center"});
            
            
        });
    
        var navOut = false;
    
   
    
    $(document).scroll(function(){
        var screenHeight = (document.body.clientHeight || document.documentElement.clientHeight);
        var scrolltop = (document.body.scrollTop || document.documentElement.scrollTop);
        var clientW = (document.body.clientWidth || document.documentElement.clientWidth);
        if(scrolltop>500 && !navOut){
            
            $("header").css({"margin-top":"60px"});
            $("nav").css({"margin-top":"-120px",
                         "position":"fixed",
                         "box-shadow":"0px -3px 10px 0px rgba(50, 50, 50, 0.75)"}).animate({"margin-top":"-60px"},500);
            
            navOut = true;
        }
        else if(scrolltop<500&&navOut){
            $("nav").stop();
            $("header").css({"margin-top":"0"});
            $("nav").css({"margin-top":"0",
                         "position":"inherit",
                         "box-shadow":"0px -3px 10px 0px rgba(50, 50, 50, 0.75)"});
            $("nav").css({"margin-top":"0px",
                         "position":"inherit",
                         "box-shadow":"0"}); 
            navOut = false;
        }
        
        var personalIcon = $(".personaluser");
        var iconSize = $(".personaluser").size(); 
        
        for(i = 0; i < iconSize; i++){
            window["e"+i] = false; 
        }
        for(i = 0; i < iconSize; i++){
            var user = ($(".personaluser").eq(i).offset().top) - screenHeight + 50;
            
            if(scrolltop>user&&!window["e"+i]){
           $(".personaluser").eq(i).animate({"margin-top":"10px",
                                       "opacity":"1"},700);
             window["e"+i] = true;
        }
            
        }
        
        
        
    });
    
   
    
    
    $("#profil>a").click(function(){
        $("#menupersone").toggle(300);
    });
    
   
    
    
    
    $("#deleteprofile").click(function(){
        $("#delprof").fadeIn(300);
        
    });
    $("#cansdp").click(function(){
        $("#delprof").fadeOut(300);
       
    });
    
    $("#tabs li").click(function(){
        $(".content").eq($(this).index()).addClass("active")
                 .siblings().removeClass("active");
    });
    
    $("#tabs1 li").click(function(){
        $(this).addClass("ac").siblings().removeClass("ac");
        $(".content1").eq($(this).index()).addClass("active1")
                 .siblings().removeClass("active1");
    });
    
    
    $("#closepi").click(function(){
        $("#mainforms").fadeToggle(300);
        
    });
    
    $("#changename").click(function(){
        $("#mainforms").fadeToggle(300);
        $(".content").eq(0).addClass("active").siblings().removeClass("active");
        
        });
    
    $(".changet").click(function(){
        $("#mainforms").fadeToggle(300);
        $(".content").eq(1).addClass("active").siblings().removeClass("active");
    });
    $(".changes").click(function(){
        $("#mainforms").fadeToggle(300);
        $(".content").eq(2).addClass("active").siblings().removeClass("active");
    });
    $(".changepr").eq(0).click(function(e){
            $("#mainforms").fadeToggle(300);
            $(".content").eq(3).addClass("active").siblings().removeClass("active");
            $(".content1").eq(0).addClass("active1")
                 .siblings().removeClass("active1");
        $("#tabs1 li").eq(0).addClass("ac").siblings().removeClass("ac");
        
    });
    $(".changepr").eq(1).click(function(e){
            $("#mainforms").fadeToggle(300);
            $(".content").eq(3).addClass("active").siblings().removeClass("active");
            $(".content1").eq(1).addClass("active1")
                 .siblings().removeClass("active1");
        $("#tabs1 li").eq(1).addClass("ac").siblings().removeClass("ac");
        
    });
    $(".changepr").eq(2).click(function(e){
            $("#mainforms").fadeToggle(300);
            $(".content").eq(3).addClass("active").siblings().removeClass("active");
            $(".content1").eq(2).addClass("active1")
                 .siblings().removeClass("active1");
        $("#tabs1 li").eq(2).addClass("ac").siblings().removeClass("ac");
        
    });
    $(".changepr").eq(3).click(function(e){
            $("#mainforms").fadeToggle(300);
            $(".content").eq(3).addClass("active").siblings().removeClass("active");
            $(".content1").eq(3).addClass("active1")
                 .siblings().removeClass("active1");
        $("#tabs1 li").eq(3).addClass("ac").siblings().removeClass("ac");
        
    });
    $(".changeb").click(function(){
        $("#mainforms").fadeToggle(300);
        $(".content").eq(4).addClass("active").siblings().removeClass("active");
    });
    $(".changep").click(function(){
        $("#mainforms").fadeToggle(300);
        $(".content").eq(4).addClass("active").siblings().removeClass("active");
    });
    
    $("#delp1").click(function(){
        $("#deletprogect1").fadeIn(300);
    });
    $("#cansd1").click(function(){
        $("#deletprogect1").fadeOut(300);
    });
    
    $("#delp2").click(function(){
        $("#deletprogect2").fadeIn(300);
    });
    $("#cansd2").click(function(){
        $("#deletprogect2").fadeOut(300);
    });
    
    $("#delp3").click(function(){
        $("#deletprogect3").fadeIn(300);
    });
    $("#cansd3").click(function(){
        $("#deletprogect3").fadeOut(300);
    });
    
    $("#delp4").click(function(){
        $("#deletprogect4").fadeIn(300);
    });
    $("#cansd4").click(function(){
        $("#deletprogect4").fadeOut(300);
    });
    
    $("#forgotpassword").click(function(){
        $("#fpfd").fadeIn(300);
    });
    
    $("#canselmsf").click(function(){
        $("#fpfd").fadeOut(300);
    });
    
    $("#canselmsf2").click(function(){
        $("#confnewpassc").fadeOut(300);
    });
 
    
    
});
