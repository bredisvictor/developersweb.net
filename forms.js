$(function(){
	
	
	function errorR(x){
        $(".r").text(x);
    }
    function errorL(x){
        $(".l").text(x);
    }
    
    $("#contactforms>button").click(function(){
        var name = $("#contname").val().trim();
        var message = $("#contmess").val().trim();
        var email = $("#contemail").val().trim();
        var subject = $("#contsub").val().trim();
        
        if(name.length == 0){
            $(".con").text("ENTER YOUR NAME");
            return false;
        }
        
        if(email.length == 0){
            $(".con").text("ENTER YOUR E-MAIL");
            return false;
        }
        
        if(subject.length == 0){
            $(".con").text("ENTER SUBJECT");
            return false;
        }
        
        if(message.length == 0){
            $(".con").text("ENTER MESSAGE");
            return false;
        }
        if(email.indexOf(".") == -1 || email.indexOf(".") == email.length-1 ||
          email.indexOf("@") == -1 || email.indexOf("@")>email.indexOf(".")){
           $(".con").text("INCORRECT E-MAIL ADDRESS");
            return false;
        }
        
        
    });
    
    $("#regist").click(function(){
        var name = $("#name").val().trim();
        var lastName = $("#secondname").val().trim();
        var email = $("#email").val().trim();
        var password = $("#password").val().trim();
        var confpassword = $("#confirmpassword").val().trim();
        
        
        
        
        if(name.length == 0){
            errorR("ENTER YOUR NAME");
            return false;
        }
        if(name.length > 10){
            errorR("NAME HAVE TO BE NOT MORE THAN 10 LETTERS");
            return false;
        }
        if(lastName.length == 0){
            errorR("ENTER YOUR LAST NAME");
            return false;
        }
        if(lastName.length > 10){
            errorR("LAST NAME HAVE TO BE NOT MORE THAN 10 LETTERS");
            return false;
        }
        if(email.length == 0){
            errorR("ENTER YOUR E-MAIL ADDRESS");
            return false;
        }
        if(email.indexOf(".") == -1 || email.indexOf(".") == email.length-1){
            errorR("INCORRECT E-MAIL ADDRESS");
            return false;
        }
        if(password.length == 0){
            errorR("ENTER YOUR PASSWORD");
            return false;
        }
        if(password.length < 6){
            errorR("PASSWORD HAVE TO BE NOT LESS THEN 6 SYMBOLS");
            return false;
        }
        if(confpassword.length == 0){
            errorR("CONFIRM YOUR PASSWORD");
            return false;
        }
        
        if(password != confpassword){
            errorR("CONFIRM THE SAME PASSWORDS");
            return false;
        }
        
        
    });
    
    $("#logi").click(function(){
        var email = $("#logemail").val().trim(); 
        var password = $("#logpassword").val().trim(); 
             
        if(email.length == 0){
        errorL("ENTER YOUR E-MAIL ADDRESS");
        return false;
        }
        if(email.indexOf(".") == -1 || email.indexOf(".") == email.length-1){
            errorL("INCORRECT E-MAIL ADDRESS");
            return false;
        }
        if(password.length == 0){
            errorL("ENTER YOUR PASSWORD");
            return false;
        }
        
             
    });
    
    
	
	$("#abouttextchange>button").click(function(){
        var text = $("#mytextfield").val().trim();
        
        if(text.length == 0){
        $(".t").text("ENTER SOME TEXT");
        return false;
        }
    });
    
    $("#phoneform>button").click(function(){
        var phone = $("#phonenum").val().trim();
        var simvols = "qwertyuiopasdfghjklzxcvbnm/.@#$%^&*()!-=.,{}[]|\+_";
        var textf =  $(".myperson");
        if(phone.length == 0){
        textf.text("ENTER PHONE NUMBER");
        return false;
        }
        if(phone.length > 15){
        textf.text("PHONE NUMBER HAVE TO BE NOT MORE THEN 15 NUMERALS");
        return false;
        }
        
        for(var i = 0; i < phone.length; i++){
                    
            simvols.indexOf(phone.charAt(i));
            if(simvols.indexOf(phone.charAt(i))!=-1){
                textf.text("ENTER A NUMBER");
                    return false;
                    break;
                        
            }
        }
    });
    
    $("#cityform>button").click(function(){
        var city = $("#cityin").val().trim();
        
        if(city.length == 0){
        $(".myperson").text("ENTER TEXT");
        return false;
        }
        else if(city.length >15){
        $(".myperson").text("THE CITY NAME HAVE TO BE NOT MORE THEN 15 LETTERS");
        return false;
        }
    });
    
    $("#skillschange>button").click(function(){
        var html = $("#html1").val().trim();
        var js = $("#js1").val().trim();
        var php = $("#php1").val().trim();
        var an = $("#angular1").val().trim();
        var simvols = "qwertyuiopasdfghjklzxcvbnm/.@#$%^&*()!-=.,{}[]|\+_";
        var textf =  $(".sk");
        
        if(html.length > 3 || js.length > 3 || php.length > 3 || an.length > 3){
            textf.text("THE VALUE HAVE TO BE A NUMBER AND NOT MORE THEN 100");
            return false;
        }
        else if(html.length>2 && html[0] != "1" || html.length>2 && html[1] != "0"
               || html.length>2 && html[2] != "0"){
            textf.text("THE VALUE HAVE TO BE A NUMBER AND NOT MORE THEN 100");
            return false;
        }
        else if(js.length>2 && js[0] != "1" || js.length>2 && js[1] != "0"
               || js.length>2 && js[2] != "0"){
            textf.text("THE VALUE HAVE TO BE A NUMBER AND NOT MORE THEN 100");
            return false;
        }
        else if(php.length>2 && php[0] != "1" || php.length>2 && php[1] != "0"
               || php.length>2 && php[2] != "0"){
            textf.text("THE VALUE HAVE TO BE A NUMBER AND NOT MORE THEN 100");
            return false;
        }
        else if(an.length>2 && an[0] != "1" || an.length>2 && an[1] != "0"
               || an.length>2 && an[2] != "0"){
            textf.text("THE VALUE HAVE TO BE A NUMBER AND NOT MORE THEN 100");
            return false;
        }
        
        for(var i = 0; i < html.length; i++){
                    
            simvols.indexOf(html.charAt(i));
            if(simvols.indexOf(html.charAt(i))!=-1){
                textf.text("ENTER A NUMBER");
                    return false;
                    break;
                        
            }
        }
        for(var i = 0; i < js.length; i++){
                    
            simvols.indexOf(js.charAt(i));
            if(simvols.indexOf(js.charAt(i))!=-1){
                textf.text("ENTER A NUMBER");
                    return false;
                    break;
                        
            }
        }
        for(var i = 0; i < php.length; i++){
                    
            simvols.indexOf(php.charAt(i));
            if(simvols.indexOf(php.charAt(i))!=-1){
                textf.text("ENTER A NUMBER");
                    return false;
                    break;
                        
            }
        }
        for(var i = 0; i < an.length; i++){
                    
            simvols.indexOf(an.charAt(i));
            if(simvols.indexOf(an.charAt(i))!=-1){
                textf.text("ENTER A NUMBER");
                    return false;
                    break;
                        
            }
        }
        
        
    });
    
    
    $("#prog1upload>button").click(function(){
        
        var textf =  $(".ep1");
        var prog = $("#progname1").val().trim();
        var fileInput = $("#progectfile1")[0];
        var fileInputmage = $("#progectimage1")[0];
        
        if(prog.length == 0){
            textf.text("ENTER THIS PROJECT NAME");
            return false;
        }
        
        if(prog.length > 15){
            textf.text("MAXIMUM PROJECT NAME LENGTH 15 LETTERS ");
            return false;
        }
        
        if(!$("#progectimage1").val()){
            textf.text("CHOSE IMAGE");
            return false;
        }
        
        if(!$("#progectfile1").val()){
            textf.text("CHOSE PROJECT");
            return false;
        }
        
        var fn = fileInput.files[0].name;
        var fileTypep = fn.split(".");
        var a = fileTypep.length;
        a -=1;
        var projType = fileTypep[a];
        projType = projType.toLowerCase();
        
        var fin = fileInputmage.files[0].name;
        var finI = fin.split(".");
        var b = finI.length;
        b -= 1;
        var imageType = finI[b];
        imageType = imageType.toLowerCase();
        
        if(imageType != "jpg"){
            textf.text("IMAGE FILE EXTENSION SHOULD BE ONLY '.jpg'");
            return false;
        }
        
        if(projType != "zip"){
            textf.text("PROJECT FILE EXTENSION SHOULD BE ONLY '.zip'");
            return false;
        }
        
        if(fileInput.files[0].size > 15000000){
            textf.text("PROJECT FILE HAVE TO BE NOT MORE THEN 15MB");
            return false;
        }
       
        if(fileInputmage.files[0].size > 1000000){
            textf.text("IMAGE HAVE TO BE NOT MORE THEN 1MB");
            return false;
        }
        
        $("#preloadcover").fadeIn(300);
        
    });
    
    
    $("#progectfile1").on("change",function(){
        var val = $("#progectfile1").val().split("/");
        val = val[val.length - 1];
            $(".f2").text(val);
    });
    $("#progectimage1").on("change",function(){
            $(".f1").text($("#progectimage1").val());
    });
    
    $("#progectfile2").on("change",function(){
            $(".f4").text($("#progectfile2").val());
    });
    $("#progectimage2").on("change",function(){
            $(".f3").text($("#progectimage2").val());
    });
    
    $("#progectfile3").on("change",function(){
            $(".f6").text($("#progectfile3").val());
    });
    $("#progectimage3").on("change",function(){
            $(".f5").text($("#progectimage3").val());
    });
    
    $("#progectfile4").on("change",function(){
            $(".f8").text($("#progectfile4").val());
    });
    $("#progectimage4").on("change",function(){
            $(".f7").text($("#progectimage4").val());
    });
    $("#imageinput").on("change",function(){
            $(".f9").text($("#imageinput").val());
    });
    $("#imageinput2").on("change",function(){
            $(".f10").text($("#imageinput2").val());
    });
    
    
    
    
    $("#prog2upload>button").click(function(){
        
        var textf =  $(".ep2");
        var prog = $("#progname2").val().trim();
        var fileInput = $("#progectfile2")[0];
        var fileInputmage = $("#progectimage2")[0];
        
        
        if(prog.length == 0){
            textf.text("ENTER THIS PROJECT NAME");
            return false;
        }
        
        if(prog.length > 15){
            textf.text("MAXIMUM PROJECT NAME LENGTH 15 LETTERS ");
            return false;
        }
        
        if(!$("#progectimage2").val()){
            textf.text("CHOSE IMAGE");
            return false;
        }
        
        if(!$("#progectfile2").val()){
            textf.text("CHOSE PROJECT");
            return false;
        }
        
         var fn = fileInput.files[0].name;
        var fileTypep = fn.split(".");
        var a = fileTypep.length;
        a -=1;
        var projType = fileTypep[a];
        projType = projType.toLowerCase();
        
        var fin = fileInputmage.files[0].name;
        var finI = fin.split(".");
        var b = finI.length;
        b -= 1;
        var imageType = finI[b];
        imageType = imageType.toLowerCase();
        
        if(imageType != "jpg"){
            textf.text("IMAGE FILE EXTENSION SHOULD BE ONLY '.jpg'");
            return false;
        }
        
        if(projType != "zip"){
            textf.text("PROJECT FILE EXTENSION SHOULD BE ONLY '.zip'");
            return false;
        }
        
        if(fileInput.files[0].size > 15000000){
            textf.text("PROJECT FILE HAVE TO BE NOT MORE THEN 15MB");
            return false;
        }
       
        if(fileInputmage.files[0].size > 1000000){
            textf.text("IMAGE HAVE TO BE NOT MORE THEN 1MB");
            return false;
        }
        
        $("#preloadcover").fadeIn(300);
        
    });
    
    $("#prog3upload>button").click(function(){
        
        var textf =  $(".ep3");
        var prog = $("#progname3").val().trim();
        var fileInput = $("#progectfile3")[0];
        var fileInputmage = $("#progectimage3")[0];
        
        if(prog.length == 0){
            textf.text("ENTER THIS PROJECT NAME");
            return false;
        }
        
        if(prog.length > 15){
            textf.text("MAXIMUM PROJECT NAME LENGTH 15 LETTERS ");
            return false;
        }
        
        if(!$("#progectimage3").val()){
            textf.text("CHOSE IMAGE");
            return false;
        }
        
        if(!$("#progectfile3").val()){
            textf.text("CHOSE PROJECT");
            return false;
        }
        
         var fn = fileInput.files[0].name;
        var fileTypep = fn.split(".");
        var a = fileTypep.length;
        a -=1;
        var projType = fileTypep[a];
        projType = projType.toLowerCase();
        
        var fin = fileInputmage.files[0].name;
        var finI = fin.split(".");
        var b = finI.length;
        b -= 1;
        var imageType = finI[b];
        imageType = imageType.toLowerCase();
        
        if(imageType != "jpg"){
            textf.text("IMAGE FILE EXTENSION SHOULD BE ONLY '.jpg'");
            return false;
        }
        
        if(projType != "zip"){
            textf.text("PROJECT FILE EXTENSION SHOULD BE ONLY '.zip'");
            return false;
        }
        
        if(fileInput.files[0].size > 15000000){
            textf.text("PROJECT FILE HAVE TO BE NOT MORE THEN 15MB");
            return false;
        }
       
        if(fileInputmage.files[0].size > 1000000){
            textf.text("IMAGE HAVE TO BE NOT MORE THEN 1MB");
            return false;
        }
        
        $("#preloadcover").fadeIn(300);
        
    });
    
    $("#prog4upload>button").click(function(){
        
        var textf =  $(".ep4");
        var prog = $("#progname4").val().trim();
        var fileInput = $("#progectfile4")[0];
        var fileInputmage = $("#progectimage4")[0];
        
        if(prog.length == 0){
            textf.text("ENTER THIS PROJECT NAME");
            return false;
        }
        
        if(prog.length > 15){
            textf.text("MAXIMUM PROJECT NAME LENGTH 15 LETTERS ");
            return false;
        }
        
        if(!$("#progectimage4").val()){
            textf.text("CHOSE IMAGE");
            return false;
        }
        
        if(!$("#progectfile4").val()){
            textf.text("CHOSE PROJECT");
            return false;
        }
        
         var fn = fileInput.files[0].name;
        var fileTypep = fn.split(".");
        var a = fileTypep.length;
        a -=1;
        var projType = fileTypep[a];
        projType = projType.toLowerCase();
        
        var fin = fileInputmage.files[0].name;
        var finI = fin.split(".");
        var b = finI.length;
        b -= 1;
        var imageType = finI[b];
        imageType = imageType.toLowerCase();
        
        if(imageType != "jpg"){
            textf.text("IMAGE FILE EXTENSION SHOULD BE ONLY '.jpg'");
            return false;
        }
        
        if(projType != "zip"){
            textf.text("PROJECT FILE EXTENSION SHOULD BE ONLY '.zip'");
            return false;
        }
        
        if(fileInput.files[0].size > 15000000){
            textf.text("PROJECT FILE HAVE TO BE NOT MORE THEN 15MB");
            return false;
        }
       
        if(fileInputmage.files[0].size > 1000000){
            textf.text("IMAGE HAVE TO BE NOT MORE THEN 1MB");
            return false;
        }
        
        $("#preloadcover").fadeIn(300);
        
    });
	
	
	$("#backchange>button").click(function(){
        var textf =  $(".pier");
        var fileInputmage = $("#imageinput")[0];
        
        if(!$("#imageinput").val()){
            textf.text("CHOSE IMAGE");
            return false;
        }
        
        var fin = fileInputmage.files[0].name;
        var finI = fin.split(".");
        var b = finI.length;
        b -= 1;
        var imageType = finI[b];
        imageType = imageType.toLowerCase();
        
        if(imageType != "jpg"){
            textf.text("IMAGE FILE EXTENSION SHOULD BE ONLY '.jpg'");
            return false;
        }
        
        if(fileInputmage.files[0].size > 1000000){
            textf.text("IMAGE HAVE TO BE NOT MORE THEN 1MB");
            return false;
        }
        
        $("#preloadcover").fadeIn(300);
        
    });
    
    $("#personalfchange>button").click(function(){
        var textf =  $(".pier");
        var fileInputmage = $("#imageinput2")[0];
        
        if(!$("#imageinput2").val()){
            textf.text("CHOSE IMAGE");
            return false;
        }
        
        var fin = fileInputmage.files[0].name;
        var finI = fin.split(".");
        var b = finI.length;
        b -= 1;
        var imageType = finI[b];
        imageType = imageType.toLowerCase();
        
        if(imageType != "jpg"){
            textf.text("IMAGE FILE EXTENSION SHOULD BE ONLY '.jpg'");
            return false;
        }
        
        if(fileInputmage.files[0].size > 1000000){
            textf.text("IMAGE HAVE TO BE NOT MORE THEN 1MB");
            return false;
        }
        
        $("#preloadcover").fadeIn(300);
        
    });
	
    $("#confpassf>button").click(function(){
        var password = $("#ps1").val().trim();
        var confpassword = $("#ps2").val().trim();
        
        if(password.length == 0){
            $(".cp1").text("ENTER YOUR PASSWORD PLEASE");
            return false;
        }
        if(confpassword.length == 0){
            $(".cp1").text("CONFIRM YOUR PASSWORD PLEASE");
            return false;
        }
        if(password != confpassword){
            $(".cp1").text("CONFIRM THE SAME PASSWORDS");
            return false;
        }
        
    });
    
    $("#fpf>button").click(function(){
        var email = $("#fp").val().trim();
        if(email.length == 0){
            $(".fp1").text("ENTER YOUR E-MAIL ADDRESS PLEASE");
            return false;
        }
        if(email.indexOf(".") == -1 || email.indexOf(".") == email.length-1){
            $(".fp1").text("INCORRECT E-MAIL ADDRESS");
            return false;
        }
        
    });
    
    $("#dpsw button").click(function(){
        var password = $("#passworddps").val().trim();
        if(password.length == 0){
            $(".dps").text("ENTER YOUR PASSWORD");
            return false;
        }
        if(password.length < 6){
            $(".dps").text("PASSWORD HAVE TO BE NOT LESS THEN 6 SYMBOLS");
            return false;
        }
    });
	
});