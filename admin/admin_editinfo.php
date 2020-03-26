<?php
require '../load.php';
confirm_logged_in();

$get_info = getInfo();

if (isset($_POST['submit'])) {
    $infos = array(
        'antiretroviral_therapy' => $_POST['antiretroviral_therapy'],
        'newly_infected' => $_POST['newly_infected'],
        'global' => $_POST['global'],
    );


    $message = updateInfo($infos);
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
    <form action="admin_editinfo.php" method='POST'>
        <?php while ($row = $get_info->fetch(PDO::FETCH_ASSOC)) : ?>

            <label><?php echo $row['name'] ?></label>
            <input type='text' name='<?php echo trim($row['name']); ?>' value='<?php echo $row['value'] ?>'><br>
        <?php endwhile;
        ?>
        <button type="submit" name="submit">Edit Info</button>
    </form>
</body>

</html>