
$(document).ready(function(){
   
  sinupform
   $("#loginform").hide();
   $("#sinupform").hide();
     
   $("#sin-up").click(function(){
    $("#sinupform").show();

   });
   

   $("#form-close").click(function(){
    $("#sinupform").hide();

   });
   
   
   
   $("#log-inid").click(function(){
    $("#loginform").show();

   });


   $("#login-close").click(function(){
    $("#loginform").hide();

   });

    
    // user log in here

    $("#log-in").click(function(){
         
        var usernameval = $("#username").val();
        var loguservpass = $("#loguserpassword").val();

        if( usernameval.length == ""){
            $("#logusername").html("*please enter your email");
            $("#logusername").focus();
            $("#logusername").css("color","red");
            return false;
        }else if(loguservpass.length == ""){
            $("#logpassword").html("enter your password");
            $("#logpassword").focus();
            $("#logpassword").css("color","red");
            return false;

        } else if(loguservpass.length < 3){
          $("#logpassword").html("password valid password");
          $("#logpassword").focus();
          $("#logpassword").css("color","red");
          return false;

      }else if(loguservpass.length >15){
            $("#logpassword").html("password length must be less than 15 charcter");
            $("#logpassword").focus();
            $("#logpassword").css("color","red");
            return false;

        }else{
            return true;
        }




    });

    // user registion here

     $("#sinupbtn").click(function(){

         
         
          var fnameval = $("#userfname").val();
          var lnameval = $("#userlname").val();
          var userpasswordval = $("#userpassword").val();
           
          // fname validation start here
           
          if(fnameval.length == ""){ 
               
            $("#fname").html("* please fil name");
            $("#fname").focus();
            $("#fname").css("color","red");
            return false;
          }else if (fnameval.length < 3){
            
            $("#fname").html("*fname must be at lest 3 ");
            $("#fname").focus();
            $("#fname").css("color","red");
            return false;
          }else if( fnameval.length >  10){

            $("#fname").html("* fname must be less than 10");
            $("#fname").focus();
            $("#fname").css("color","red");
            return false;

          }else if(lnameval.length == ""){  // lname validation here
               
            $("#lname").html("* please fil lname");
            $("#lname").focus();
            $("#lname").css("color","red");
            return false;
          }else if (lnameval.length < 3){
            
            $("#lname").html("*lname must be at lest 3 ");
            $("#lname").focus();
            $("#lname").css("color","red");
            return false;
          }else if( lnameval.length >  10){

            $("#lname").html("* lname must be less than 10");
            $("#lname").focus();
            $("#lname").css("color","red");
            return false;
          }if(userpasswordval.length == ""){  // password validation here
               
            $("#password").html("* please fil password");
            $("#password").focus();
            $("#password").css("color","red");
            return false;
          }else if (userpasswordval.length < 3){
            
            $("#password").html("*password must be at lest 3 ");
            $("#password").focus();
            $("#password").css("color","red");
            return false;
          }else if( userpasswordval.length >  10){

            $("#password").html("* password must be less than 10");
            $("#password").focus();
            $("#password").css("color","red");
            return false;
          }else{
              return true;
          }
          
             
            
         });

    //  change password script
         $("#changepaswordid").click(function(){

           alert("do you really went ");
         });
 


  });

 