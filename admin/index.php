<?php

require_once '../load.php';
confirm_logged_in();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>

    <h2 class="p-5">Welcome! <?php echo $_SESSION['user_name']; ?></h2>
    <a class="p-3" href='admin_addinfo.php'>Add Info</a>
    <a class="p-3" href='admin_infolist.php'>Edit Info</a>
    <a class="p-3" href='admin_createuser.php'>Create User</a>
    <a class="p-3" href='admin_edituser.php'>Edit User</a>
    <a class="p-3" href='admin_deleteuser.php'>Delete User</a>
    <a class="p-3" href='../#/'>Return Home</a>
    <a class="p-3" href='admin_logout.php'>Sign Out</a>
</body>

</html>