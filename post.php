<?php
$user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : FALSE;
$comment = (isset($_POST['comment'])) ? $_POST['comment'] : FALSE;
$to_user_id = (isset($_POST['to_user_id'])) ? $_POST['to_user_id'] : FALSE;
        $sql = "INSERT INTO comments (user_id, comment, to_user_id) VALUE ('$user_id','$comment','$to_user_id')";
        if ($link->query($sql)) {
            $last_inserted_id = $link->insert_id;
            $affected_rows = $link->affected_rows;
        } else {
            die("There was a MySQL Issue");
        }
?>