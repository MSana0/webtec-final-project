<?php
	include 'RegLoginStyle.css';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Upload Posts </title>
</head>
<body>
	<center><form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<br>
		<textarea name="text" cols="40" rows="4" placeholder="Say something about this image..."></textarea>
		<button type="submit" name="upload" value="Upload Image">Upload</button>
		<br>
		<label><a href="home.php">Go Back</a></label>

		
	</form></center>

</body>
</html>