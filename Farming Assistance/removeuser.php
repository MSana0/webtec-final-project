<?php
         require_once 'controllers/userController.php';
		 $id=$_GET["id"];
		 $customer=getCustomer($id);
	?>

	  <center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Serial</th>
				<th>Frist Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Address</th>
				<th>gender</th>
				<th>Email</th>
				<th>Password</th>
				<th>Contact Info </th>
			  
				
			
				
			</tr>
			<tr> 
			<?php 
			    
					 echo "<tr><td>".$customer["id"]."</td>";
					 echo "<td>".$customer["fname"]."</td>";
					 echo "<td>".$customer["lname"]."</td>";
					 echo "<td>".$customer["uname"]."</td>";
					 echo "<td>".$customer["ad"]."</td>";
					 echo "<td>".$customer["gender"]."</td>";
					 echo "<td>".$customer["email"]."</td>";
					 echo "<td>".$customer["pass"]."</td>";
					 echo "<td>".$customer["number"]."</td>"; 
					
				 ?>
			</tr>
			
		

<html>
<head>
      

</head>
<body>

             <h2>
			<span><center>Are you Sure You want to remove this?</center></span> 
			</h2><br>
       
          <form action="" method="post">
            <table>
                <tr>
                   
					  <td><input type="hidden" name="id" value="<?php echo $customer["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_man" value="Remove customer" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="alluser.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




            </table>
        </form>
        
    
 

</body>
</html>
