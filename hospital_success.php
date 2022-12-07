<?php
    session_start();
     
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('hospital_Index.php');
        exit();
    }
    include('hospital_conn.php');
    $query=mysqli_query($conn,"select * from user where user_id='".$_SESSION['id']."'");
    $row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Success</title>
</head>
<body>
    <h2>Login Success</h2>
    <?php echo $row['user_email']; ?>
    <br>
    <a href="hospital_logout.php">Logout</a>
    <?php 
        header("Location: hospitalView.html");
    ?>
</body>
