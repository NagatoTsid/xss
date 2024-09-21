<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Feedback Oculto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .feedback-form {
            max-width: 600px;
            margin: 0 auto;
        }
        .feedback-form textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
        }
        .feedback-form button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .feedback-form button:hover {
            background-color: #0056b3;
        }
        .hidden-message {
            display: none; /* Oculta a mensagem para não ser visível */
        }
        .status-message {
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Deixe seu Feedback</h1>
    <form id="feedbackForm" class="feedback-form">
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" placeholder="Digite seu feedback aqui..."></textarea>
        <button type="submit">Enviar</button>
    </form>

    <div id="hiddenMessage" class="hidden-message"></div>
    <div id="statusMessage" class="status-message"></div>

    <script>
        document.getElementById('feedbackForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            const feedback = document.getElementById('feedback').value;
            const hiddenMessageDiv = document.getElementById('hiddenMessage');
            const statusMessageDiv = document.getElementById('statusMessage');

            // Adiciona o feedback diretamente no HTML, criando uma vulnerabilidade XSS
            hiddenMessageDiv.innerHTML = feedback;

            // Exibe a mensagem de status
            statusMessageDiv.textContent = 'Feedback enviado';

            // Opcional: Código adicional para verificar se o script funciona
            // alert('Feedback recebido, verifique o código');
        });
    </script>
</body>
</html>
