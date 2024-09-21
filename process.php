<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 3: XSS Refletido com Sanitização Simples</title>
</head>
<body>
    <h1>Mensagem Recebida</h1>
    <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            // Sanitização simples: remove a palavra "script"
            $message = str_ireplace("script", "", $message);
            echo "<p>Você enviou: " . $message . "</p>";
        }
    ?>
</body>
</html>
