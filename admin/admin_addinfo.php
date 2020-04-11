<?php

require_once '../load.php';
confirm_logged_in();



if (isset($_POST['submit'])) {
    $info = array(
        'image'     =>  $_FILES['image'],
        'title'     =>  $_POST['title'],
        'description'      =>  $_POST['description'],
        'link'      =>  $_POST['link'],


    );



    $result = addInfo($info);
    $message = $result;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Info</title>
</head>

<body>
    <?php echo !empty($message) ? $message : ''; ?>
    <form action='admin_addinfo.php' method="post" enctype="multipart/form-data">
        <label>Info Image:</label><br>
        <input type='file' name="image" value=""><br><br>

        <label>Info Title:</label><br>
        <input type='text' name="title" value=""><br><br>

        <label>Info link:</label><br>
        <input type='text' name="link" value=""><br><br>

        <label>Info Description:</label><br>
        <textarea type='text' name="description" value=""></textarea><br><br>


        <button type="submit" name="submit">Add info</button>
    </form>
</body>

</html>