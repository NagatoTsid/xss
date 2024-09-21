<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 2: XSS Armazenado Simples</title>
</head>
<body>
    <h1>Formulário de Comentário</h1>
    <form action="xsslab2sub.php" method="POST">
        <label for="comment">Comentário:</label>
        <input type="text" id="comment" name="comment">
        <button type="submit">Enviar</button>
    </form>

    <h2>Comentários</h2>
    <div id="comments">
        <?php
            // Conectar ao banco de dados
            $db = new SQLite3('comments.db');

            // Buscar e exibir todos os comentários
            $results = $db->query('SELECT comment FROM comments');
            while ($row = $results->fetchArray()) {
                echo "<p>" . $row['comment'] . "</p>";
            }
        ?>
    </div>
</body>
</html>
