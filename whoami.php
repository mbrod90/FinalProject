<?php

session_start();

// $_SESSION['username'] is not set
if (!isset($_SESSION['username'])) {
    // Set $username to no username found
    $username = "No username found";
} else {
    // Set to session username
    $username = $_SESSION['username'];
}

echo "You are: " . $username;

?>
