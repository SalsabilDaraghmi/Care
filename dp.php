<?php
$conn = mysqli_connect('localhost', 'root', '', 'webprojectdb');
    error_reporting(0);
    mysqli_set_charset($conn, 'utf8');
    $errors = array('password' => "", 'all' => "");
    
?>


