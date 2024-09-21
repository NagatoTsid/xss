<?php
if (isset($_POST['content'])) {
    $db = new SQLite3('contents.db');
    $content = $_POST['content'];
    // Sanitização: removendo tags de script e eventos on*
    $content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $content);
    $content = preg_replace('/on\w+="[^"]*"/i', "", $content);
    $stmt = $db->prepare('INSERT INTO contents (content) VALUES (:content)');
    $stmt->bindValue(':content', $content, SQLITE3_TEXT);
    $stmt->execute();
    header('Location: xsslab5.php');
}
?>
