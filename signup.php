<?php
$user_name=filter_input(INPUT_POST, 'signup_fullname');
$user_pass=filter_input(INPUT_POST, 'signup_password');
$user_email=filter_input(INPUT_POST, 'signup_email');
echo $user_pass;
$host="localhost:8888";
$user="root";
$password="";
$db="hiotel_db";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);

$sql="insert into login(usname,pass,fullname,email) values('$user_email','$user_pass','$user_name','$user_email')";

if($conn->query($sql)){
  header("Location:login.php");
}
else{
  echo"error";}
  $conn->close();

?>