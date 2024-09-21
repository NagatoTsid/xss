<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 4: XSS Armazenado com Sanitização Parcial</title>
</head>
<body>
    <h1>Deixe um Comentário</h1>
    <form action="submit.php" method="POST">
        <label for="comment">Comentário:</label>
        <input type="text" id="comment" name="comment">
        <button type="submit">Enviar</button>
    </form>
    <h2>Comentários</h2>
    <?php
        $db = new SQLite3('comments.db');
        $results = $db->query('SELECT comment FROM comments');
        while ($row = $results->fetchArray()) {
            // Sanitização parcial: remove apenas a palavra "script"
            $comment = str_ireplace("script", "", $row['comment']);
            echo "<p>" . $comment . "</p>";
        }
    ?>
</body>
</html>
