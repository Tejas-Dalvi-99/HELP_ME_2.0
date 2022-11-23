<?php
    session_start();
     
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('admin_Index.php');
        exit();
    }
    include('admin_conn.php');
    $query=mysqli_query($conn,"select * from admin where user_id='".$_SESSION['id']."'");
    $row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Success</title>
</head>
<body>
    <h2>Login Success</h2>
    <?php echo $row['user_email']; 
    header("Location: adminEdit.html");
    ?>
    <br>
    <a href="admin_logout.php">Logout</a>
</body>