<?php
require '../load.php';
confirm_logged_in();

$get_info = getInfo();

$result = array('info' => array());

if (isset($_GET['json'])) {
    while ($row = $get_info->fetch(PDO::FETCH_ASSOC)) {
        $single = $row;
        $results = array_push($result['info'], $single);
    }

    echo json_encode($result, JSON_PRETTY_PRINT);
}

if (isset($_POST['submit'])) {
    $infos = array(
        'antiretroviral_therapy' => $_POST['antiretroviral_therapy'],
        'newly_infected' => $_POST['newly_infected'],
        'global' => $_POST['global'],
    );


    $message = updateInfo($infos);
}


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $delete_info_result = deleteInfo($id);

    if (!$delete_info_result) {
        $message = 'Failed to delete user';
    }
}

?>

<?php if (!isset($_GET['json'])) : ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Info List</title>
    </head>

    <body>
        <h1 class="m-5">Info List</h1>
        <table class="m-5">
            <tr>
                <th class="p-3">info ID</th>
                <th class="p-3">Title</th>
                <th class="p-3">Link</th>
                <th class="p-3">Description</th>
                <th class="p-3">Edit</th>
                <th class="p-3">Delete</th>

            </tr>

            <?php
            while ($row = $get_info->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td class="p-3"><?php echo $row['info_id']; ?></td>
                    <td class="p-3"><?php echo $row['name']; ?></td>
                    <td class="p-3"><?php echo $row['link']; ?></td>
                    <td class="p-3"><?php echo $row['description']; ?></td>
                    <td class="p-3"><a href="admin_editinfo.php?id=<?php echo $row['info_id']; ?>">Edit</a></td>
                    <td class="p-3"><a href="admin_infolist.php?id=<?php echo $row['info_id']; ?>">Delete</a></td>

                </tr>

            <?php endwhile; ?>



        </table>
        <a class="p-5" href="./">Return</a>
    </body>

    </html>

<?php endif; ?>