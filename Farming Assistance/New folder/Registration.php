<?php
	//include 'includes/functions.php';
	include 'includes/DBConn.php';
	include 'includes/RegLoginStyle.css';
	$fnameErr = $lnameErr = $genderErr = $mailErr = $dobErr = $phoneErr = $addressErr = $unameErr = $passErr = $cpassErr = $reErr = "";
	$fname = $lname = $gender = $mail = $dob = $phone = $address = $uname = $pass = $cpass = $re = "";
	if(isset($_POST['register'])) {
		
		if(empty(trim($_POST['fname']))){
			$fnameErr = "First name is required.";
		}else{
			$fname = trim($_POST["fname"]);
		}
		if(empty(trim($_POST['lname']))){
			$lnameErr = "Last name is required.";
		}else{
			$lname = trim($_POST["lname"]);
		}
		if(empty(trim($_POST['gender']))){
			$genderErr = "Gender is required.";
		}else{
			$gender = trim($_POST["gender"]);
		}
		if(empty(trim($_POST['mail']))){
			$mailErr = "mail is required.";
		}else{
			$mail = trim($_POST["mail"]);
		}
		if(empty(trim($_POST['dob']))){
			$dobErr = "Date of Birth is required.";
		}else{
			$dob = trim($_POST["dob"]);
		}
		if(empty(trim($_POST['phone']))){
			$phoneErr = "Contact number is required.";
		}else{
			$phone = trim($_POST["phone"]);
		}
		if(empty(trim($_POST['address']))){
			$addressErr = "Address is required.";
		}else{
			$address = trim($_POST["address"]);
		}
		if(empty(trim($_POST["uname"]))){
        $unameErr = "Please enter a username.";
    	} else{
        /*// Prepare a select statement
        $sql = "SELECT id FROM custable WHERE uname = ?";
        
        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("s", $param_uname);
            
            $param_uname = trim($_POST["uname"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                if($stmt->num_rows == 1){
                    $unameErr = "This username is already taken.";
                } else{
                    $uname = trim($_POST["uname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();*/
        }
    }
    
    // Validate password
    if(empty(trim($_POST["pass"]))){
        $passErr = "Please enter a password.";     
    } /*elseif(strlen(trim($_POST["pass"])) < 6){
        $passErr = "Password must have atleast 6 characters.";
    }*/ else{
        $pass = trim($_POST["pass"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["cpass"]))){
        $cpassErr = "Please confirm password.";     
    } else{
        $cpass = trim($_POST["cpass"]);
        if(empty($passErr) && ($pass != $cpass)){
            $cpassErr = "Passwords do not match.";
        }
    }
		if(empty(trim($_POST['re']))){
			$reErr = "Recovery email is required.";
		}else{
			$re = trim($_POST["re"]);
		}
		$stmt = mysqli_prepare($conn, "INSERT INTO custable (fname, lname, gender, mail, dob, phone, address, uname, pass, re) VALUES ('$fname','$lname','$gender','$mail','$dob','$phone','$address','$uname','$pass','$re')");
			if(mysqli_stmt_execute($stmt))
			{
				echo "Welcome $username.";
			}
			else
			{
				echo "failed to insert data.";
			}
		/*if(empty($unameErr) && empty($passErr) && empty($cpassErr)){
			$sql = "INSERT INTO custable (fname, lname, gender, mail, dob, phone, address, uname, pass, re) VALUES ('$fname','$lname','$gender','$mail','$dob','$phone','$address','$uname','$pass','$re')";
			if($stmt = $conn->prepare($sql)){
				$stmt->bind_param("ssssisssss",$fname,$lname,$gender,$mail,$dob,$phone,$address,$param_uname,$param_pass,$re);
				$param_uname=$uname;
				$param_pass=password_hash($pass, PASSWORD_DEFAULT);
				if($stmt->execute()){
					header("location: Login.php");
				}else {
					echo "Oops Something went wrong. Please try again later.";
				}
				$stmt->close();
		}
	}*/}$conn->close();}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Page</title>
</head>
<body>
	<center><h1>Registration Form</h1></center>
	<div id="box">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<fieldset style="text-align: center;">
			<legend><b> Basic Information: </b></legend>
			<b>
			<label for="fname">First name: </label>
			<input type="text" name="fname" id="text" >
			3m   
			<label for="lname">Last name: </label>
			<input type="text" name="lname" id="text">
			<p><?php echo $lnameErr;?></p>
			<label> Gender: </label>
		    <input type="radio" name="gender" id="male" value="male" >
		    <label for = "male"> Male </label>
		    <input type="radio" name="gender" id="female" value="female" >
		    <label for="female">Female</label>
		    <p><?php echo $genderErr;?></p>
		    <label for="mail">Email: </label>
		    <input type="email" name="mail" id="text" >
		    <p><?php echo $mailErr;?></p>
		    <label for="dob">Date of Birth: </label>
		    <input type="Date" name="dob" id="text" >
		    <p><?php echo $dobErr;?></p>
		    <label for="phone">Phone number: </label>
		    <input type="tel" name="phone" id="text" /*pattern="[0-9]{5}-[0-9]{6}"*/ >
		    <p><?php echo $phoneErr;?></p>
		    <label for="address">Address: </label>
		    <input type="text" name="address" id="text" >
		    <p><?php echo $addressErr;?></p>
			</b>
		</fieldset>
		<br>
	    <fieldset style="text-align: center;">
	    	<legend><b>User Account Information</b></legend>
	    	<b>
	    	<label for="uname">Username/userid: </label>
	    	<input type="text" name="uname" id="text" >
	    	<p><?php echo $unameErr;?></p>
	    	<label for="pass">Password: </label>
	    	<input type="password" name="pass" id="text" >
	    	<p><?php echo $passErr;?></p>
	    	<label for="cpass">Confirm Password: </label>
	    	<input type="password" name="cpass" id="text">
	    	<p><?php echo $cpassErr;?></p>
	    	<label for="re">Recovery Email: </label>
	    	<input type="email" name="re" id="text">
	    	<p><?php echo $reErr;?></p>
	    	</b>
	    </fieldset>
	    <br>
	    <button type="submit" name="register" class="button">Register</a></button>
	    <p>Already have an account?<br> <a href="Login.php"> Login here. </a></p>
	</form>
	</div>
</body>
</html>