<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        $email = $_POST['email'];
        $password2 = $_POST['password'];
        echo $email;
        echo $password;
        $i = 0;
       
        require "connection.php";
        $stmt = $conn->query("SELECT * FROM user where email = '$email' and password = '$password2'");
        while ($row = $stmt->fetch()) {
            session_start();
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['name'];
            $_SESSION["email"] =  $row['email'];
            $_SESSION["password"] = $row['password'];
            $i++;
            header("Location: ../");              
        }
        if($i == 0){
            header("Location: ../login");
        }
        else{
            header("Location: ../");

        }
} 
?>