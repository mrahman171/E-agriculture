<?php

$username=$password="";

if( isset($_POST['uname']) ){
	$username=$_POST['uname'];
}

if( isset($_POST['pass']) ){
	$password=$_POST['pass'];
}

try{
	$conn = new PDO("mysql:host=localhost:3306;dbname=test;","root","");
	///setting errormode so that when error occurs it will give us an exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
	?>
		<script>
			window.alert("Database not connected");
		</script>
	<?php
}

$userquery= "SELECT s_name,password FROM shop WHERE s_name='$username' AND password='$password'";
$returnvalue=$conn->query($userquery);
$rowcount=$returnvalue->rowCount();

if($rowcount==1){
	$_SESSION['uname'] = $username;
	?>
	<script>
	window.location.assign("shoppage.php");
	</script>
	<?php
}
else{
	?>
	<script>
	  window.alert("Wrong Username and Password");
		window.location.assign("shoplogin.php");
	</script>
	<?php
}
?>
