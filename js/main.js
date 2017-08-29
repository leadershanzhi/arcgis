
   function checkpw(){
     if(document.f.pw.value!==document.f.pwx.value){
        alert("新密码需与原密码一致");
        document.f.pwx.value="";
     }
   }
   function check(){
       var spanTest=document.getElementById('result');
       var spanValue = spanTest.outerText; 
     
	   if(spanValue.length==4){
		   document.f.no.value="";
	   }   
   }
   function showCheck(no){
      $.post("getCheck.php",{str:no},function(data,textStatus){
         if(textStatus=="success"){
        	 document.getElementById("result").innerHTML=data;
         }
      });
   }
   function login(){
	   $.post("getLogin.php",{"no":$("#loginno").val().trim(),"pw":$("#loginpw").val().trim()},function(data,textStatus){
		   if(textStatus=="success"){
			   var result = data.substring(104,data.length);
			   if(result == "success"){
				   window.location.href="main.php";
			   }else{
				   $("#loginalert").show(); 
			   }  
	       }
	   });
   }