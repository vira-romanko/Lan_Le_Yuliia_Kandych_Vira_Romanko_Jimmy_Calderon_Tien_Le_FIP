<?php
require_once '../load.php';
confirm_logged_in();

$id = $_GET['id'];

$current_product = getSingleInfo($id);



if (!$current_product) {
    $message = 'Failed to get user info';
}

if (isset($_POST['submit'])) {
    $info = array(
        'id' => $id,
        'image'     =>  $_FILES['image'],
        'name'     =>  $_POST['name'],
        'value'      =>  $_POST['value'],
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
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>

    <?php echo !empty($message) ? $message : ''; ?>
    <form action='admin_editinfo.php?id=<?php echo $id; ?>' method="post" enctype="multipart/form-data">
        <?php if ($current_product) : ?>
            <?php while ($product_info = $current_product->fetch(PDO::FETCH_ASSOC)) : ?>
                <label>Product Image:</label><br>
                <input type='file' name="image" value=""><br><br>

                <label>Product Name:</label><br>
                <input type='text' name="name" value="<?php echo $product_info['name']; ?>"><br><br>

                <label>Product Value:</label><br>
                <input type='text' name="value" value="<?php echo $product_info['value']; ?>"><br><br>

                <label>Product Description:</label><br>
                <textarea type='text' name="description" value=""><?php echo $product_info['description']; ?></textarea><br><br>



                <button type="submit" name="submit">Edit Info</button>
            <?php endwhile; ?>
        <?php endif; ?>
    </form>
</body>

</html>