<?php

function getInfo()
{
    $pdo = Database::getInstance()->getConnection();

    //TODO: run the proper SQL query to fetch the user based on $id
    $query_info = 'SELECT * FROM `tbl_info`';


    //TODO: return the user data if the above query went through
    $get_info = $pdo->prepare($query_info);
    $fetch_info = $get_info->execute();

    // echo $get_user_id->debugDumpParams();
    if ($fetch_info && $get_info->rowCount()) {
        return $get_info;
    } else {
        return false;
    }
}

function updateInfo($infos)
{



    $pdo = Database::getInstance()->getConnection();
    for ($i = 0; $i < count($infos); $i++) {

        $query = "UPDATE `tbl_info` SET value=:value WHERE name=:name";

        $set_query = $pdo->prepare($query);
        $get_query = $set_query->execute(
            array(
                ':value' => array_values($infos)[$i],
                ':name' => array_keys($infos)[$i]
            )

        );
    }

    // $set_query->debugDumpParams();

    if ($set_query) {

        redirect_to('index.php');
    } else {
        return 'Update Failed......';
    }
}
