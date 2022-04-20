<?php
 session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lambar');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


function isLoggedin(){
    if(isset($_SESSION['loginform']) && $_SESSION['loginform'] > 0){
        return true;
    }
    return false;
}

function login_error_redirect(){
    $_SESSION['error_flash'] = 'You must be logged in to access that page!';
    header('Location: signin.php');
}
?>