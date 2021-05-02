v c<?php
// Initialize the session
session_start();
//include 'includes/DBConn.php';
//include 'Registration.php';
 
// Check if the user is logged in, if not then redirect him to login page
/*if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login.php");
    exit;
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Homepage</title>
</head>
<body>
	<center><h1>Home</h1></center>
	<h2><span style="float: right;"><a style="text-decoration:none" href="Login.php" target="_self">Log Out &nbsp</a></span></h2>
	<h2><span style="float: right;"><a style="text-decoration:none" href="Profile.php" target="_self">Profile &nbsp &nbsp</a></span></h2>
	<br><br>
	<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["uname"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
	<!--<center><img src = "https://wallpapertag.com/wallpaper/full/2/6/e/537346-farm-background-pictures-1920x1080-retina.jpg" id="img-f" size=100% 100%/></center>-->
	<center><h1>Categories</h1></center>
	<h2>
		<button><a target="_self" style="text-decoration: none" href="NewsAndInfo.php">News and Info</a></button>
		<button><a target="_self" style="text-decoration: none" href="Orders.php">Orders</a></button>
		<button><a target="_self" style="text-decoration: none" href="ContactDelivery.php">Delivery Info</a></button>
		<button><a target="_self" style="text-decoration: none" href="Offers.php">Offers</a></button>
		<button><a target="_self" style="text-decoration: none" href="Feedbacks.php">Feedbacks/Reviews</a></button>
	</h2>

</body>
</html>