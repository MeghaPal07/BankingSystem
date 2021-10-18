<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script defer src="script.js"></script>

</head>
<link rel="stylesheet" type="text/css" href="dropdown.css">
<body bgcolor="8c92ac">
	
	<div class="sign-up-form">
		<h1>Contact us </h1>
	<div id="error"></div>
	<center>
<form id="form" action="msg1.php" method="POST">

	<div>
		<label for="name"> Name </label>
		<input id ="name"  name="name" class="input-box" placeholder="name" type="text" required>
		<label for="phoneno"> Account no </label>
		<input id ="phoneno"  name="phoneno"class="input-box" placeholder="account no" type="number" required>
		<label for="message"> Message</label>
		<input id ="message"  name="message" class="input-box" placeholder="write your message" type="text" required><br><br>
	</div>
	<button type="submit" class="signup-btn">Submit</button>
	
</form>
</center>

<footer><h4 align="center"> &copy;Copyright| Designed by Megha Pal</h4></footer>
</body>

</html>
