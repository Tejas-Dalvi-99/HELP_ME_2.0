<?php
    if(isset($_POST['login'])){
         
        session_start();
        include('admin_conn.php');
     
        $username=$_POST['username'];
        $password=$_POST['password'];
     
        $query=mysqli_query($conn,"select * from admin where user_name='$username' && user_password='$password'");
     
        if (mysqli_num_rows($query) == 0){
            $_SESSION['message']="Login Failed. admin not Found!";
            header('location:admin_Index.php');
        }
        else{
            $row=mysqli_fetch_array($query);
             
            if (isset($_POST['remember'])){
                //set up cookie
                setcookie("user", $row['user_name'], time() + (86400 * 30)); 
                setcookie("pass", $row['user_password'], time() + (86400 * 30)); 
            }
             
            $_SESSION['id']=$row['user_id'];
            header('location:admin_success.php');
        }
    }
    else{
        header('location:admin_Index.php');
        $_SESSION['message']="Please Login!";
    }
?>