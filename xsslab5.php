<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 5: XSS com Sanitização Parcial e Bypass Criativo</title>
</head>
<body>
    <h1>Envie seu Conteúdo</h1>
    <form action="submit3.php" method="POST">
        <label for="content">Conteúdo:</label>
        <textarea id="content" name="content"></textarea>
        <button type="submit">Enviar</button>
    </form>
    <h2>Conteúdos Enviados</h2>
    <?php
        $db = new SQLite3('contents.db');
        $results = $db->query('SELECT content FROM contents');
        while ($row = $results->fetchArray()) {
            // Sanitização: removendo tags de script e eventos on*
            $content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $row['content']);
            $content = preg_replace('/on\w+="[^"]*"/i', "", $content);
            echo "<div>" . $content . "</div>";
        }
    ?>
</body>
</html>
