<?php
     require_once 'controllers/userController.php';
     include 'RegLoginStyle.css';
     $id=$_GET["id"];
     $customer=getCustomer($id)
?>
<html>
       <title>SignUP</title>
	<head> 
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
		<legend align="center"><h1>Edit User</h1></legend>
	<form action="" method="post">
			<table align="center"> 
	
				<tr>
					<td><span><b>First Name:<b></span></td>
					<td>:<input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="text" name="fname"value="<?php echo $customer["fname"];?>" placeholder="First Name">
						<span><?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Last Name:</b></span></td>
					<td>:<input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="text" name="lname"value="<?php echo $customer["lname"];?>" placeholder="Last Name">
						<span><?php echo $err_lname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td>:<input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="text" name="uname"value="<?php echo $customer["uname"];?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address:</b></span></td>
					<td>:<input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="text" name="ad"value="<?php echo $customer["ad"];?>"placeholder="Address">
					<span><?php echo $err_ad;?></span></td>
				</tr>	
				
				<tr>
					<td><span><b>Gender:</b></span></td>
					<td>:<input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="radio" name="gender" value="Male"><?php if($customer["gender"]=="Male");?><span>Male</span>
					    <input type="radio" name="gender" value="Female"><?php if($customer["gender"]=="Female");?><span>Female</span><br>
						<span><?php echo $err_gender;?></span></td>
				</tr>
				
				
			
			
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="text" value="<?php echo $customer["email"];?>" name="email" placeholder="Mail Address">
						<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="password" name="pass" value="<?php echo $customer["pass"];?>" placeholder="Password"><br>
						<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $customer["id"];?>">
						<input type="text" name="number"value="<?php echo $customer["number"];?>"placeholder="Number">
					<span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="edit_user" value="Edit"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	</body>
 </html>