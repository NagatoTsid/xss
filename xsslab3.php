<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 3: XSS Refletido com Sanitização Simples</title>
</head>
<body>
    <h1>Formulário de Mensagem</h1>
    <form action="process.php" method="GET">
        <label for="message">Mensagem:</label>
        <input type="text" id="message" name="message">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
