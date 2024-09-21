<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 1: XSS Refletido Simples</title>
</head>
<body>
    <h1>Digite O Seu comentarioo</h1>
    <form action="" method="GET">
        <label for="comment">Comentário:</label>
        <input type="text" id="comment" name="comment">
        <button type="submit">Enviar</button>
    </form>

    <!-- Área onde o comentário será exibido -->
    <div id="result">
        <?php
            if (isset($_GET['comment'])) {
                $comment = $_GET['comment'];
                echo "<p>Comentário: $comment</p>";
            }
        ?>
    </div>
</body>
</html>
