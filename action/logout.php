<?php

    session_start();
    // remove all session variables
    session_unset();
    // destroy the sessionz
    session_destroy();
    header("Location: ../login");

?>
