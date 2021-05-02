		<?php
		
		require_once 'controllers/userController.php';
		include 'RegLoginStyle.css';
		include 'header.php';
		$customers=getAllCustomer();



		?>
		<html>
		<head>
		<title>All Seller</title></head>

		<body>

		<br></br>
		<center>
		<table border="1" style="border-collapse:collapse;">
		<tr>
		<th>Serial</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Address</th>
		<th>gender</th>
		<th>Email</th>
		<th>Password</th>
		<th>Contact Info </th>
		<th></th>



		</tr>
		<tr>
		<?php
		foreach($customers as $customer)
		{
		echo "<tr><td>".$customer["id"]."</td>";
		echo "<td>".$customer["fname"]."</td>";
		echo "<td>".$customer["lname"]."</td>";
		echo "<td>".$customer["uname"]."</td>";
		echo "<td>".$customer["ad"]."</td>";
		echo "<td>".$customer["gender"]."</td>";
		echo "<td>".$customer["email"]."</td>";
		echo "<td>".$customer["pass"]."</td>";
		echo "<td>".$customer["number"]."</td>";
		echo '<td><a style="text-decoration:none" href="edituser.php?id='.$customer["id"].'" target="_ self" >Edit</a></td>';
		echo '<td><a style="text-decoration:none" href="removeuser.php?id='.$customer["id"].'" target="_ self" >Remove</a></td>';



		}
		?>
		</tr>

		</table>
		<center>
		</body>
		</html>