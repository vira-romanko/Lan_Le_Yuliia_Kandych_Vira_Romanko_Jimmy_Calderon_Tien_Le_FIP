<?php

function createUser($fname, $username, $password, $email)
{
    $pdo = Database::getInstance()->getConnection();

    //TODO: build the proper SQL query with the information above
    //execute it to create a user in tbl_user

    //TODO: based on the execution result, if everything goes through
    //redirect to the index.php
    //Otherwise, return an error message

    $query_createuser = 'INSERT INTO `tbl_user` (user_fname,user_name,user_pass,user_email)';
    $query_createuser .= 'VALUES(:fname,:username,:password,:email);';
    $create_user = $pdo->prepare($query_createuser);
    $create_user_result = $create_user->execute(
        array(
            ":fname" => $fname,
            ":username" => $username,
            ":password" => $password,
            ":email" => $email,

        )
    );
    if ($create_user_result) {
        return 'user created';
    } else {
        return 'This individual sucks!';
    }
}
