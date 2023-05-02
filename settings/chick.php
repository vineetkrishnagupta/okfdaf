<?php

  //session_start();
if(!isset($_SESSION['id'])){
  
    // remove all session variables
    session_unset();
    // destroy the sessionz
    session_destroy();
    header("Location: ../login");
}
?>