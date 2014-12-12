<?php

session_start();

// server, username, password, database
$link = mysqli_connect('127.0.0.1','root','root','phpfall');

if (mysqli_connect_errno()) {
    die('Could not connect to the server: ' . mysqli_error());
}

?>
