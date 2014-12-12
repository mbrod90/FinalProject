<?php include('header-login.php'); ?>


<?php

// If my logged in session flag is set, the user is logged in so they dont need to login again
if (isset($_SESSION['loggedIn'])) {
    echo "You are already logged in! <a href='logout.php'>Click here to logout</a>";
    echo "<a href='main-page.php'>Admin Page</a>";
} else {
    // If the flag is not found, show the login form
    echo '<form action="process_login.php" method="POST">';
    echo '<input type="text" name="username" placeholder="Username">';
    echo '<input type="password" name="password" placeholder="Password">';
    echo '<input type="submit" value="submit">';
    echo '</form>';
}

?>


<?php include('footer.php'); ?>
