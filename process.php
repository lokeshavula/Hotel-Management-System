<?php
    require_once('connect.php');

    if(isset($_POST['btn-save'])){
        $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);
        $CPassword = mysqli_real_escape_string($con,$_POST['Cpass']);

        if(empty($UserName) || empty($Email) || empty($Password) || empty($CPassword)){
            echo 'Please Fill in the blank space';
        }
        if($Password != $CPassword){
            echo 'Sorry! Password not matched';
        }
        else{
            $Pass = md5($Password);
            $sql = "insert into users (UName, Email, Password) values ('$UserName','$Email','$Pass')";
            $result = mysqli_query($con,$sql);

            if($result){
                require_once('login.php');
            }
            else{
                echo 'Check your query!';
            }
        }
    }
?>