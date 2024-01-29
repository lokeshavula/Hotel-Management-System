<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con){
		die('Could not connect'.mysqli_error());
	}
	mysqli_select_db($con,"hiotel_db");
	$cin=filter_input(INPUT_POST, 'cin');
$cout=filter_input(INPUT_POST, 'cout');
$user_email=filter_input(INPUT_POST, 'signup_email');
	$cinn = strtotime($cin); // or your date as well
	$coutt = strtotime($cout);
	$datediff = $coutt - $cinn;

	$rounddatediff = round($datediff / (60 * 60 * 24));
	$sql = "INSERT INTO roombook(title,fname,lname,email,national,phone,troom,bed,nroom,meal,cin,cout,nodays) VALUES 
    ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$rounddatediff')";
	if(!mysqli_query($con,$sql)){
		die('Error in posting values');
	}
	echo "Your room is booked. Have a nice stay!!";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Redirecting to home page....</p>";
	mysqli_close($con);
	header("refresh:4;url=home.html");
?>