<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die('Could not connect'.mysqli_error());
	}
	mysqli_select_db($con,"hiotel_db");
	$sql = "INSERT INTO foodbook VALUES ('$_POST[Name]','$_POST[Email]','$_POST[Address]','$_POST[city]','$_POST[state]','$_POST[state]','$_POST[zip]','$_POST[ncard]','$_POST[cnumber]','$_POST[emonth]','$_POST[eyear]','$_POST[cvv]')";
	if(!mysqli_query($con,$sql)){
		die('Error in posting values');
	}
	echo "Your Payment is done. Hope you enjoy with our delicious food and you may have life long happiness and health.";
	mysqli_close($con);
    header("refresh:4;url=home.html");
?>