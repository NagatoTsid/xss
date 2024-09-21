<?php
if (isset($_POST['feedback'])) {
    $db = new SQLite3('feedbacks.db');
    $feedback = $_POST['feedback'];
    // Sanitização: removendo tags de script
    $feedback = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $feedback);
    $stmt = $db->prepare('INSERT INTO feedbacks (feedback) VALUES (:feedback)');
    $stmt->bindValue(':feedback', $feedback, SQLITE3_TEXT);
    $stmt->execute();
    header('Location: xsslab7.php');
}
?>
