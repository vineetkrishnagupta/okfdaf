<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password2 = $_POST['password'];

    echo $name;
    echo $email;
    echo $password2;
    require "connection.php";
    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password2')";
    $conn->exec($sql);
    echo "New record created successfully";
    header("Location: ../");
}
?>