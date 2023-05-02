<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    $id = $_GET['id'];
    include ('connection.php');
    $sql = "DELETE FROM customer WHERE id=$id";

    $conn->exec($sql);
    echo "Record deleted successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>