<?php
include('header-logout.php');

// If user_id is found in the session,
if (isset($_SESSION['user_id'])) {
    // Set variable $user_id to that session user's id
    $user_id = $_SESSION['user_id'];
} else {
    // If user_id session was not found, show them a link to login
    die('You must login first! <a href="login.php">Click here to login!</a>');
}
?>

    <center>
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
    </center>

<div class="commentContainer">

    <?php
/* SELECT ALL
    FROM first_table
    INNER JOIN
    second_table
    ON
    first_table.FIELD = second_table.FIELD
*/
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
<?php include('footer.php') ?>