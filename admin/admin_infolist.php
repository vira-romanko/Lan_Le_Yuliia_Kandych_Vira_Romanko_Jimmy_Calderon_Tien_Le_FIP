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
        <title>Info List</title>
    </head>

    <body>
        <h1>Info List</h1>
        <table>
            <tr>
                <th>info ID</th>
                <th>Title</th>
                <th>Value</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>

            <?php
            while ($row = $get_info->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?php echo $row['info_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['value']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><a href="admin_editinfo.php?id=<?php echo $row['info_id']; ?>">Edit</a></td>
                    <td><a href="admin_infolist.php?id=<?php echo $row['info_id']; ?>">Delete</a></td>

                </tr>

            <?php endwhile; ?>



        </table>
    </body>

    </html>

<?php endif; ?>