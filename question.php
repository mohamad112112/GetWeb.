<?php
    include 'connection.php';
    if(isset($_POST['send'])){
        $msg = "";
        $username = trim($_POST['name']);
        $email = trim($_POST['email']);
        $pwd1 = trim($_POST['question']);
       
       
          
            
         
                $sql = "INSERT INTO contact (`name`, `email`, `question`) VALUES (?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$username,$email,$pwd1]);
                $msg .="successfully sending";
               
        
     
        header("Location: index.php?msg=".$msg); 
    }
	
	