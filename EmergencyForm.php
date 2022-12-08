<?php

    $NameOrPhone = $_POST['NameOrPhone']; 
    $details = $_POST['details']; 
    $photo = $_POST['photo'];

    if (!empty($NameOrPhone) || !empty($details) || !empty($photo)) {
        $host = "localhost" ; 
        $dbUsername = "root" ; 
        $dbPassword = "" ; 
        $dbname = "login" ;
        
        $conn = new mysqli($host , $dbUsername , $dbPassword , $dbname) ; 
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()) ; 
        }
        else {
            $INSERT = "INSERT Into emergencytable(NameOrPhone , details , photo) values( ? , ? , ?)" ; 
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss" , $NameOrPhone , $details , $photo);  
                $stmt->execute();
                echo "Details Submitted Successfully !"; 
            $stmt->close() ; 
            $conn->close() ; 
        }
    }
    else{
        echo "Please fill all fields" ; 
        die() ; 
    }
    header("refresh:3; url=index.html");

?>
