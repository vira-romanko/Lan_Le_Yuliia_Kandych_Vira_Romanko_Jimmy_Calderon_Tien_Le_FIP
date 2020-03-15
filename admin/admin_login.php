<?php

require_once '../load.php';
$ip = $_SERVER['REMOTE_ADDR'];

$username = trim($_POST['username']);
$password = trim($_POST['password']);


if (!empty($username) && !empty($password)) {
    //Do the login here
    $message = login($username, $password, $ip);
} else {
    $message = "Please fill out the required fields";
}

echo json_encode($message, JSON_PRETTY_PRINT);
