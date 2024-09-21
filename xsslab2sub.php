<?php
// Conectar ao banco de dados
$db = new SQLite3('comments.db');

// Inserir comentário no banco de dados
if (isset($_POST['comment'])) {
    $comment = $_POST['comment'];
    $stmt = $db->prepare('INSERT INTO comments (comment) VALUES (:comment)');
    $stmt->bindValue(':comment', $comment, SQLITE3_TEXT);
    $stmt->execute();
}

// Redirecionar de volta para a página principal
header('Location: xsslab2.php');
?>
