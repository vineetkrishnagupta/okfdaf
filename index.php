<?php
session_start();
$request = $_SERVER['REQUEST_URI'];
$request = str_replace('/iWCN/torouter', '', $request);
//echo $request;
switch ($request) {
    case '/' :
        if(isset($_SESSION['id'])){
            require __DIR__ . '/views/index.php';
            break;
        }
        else{
            require __DIR__ . '/views/login.php';
            break;
        }

    case '/login' :
        require __DIR__ . '/views/login.php';
        break;

    case '/registration' :
        require __DIR__ . '/views/registration.php';
        break;

    case '/customer' :
        require __DIR__ . '/views/coustomer.php';
        break;

    case '/add/admin' :
            require __DIR__ . '/views/addadmin.php';
            break;
            
    case '/add/customer' :
        require __DIR__ . '/views/addcoustomer.php';
        break;

    default:
        echo "404 Page not found";
        break;
    
}

?>