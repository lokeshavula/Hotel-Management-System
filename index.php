<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
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
            .signup-form{
                width: 300px;
                padding: 20px;
                text-align: center;
                background: rgba(44, 62, 80,0.7);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                overflow: hidden;
                border-radius: 05px;
                color: white;
            }
            .signup-form img{
                width: 50%;
                height: 50%;
            }
            .signup-form input
            {
                display: block;
                width: 100%;
                padding-left: 10px;
                height: 44px;
                box-sizing: border-box;
                outline: none;
                border: none;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
            }
            .txt{
                margin: 20px 0px;
                border-radius: 05px;
            }
            .btn{
                margin-top: 60px;
                margin-bottom: 20px;
                background: #487eb0;
                color: #fff;
                border-radius: 40px;
                cursor: pointer;
                transition: 0.8s;
            }
            .btn:hover{
                transform: scale(0.96);
            }
            .signup-form a{
                text-decoration:none;
                color: palevioletred;
                font-family: Arial, Helvetica, sans-serif;
                padding: 10px;
                transition: 0.8s;
                display: block;
            }
            .signup-form a:hover{
                background: rgba(0,0,0,0.3);
                color: white;
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
        </style>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li>HOME</li>
                <li>ABOUT US</li>
                <li>ROOMS</li>
                <li>FOOD</li>
                <li>FEEDBACK</li>
            </ul>
        </div>
        <div class="signup-form">
        <form id="signup_form" method="POST" action="signup.php">
            <h2>SIGN UP</h2>
            <label for="fullname">Full Name</label>
            <input type="text" id="signup_fullname" name="signup_fullname">
            <label for="email">Email ID</label>
            <input type="email" id="signup_email" name="signup_email">
            <label for="signup_password1">Password</label>
            <input type="password" id="signup_password" name="signup_password">
            <label for="signup_password">Confirm</label>
            <input type="password" id="signup_password" name="signup_password">
            <button id="signup_button" type="submit" form="signup_form" value="Submit">Sign up</button>

        </form>
        <div onclick="switchVisible()"
            style="text-align: center;padding: 10px; text-decoration: underline; cursor: pointer;"><a href="login.php">Sign In</a></div>
		</div>
    <script>
        function switchVisible() {
            var x = document.getElementById("signin");
            var y = document.getElementById("signup");
            if (x) {
                if (x.style.display == 'none') {
                    x.style.display = 'block';
                    y.style.display = 'none';
                }
                else {
                    x.style.display = 'none';
                    y.style.display = 'block';
                }
            }
        }

    </script>
                <a href="login.php">Already have an account</a>
                <a href="./admin/home.php">Admin Login</a>
            </form>
            <!-- <img src="user.jpeg"> -->
            <!-- <form action="process.php" method="POST">
                <input type="text" placeholder="User Name" class="txt" name="UserName">
                <input type="email" placeholder="Email" class="txt" name="Email">
                <input type="password" placeholder="Password" class="txt" name="Password">
                <input type="password" placeholder="Confirm Password" class="txt" name="Cpass">
                <input type="submit" value="Create an account" class="btn" name="btn-save">
                <div id="signup" style="display: none;"> -->
    </body>
</html>