<?php
require_once '../load.php';
confirm_logged_in();

$id = $_GET['id'];

$current_info = getSingleInfo($id);



if (!$current_info) {
    $message = 'Failed to get user info';
}

if (isset($_POST['submit'])) {
    $info = array(
        'id' => $id,
        'image'     =>  $_FILES['image'],
        'name'     =>  $_POST['name'],
        'link'      =>  $_POST['link'],
        'description'       =>  $_POST['description'],


    );

    $message = updateInfo($info);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info</title>
</head>

<body>
    <h1>Edit Info</h1>

    <?php echo !empty($message) ? $message : ''; ?>
    <form action='admin_editinfo.php?id=<?php echo $id; ?>' method="post" enctype="multipart/form-data">
        <?php if ($current_info) : ?>
            <?php while ($info_result = $current_info->fetch(PDO::FETCH_ASSOC)) : ?>
                <label>Image:</label><br>
                <input type='file' name="image" value=""><br><br>

                <label>Name:</label><br>
                <input type='text' name="name" value="<?php echo $info_result['name']; ?>"><br><br>

                <label>Link:</label><br>
                <input type='text' name="link" value="<?php echo $info_result['link']; ?>"><br><br>

                <label>Description:</label><br>
                <textarea type='text' name="description" value=""><?php echo $info_result['description']; ?></textarea><br><br>



                <button type="submit" name="submit">Edit Info</button>
            <?php endwhile; ?>
        <?php endif; ?>
    </form>
</body>

</html>