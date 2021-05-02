<?
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>PROFILE EDIT</title>
      <link rel="stylesheet"  href="CSS/changespass.css">
</head>
<body>

   <script src="password.js"></script>
   
   <?php

        include 'header.php';
        

     ?>
    
      <section class="changes-password">
      	  
      	  <div class="password-box">
                  
                  <h1>Changes Password</h1>

      	  	<form id="passwordchanged" onsubmit="return validation()" action="passwordchanges.php" method="POST">

      	  		<label for="oldpassword">Old Password</label>
      	  		<input type="password" id="oldpassword" name="oldpassword">

      	  		<label for="newpassword">New Password</label>
      	  		<input type="password" id="newpassword" name="newpassword">

      	  		<label for="confirmnewpassword">Confirm Password</label>
      	  		<input type="password" id="confirmnewpassword" name="confirmnewpassword">

      	  		<input type="submit" name="password-submit" value="Changes">
      	  		

      	  	</form>
      	  	
      	  </div>

      </section>

</body>
</html>