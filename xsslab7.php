<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 6: XSS Oculto</title>
</head>
<body>
    <h1>Envie seu Feedback</h1>
    <form action="submit4.php" method="POST">
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback"></textarea>
        <button type="submit">Enviar</button>
    </form>
    <h2>Feedbacks Enviados</h2>
    <?php
        $db = new SQLite3('feedbacks.db');
        $results = $db->query('SELECT feedback FROM feedbacks');
        while ($row = $results->fetchArray()) {
            // Exibindo apenas um texto dizendo "Feedback enviado"
            echo "<div>Feedback enviado</div>";
        }
    ?>
</body>
</html>
