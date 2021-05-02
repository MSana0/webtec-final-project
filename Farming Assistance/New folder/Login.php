<?php
session_start();
include 'includes/RegLoginStyle.css';
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: CustomerHomepage.php");
    exit;
}
include "includes/DBConn.php";

$uname = $pass = "";
$unameErr = $passErr = $loginErr = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty(trim($_POST["uname"]))){
        $unameErr = "Please enter username.";
    } else{
        $uname = trim($_POST["uname"]);
    }
    if(empty(trim($_POST["pass"]))){
        $passErr = "Please enter your password.";
    } else{
        $pass = trim($_POST["pass"]);
    }
    if(empty($unameErr)&&empty($passErr)){
        $sql = "SELECT id, uname, pass FROM custable WHERE uname = ?";
        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("s", $param_uname);
            $param_uname = $uname;
            if($stmt->execute()){
                $stmt->store_result();
                if($stmt->num_rows == 1){                    
                    $stmt->bind_result($id, $uname, $password_hash);
                    if($stmt->fetch()){
                        if(password_verify($pass, $password_hash)){
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["uname"] =$uname;                           
                            header("location: CustomerHomepage.php");
                        } else{
                            $loginErr = "Invalid username or password.";
                        }
                    }
                } else{
                    $loginErr = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Login Page</title>
</head>
<body>
    <center><h1>Customer Login</h1></center>
    <div id="box">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <fieldset style="position: center;">
            <legend><b>Login</b></legend>
            <label for="uname">Username/userid: </label>
            <input type="text" name="uname" id="text">
            <p><?php echo $unameErr;?></p>
            <label for="pass">Password: </label>
            <input type="password" name="pass" id="text">
            <p><?php echo $passErr;?></p>
        </fieldset>
        <br>
        <input type="submit" class="btn btn-primary" value = "Login">
        <p>Don't have an acount?<br><a href="Registration.php">Register here. </a></p>
        </form>
    </div>
</body>
</html>