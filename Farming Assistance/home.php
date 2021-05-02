<?php
    session_start();
    include 'RegLoginStyle.css';
?>
<html>
    <head>

    <title>Homepage</title>
	<style>
	       #img-f {
            width: 100%;
                    }
	</style>
		   
	</head>
        <body>
		       <center><h1>Home</h1><center>
			 <?php echo $_SESSION["loggedin"] ?>
		     <h2>
			<span style="float:right;"><a style="text-decoration:none" href="logout.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2>
			<h2>
			<span style="float:right;"><a style="text-decoration:none" href="Profile.php" target="_self" >Profile &nbsp &nbsp</a> </span> 
			</h2><br><br>
			
	           
			  <center><h1>Categories</h1><center>
			   <h2>
					<button><a target="_self" style="text-decoration: none" href="NewsAndInfo.php">News and Info</a></button>
					<button><a target="_self" style="text-decoration: none" href="Orders.php">Orders</a></button>
					<button><a target="_self" style="text-decoration: none" href="ContactDelivery.php">Delivery Info</a></button>
					<button><a target="_self" style="text-decoration: none" href="Offers.php">Offers</a></button>
					<button><a target="_self" style="text-decoration: none" href="Feedbacks.php">Feedbacks/Reviews</a></button>
					<button><a target="_self" style="text-decoration: none" href="index.php">Upload Posts</a></button>
				</h2>

			    <h2>
                   <span><a target="_self" style="text-decoration:none" href="alluser.php">User &nbsp</a> </span>

                </h2>
			   
			   <h2>
					  <span style="position: absolute; bottom:0px;right:0px;" ><a style="text-decoration:none" href="contactus.php" target="_self" >Contact us &nbsp</a> </span> 
					  </h2>
			   
        </body>
</html>