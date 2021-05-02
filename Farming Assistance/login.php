<?php
    require_once 'controllers/loginController.php';
    session_start();
    include 'RegLoginStyle.css';
?> 
<html>
    <head>
	<title>Log in</title>
	<style>
	.login-div{
		border:1px solid black;
		margin:auto;
		width:40%;
		margin-top:15%
	}
	</style>
	</head>

	<body>
	<div class="login-div">
	 <fieldset>
        <legend align="center"><h1>Login</h1></legend>
	   
	   <form action="" onsubmit="return validateLogin()" method="post">
	       <table align="center">
		        <tr>
				     <td><span><b>Username<b></span></td>
					<td>:<input type="text" id="uname"  name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
			    </tr>
				<tr>
				     <td><span><b>Password</b></span></td>
					<td>:<input type="password" id="pass" value="<?php echo $pass;?>" name="pass" placeholder="Password">
					<span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
				<td><input type="submit" name="login" value="Login"></td>
				</tr>
		      </table>
			  </form>
			  <center><a style="text-decoration:none" href="registration.php" target="_blank" >Not registered yet? Sign up</a></center>
			  </fieldset>
	</div>
	
    </body>
    <script src="JS/loginValidation.js"></script>
</html>	