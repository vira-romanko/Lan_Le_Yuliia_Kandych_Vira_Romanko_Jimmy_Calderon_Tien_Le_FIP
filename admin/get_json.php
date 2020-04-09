<?php
require '../load.php';
$get_info = getInfo();

$result = array('info' => array());


while ($row = $get_info->fetch(PDO::FETCH_ASSOC)) {
    $single = $row;
    $results = array_push($result['info'], $single);
}

echo json_encode($result, JSON_PRETTY_PRINT);
