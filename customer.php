<!DOCTYPE html>
<html>
<head>
	<title>Search html</title>
</head>
<body bgcolor="#8c92ac">
<center>
	<h2>All customers list</h2><br>
	
	


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
		<form action="act.php" method="POST">
			<input type="text" name="id" value="<?php echo  $row['name'] ?>" >
			<input type="submit" name="submit" value="See Details">
		</form>

		<?php
	}
}



?>
</center>
</body>
</html>