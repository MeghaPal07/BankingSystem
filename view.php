<!DOCTYPE html>
<html>
<head>
	<title>Search html</title>
</head>
<body>
<center>
	<h2>All customers</h2><br>
	<h3><a href="t1.php">Transfer Money</a></h3>
	


<?php
$connection=mysqli_connect("sql106.epizy.com","epiz_30024289","3KXYWcEmyhWVG");
$db=mysqli_select_db($connection,'epiz_30024289_bank');
	
	$query="select * from bank ";
	$query_run=mysqli_query($connection,$query);
	$queryResult = $connection->query($query);
	if (isset($queryResult)) {
    
	while($row=mysqli_fetch_array($query_run))
	{
		?>
		<form  method="POST">
			<a href="view.php"><input type="text" name="id" value="<?php echo "Name-- ". $row['name'] ?>" >
			<input type="text" name="id" value="<?php echo"Account no-- ". $row['acc'] ?>" >
			<input type="text" name="id" value="<?php echo"Balance-- ". $row['bal'] ?>" >
			<input type="text" name="id" value="<?php echo"Address -- ". $row['address'] ?>" >
			
			</a>
		</form>

		<?php
	}
}



?>
</center>
</body>
</html>