<!DOCTYPE html>
<html>
<head>
	
	
	<link rel="stylesheet" type="text/css" href="style_1.css">
	<script defer src="script_1.js"></script>
</head>
<body bgcolor="#8c92ac">
	
	<div class="sign-up-form">
		
	<div id="error"></div>
<form id="form" action="transfer.php" method="POST">

	<div>
		<label for="fromaccount"> From account</label>
		<input id ="fromaccount"  name="fromaccount" class="input-box"  type="number" required placeholder="Enter your account  no">
		<label for="toaccount"> To account </label>
        <select name="select customer">
              <option value="" disabled selected>Select customer</option>
              <option>Robert jin</option>
              <option>Jimmy Fallon</option>
              <option >Rob jem</option>
              <option>Rajiv Madhban</option>
              <option>Ricky Rambo</option>
              <option>T Kalyanee</option>
              <option>Kamlesh Tripathi</option>
              <option>Bina Prajapoti</option>
              <option>R Kripalini</option>
              <option>Allu Shreya</option>

            </select>
          
		<input id ="toaccount"  name="toaccount" class="input-box" type="number" required placeholder="Enter recepient's account no ">
	
		<label for="amount"> Amount</label>
		<input id ="amount"  name="amount" class="input-box"  type="number" required placeholder="Enter the amount ">
	</div>
	<button type="transferfund"name="transferfund" class="signup-btn">Transfer</button><br>
	<hr>
</form>
</div>

<footer><h5 align="center"> &copy;Copyright| Designed by Megha Pal</h5></footer>
</body>
</html>