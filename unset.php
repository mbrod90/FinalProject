<?php

session_start();

// If variable is set
if (isset($_SESSION['username'])) {
    // Unset it
    unset($_SESSION['username']);
    $results = "Username unset";
} else {
    // If variable doesnt exist, show this:
    $results = "No username found";
}


echo $results;

?>
