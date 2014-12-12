<?php

include ('header-login.php');


// Set our input textbox values
$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : FALSE;
$image = (isset($_POST['image'])) ? $_POST['image'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : FALSE;
$password = (isset($_POST['password'])) ? md5($_POST['password']) : FALSE;

// Server-side validation, check if those values were inputted
if (!$first_name) {
    die("You need to enter your first name");
}


// SQL Logic

$emailSQL = "SELECT * FROM users WHERE username = '$username'";

// If my Email SQL results return something
if ($result = $link->query($emailSQL)) {

    if ($result->num_rows >= 1) {

        die("You can't register because that username is already in our DB");

    } else {

        $sql = "INSERT INTO users (name, image, username, password) VALUE ('$first_name','$image','$username','$password')";

        if ($link->query($sql)) {
            $last_inserted_id = $link->insert_id;
            $affected_rows = $link->affected_rows;
        } else {
            die("There was a MySQL Issue");
        }


        echo "Last inserted Id: " . $last_inserted_id;
        echo "<pre>";
        print_r($affected_rows);

    }


}




?>
