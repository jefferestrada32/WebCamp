<?php 
$user = 'root';
$password = 'condor77';
$db = 'webcamp';
$host = 'localhost';
    $conn = new mysqli($host, $user, $password, $db);
    
    if($conn -> connect_errno){
        echo $conn -> connect_error;
    }
?>