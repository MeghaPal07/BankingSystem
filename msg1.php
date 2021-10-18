<?php
$name = $_POST['name'];
$phoneno = $_POST['phoneno'];
$message = $_POST['message'];
$conn=new mysqli('sql106.epizy.com','epiz_30024289','3KXYWcEmyhWVG','epiz_30024289_bank');
if($conn->connect_error){
	die('Connection Failed:'.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into contact(name,acc,msg)
		values(?,?,?)");
	$stmt->bind_param("sis",$name,$phoneno,$message);
$stmt->execute();
echo"Thanks for contacting with us";
$stmt->close();
$conn->close();
}

?>
