<?php
     session_start();
     //include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="CSS/style.css">
</head>
<body>

	<!---Header Section-->
	  <header>
	  	<div class="container">
	  		<div class="menu-features">
	  			<ul>
		             <li><a href="home.php">Home</a></li>
		
		            <?php
		                 if (isset($_SESSION["uname"])) 
		                 {
			                //echo "<li><a href='view.php'>View Profile</a></li>";
			                echo "<li><a href='Profile.php'>Profile</a></li>";
			                echo "<li><a href='logout.php'>Logout</a></li>";

		                 }

		                 else
		                 {
			                //echo"<li><a href='JS/loginValidation.js'>Login</a></li>";
		    
		                    //echo"<li><a href='JS/signupValidation.js'>Signup</a></li>";

		                 }

		            ?>
		
                </ul>


	  		</div>
	  		<!---Features Menu-->



	  		
	  	</div>
	  	

	  </header>


	<!---Header Section-->

	

	

</body>
</html>