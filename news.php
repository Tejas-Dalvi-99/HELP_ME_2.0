<?php
    $news1 = $_POST['news1']; 
    $news2 = $_POST['news2']; 
    $news3 = $_POST['news3']; 

    if (!empty($news1) || !empty($news2) || !empty($news3)) {
        $host = "localhost" ; 
        $dbUsername = "root" ; 
        $dbPassword = "" ; 
        $dbname = "login" ;
        
        $conn = new mysqli($host , $dbUsername , $dbPassword , $dbname) ; 
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()) ; 
        }
        else {
            $Del = "TRUNCATE TABLE `newstable`";
            $result = mysqli_query($conn, $Del);
            $INSERT = "INSERT Into NewsTable(news1 , news2 , news3) values(? , ? , ?) " ;  
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss" , $news1 , $news2 , $news3);  
                $stmt->execute();
                echo "Details Submitted Successfully ! " ;  
            $stmt->close() ; 
            $conn->close() ; 
        }
    }
    else{
        echo "Please fill all fields" ; 
        die() ; 
    }

?>