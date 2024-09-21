<?php
if (isset($_POST['comment'])) {
    $db = new SQLite3('comments.db');
    $comment = $_POST['comment'];
    // Sanitização parcial: remove apenas a palavra "script"
    $comment = str_ireplace("script", "", $comment);
    $stmt = $db->prepare('INSERT INTO comments (comment) VALUES (:comment)');
    $stmt->bindValue(':comment', $comment, SQLITE3_TEXT);
    $stmt->execute();
    header('Location: xsslab4.php');
}
?>
