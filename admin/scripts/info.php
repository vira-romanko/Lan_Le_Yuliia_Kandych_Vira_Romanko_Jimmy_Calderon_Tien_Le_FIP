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

function updateInfo($info)
{



    try {
        $pdo = Database::getInstance()->getConnection();

        $cover = $info['image'];
        $upload_file = pathinfo($cover['name']);
        $accepted_types = array('gif', 'jpg', 'png', 'jpeg', 'webp');
        if (!in_array($upload_file['extension'], $accepted_types)) {
            throw new Exception('Wrong file type');
        }

        $image_path = '../images/home_page/';
        $generated_name = md5($upload_file['filename'] . time());
        $generated_filename = $generated_name . '.' . $upload_file["extension"];
        $targetpath = $image_path . $generated_filename;

        if (!move_uploaded_file($cover['tmp_name'], $targetpath)) {
            throw new Exception('Failed to move uploaded file, check permission!');
        };




        $insert_info_query = 'UPDATE `tbl_info` SET name=:name,link=:link,description=:description,image=:image';
        $insert_info_query .= ' WHERE info_id=:info_id';

        $insert_info = $pdo->prepare($insert_info_query);
        $insert_info_result = $insert_info->execute(
            array(
                ':name' => $info['name'],
                ':link' => $info['link'],
                ':description' => $info['description'],
                ':image' => $generated_filename,
                ':info_id' => $info['id']
            )
        );



        // echo $insert_info->debugDumpParams();


        redirect_to('index.php');
    } catch (Exception $e) {
        $err = $e->getMessage();
        return $err;
    }
}

function addInfo($info)
{
    try {
        $pdo = Database::getInstance()->getConnection();

        $cover = $info['image'];
        $upload_file = pathinfo($cover['name']);
        $accepted_types = array('gif', 'jpg', 'png', 'jpeg', 'webp');
        if (!in_array($upload_file['extension'], $accepted_types)) {
            throw new Exception('Wrong file type');
        }

        $image_path = '../images/home_page/';
        $generated_name = md5($upload_file['file_name'] . time());
        $generated_filename = $generated_name . '.' . $upload_file["extension"];
        $targetpath = $image_path . $generated_filename;

        if (!move_uploaded_file($cover['tmp_name'], $targetpath)) {
            throw new Exception('Failed to move uploaded file, check permission!');
        };



        $insert_info_query = 'INSERT INTO tbl_info(image,name,link,description)';
        $insert_info_query .= ' VALUE(:image,:name,:link,:description)';

        $insert_info = $pdo->prepare($insert_info_query);
        $insert_info_result = $insert_info->execute(
            array(
                ':name' => $info['title'],
                ':link' => $info['link'],
                ':description' => $info['description'],
                ':image' => $generated_filename,
            )
        );



        redirect_to('index.php');
    } catch (Exception $e) {
        $err = $e->getMessage();
        return $err;
    }
}

function getSingleInfo($id)
{
    //TODO: refer the function above to finish this one

    // 
    $pdo = Database::getInstance()->getConnection();
    $query = "SELECT * FROM `tbl_info` WHERE info_id=$id;";

    $results = $pdo->query($query);

    if ($results) {
        return $results;
    } else {
        return 'There was a problem';
    }
}


function deleteInfo($id)
{
    $pdo = Database::getInstance()->getConnection();
    if (isset($id)) {
        $query = "DELETE FROM `tbl_info` WHERE info_id = :id";

        $set_query = $pdo->prepare($query);

        $get_query = $set_query->execute(
            array(
                ":id" => $id
            )
        );


        if ($get_query && $set_query->rowCount() > 0) {
            redirect_to('admin_infolist.php');
        } else {
            return false;
        }
    } else {
        return "Something wrong";
    }
}
