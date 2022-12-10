<?php

session_start();

include('config/dbcon.php');

if(isset($_POST['register_btn'])){
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
    
    $check_email_query="SELECT email FROM users WHERE email='$email'";
    $check_email_query_run=mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0){
        $_SESSION['message']="Email already registered";
        header('Location: ../account.php');
    }
    else{
        if($password==$cpassword)
    {
        $insert_query= "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
        $insert_query_run= mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $_SESSION['message']="Registered Successfully";
            header('Location: account.php');
        }
        
    }
    else{
        $_SESSION['message']="Passwords do not match";
        header('Location: account.php');
    }
    }

    
}

else if(isset($_POST['login_btn'])){
    $lusername=mysqli_real_escape_string($con, $_POST['lusername']);
    $lpassword=mysqli_real_escape_string($con, $_POST['lpassword']);

    $login_query="SELECT * FROM users WHERE username='$lusername' AND password='$lpassword'";
    $login_query_run=mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run)>0){
        
        $_SESSION['auth']=true;

        $userdata=mysqli_fetch_array($login_query_run);
        $lusername=$userdata['username'];
        $_SESSION['auth_user']=[
            'username'=>$lusername
        ];

        $_SESSION['message']="Logged In Successfully";
        header('Location: index.php');
    }
    else{
        $_SESSION['message']="Invalid Credentials";
        header('Location: account.php');
    }
}



?>