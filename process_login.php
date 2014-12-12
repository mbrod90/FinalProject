<?php include('header-logout.php') ?>

<?php
$username = (isset($_POST['username'])) ? $_POST['username'] : FALSE;
$password = (isset($_POST['password'])) ? md5($_POST['password']) : FALSE;

if ($username && $password) {
    // input was recieved, continue to do stuff

    $sqlQuery = "SELECT * FROM users WHERE username = '$username'";
    $results = $link->query($sqlQuery);
    $rows = $results->num_rows;

    if ($rows >= 1) {
        // Success - the username was found
        // echo "Password from form:" . $password . "<br>";
        while ($row = $results->fetch_assoc()) {
           // echo $row['password'];

            // Login success
            if ($row['password'] === $password) {
                echo "Logged in! yay!";

                // Debugging::

                // echo "<br />Username: " . $row['username'];
                // echo "<br />Password: " . $row['password'];
                // echo "<br />ID: " . $row['id'];
                // echo "<br />Name: " . $row['name'];

                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['loggedIn'] = TRUE;
            } else {
                echo "Incorrect password";
            }

        }

    } else {
        die("Your username was not valid");
    }

} else {
    die("You are missing a username or password");
}
?>


<?php include('footer.php') ?>