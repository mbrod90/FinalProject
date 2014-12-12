<?php include('header-login.php'); ?>


<?php
// If user_id is found in the session,
if (isset($_SESSION['user_id'])) {
  // Set variable $user_id to that session user's id
  $user_id = $_SESSION['user_id'];
} else {
  // If user_id session was not found, show them a link to login
  die('You must login first! <a href="login.php">Click here to login!</a>');
}

?>

<h1>Cupcake Love</h1>
<img src="cupcake.jpg" alt="" class="header-image">


<?php include('footer.php'); ?>
