<?php include('header-login.php') ?>

<?php
// Remove all sessions
session_destroy();
echo "All sessions are gone!";

?>

<?php include('footer.php') ?>
