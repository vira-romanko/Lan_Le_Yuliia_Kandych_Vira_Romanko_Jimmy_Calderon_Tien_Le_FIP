<?php

require_once '../load.php';
confirm_logged_in();


$fname = trim($_POST['fname']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);

if (empty($fname) || empty($username) || empty($password) || empty($email)) {
    $message = 'Please fill required fields';
} else {
    $message = createUser($fname, $username, $password, $email);
}


echo json_encode($message);
