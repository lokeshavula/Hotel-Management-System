<?php 

$host="localhost";
$user="root";
$password="";
$db="hiotel_db";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where usname='".$uname."'AND pass='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header("location:home.html");
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>

	body{
		margin: 0;
        padding: 0;
        background-image: url("image1.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
	}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
    margin-top: 260px;
}

input[type="text"],input[type="password"]{
	margin-top: 40px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
.navbar {
            height: 80px;
            width: 100%;
            background: black;
            overflow: hidden;
            background-color: #ffb3b3;
            position: fixed;
            top: 0px;
            left: 0px;
        }

        .navbar ul {
            float: right;
            margin-right: 20px;
        }

        .navbar ul li {
            list-style: none;
            margin: 0 8px;
            display: inline-block;
            line-height: 80px;
			font-weight: bold;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #071625;
            font-size: 20px;
            transition: .4s;
            font-weight: bold;
        }

        .navbar ul li a:hover {
            background: white;
            border-radius: 2px;
        }
        h2{
            color: white;
        }
	</style>
    
</head>
<body>
	<div class="navbar">
        <ul>
            <li>HOME</li>
            <li>ABOUT US</li>
            <li>ROOMS</li>
            <li>FOOD</li>
            <li>CART</li>
            <li>CONTACT US</li>
        </ul>
    </div>
	<div class="container">
		<form method='POST' action='#'>
        <h2>SIGN IN</h2>
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>