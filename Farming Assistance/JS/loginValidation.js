    function get(id){
			return document.getElementById(id);
		}
		
	 function validPass(pass)
	  {
      var hasUpper=false;
      var hasLower=false;
	  var hasNum=false;
	
	  
       for(var i=0;i<pass.length;i++)
	   {
        if(pass[i]==pass[i].toUpperCase())
		{
            hasUpper=true;
        }
		
        if(pass[i]==pass[i].toLowerCase())
		{
            hasLower=true;
        }
		if(pass[i]>='0' && pass[i]<='9')
		{
			hasNum=true;
		}
		
       
      if(hasUpper && hasLower || hasNum)
	  {
        return true;
      }
      
       
      }
	   return false;
      }
	  
	  
	 function hasSpecial(pass) 
	 {
      if(pass.indexOf('#')>=0||pass.indexOf("?")>=0)
	 {
        return true;
     }
     else
	 {
        return false;
     }
	 
     }
	
      function validateLogin()
    {
		refresh();
		
		var hasError=false;
		
		
		if(get("uname").value=="")
		{
			get("err_uname").innerHTML= "Username Required";
			get("err_uname").style.color="red";
			hasError=true;
		}
		else if(get("uname").value.length<5)
		{
			get("err_uname").innerHTML= "Username Should be atleast 5 character Long";
			get("err_uname").style.color="red";
			hasError=true;
		}
	
		 if(get("pass").value=="")
		{
			get("err_pass").innerHTML= "Password Required";
			get("err_pass").style.color="red";
			hasError=true;
		}
		else if(get("pass").value.length<8)
		{
			get("err_pass").innerHTML= "Should be more then 8 characters";
			get("err_pass").style.color="red";
			hasError=true;
		}
		else if(!validPass(pass.value))
		{
			get("err_pass").innerHTML= "Password Should Contain Lower and Upper characters";
			get("err_pass").style.color="red";
			hasError=true;
		}
		else if(!hasSpecial(pass.value))
		{
			get("err_pass").innerHTML= "Password Should Contain Speical Character like # and ?";
			get("err_pass").style.color="red";
			hasError=true;
		}
		
		
		return !hasError;
		
	}
	
	function refresh()
	{
	
		get("err_uname").innerHTML= "";	
		get("err_pass").innerHTML= "";
	
	}

	
	
	