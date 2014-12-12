<?php
  include('header-logout.php')
?>



  <?php
  $sqlQuery = "SELECT * FROM users WHERE id = $user_id";
  $results = $link->query($sqlQuery);
  $rows = $results->num_rows;
  if ($rows >= 1) {
            // Do something
    while ($row = $results->fetch_assoc()) {
      echo "<div><img src='". $row['image'] ."'></div>";
      echo $row['name'];
    }
  } else {
            // No rows, no results from query
    echo "No results";
  }
  ?>

  <?php
  $commentSqlQuery = "SELECT * FROM comments INNER JOIN users ON comments.user_id=users.id WHERE to_user_id = $user_id";
  $comments_results = $link->query($commentSqlQuery);
  $comment_rows = $comments_results->num_rows;
  if ($comment_rows >= 1) {
            // Has comments
    while ($comment_row = $comments_results->fetch_assoc()) {
                    // Avatar + username
      echo '<figure class="avatar">';
      echo '<img src="'. $comment_row["image"]  .'">';
      echo "<figcaption>". $comment_row['name'] ."</figcaption></figure>";
                    // Comment
      echo '<div class="comment">';
      echo $comment_row['comment'];
      echo "</div>";
      echo "<hr>";
    }
  } else {
    echo "No Comments";
  }
  ?>

</div>

<?php $comment = (isset($_POST['comment'])) ? $_POST['comment'] : FALSE; ?>

<form action="post.php" method="post">
  <textarea name="comment" id="comments" cols="60" rows="10"></textarea>
  <input type="submit">
</form>

<?php include('footer.php'); ?>