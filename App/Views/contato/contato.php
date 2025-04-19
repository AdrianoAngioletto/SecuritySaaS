<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0d1117;
            color: #c9d1d9;
        }

        .form-page {
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #58a6ff;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #8b949e;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .form-container {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #58a6ff;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: #0d1117;
            color: #c9d1d9;
            border: 1px solid #30363d;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-container input:focus,
        .form-container textarea:focus {
            border-color: #58a6ff;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            color: #0d1117;
            background: linear-gradient(90deg, #58a6ff, #238636);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-container button:hover {
            background: linear-gradient(90deg, #238636, #58a6ff);
        }

        .form-container:hover {
            transform: scale(1.02);
        }

        /* Link para voltar */
        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #58a6ff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .back-link a:hover {
            color: #238636;
        }

        /* Animação */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Responsividade */
        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .subtitle {
                font-size: 14px;
                margin-bottom: 20px;
            }

            .form-container {
                padding: 20px;
            }

            .form-container button {
                font-size: 14px;
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 15px;
            }

            .form-container input,
            .form-container textarea {
                padding: 8px;
            }

            .form-container button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body class="form-page">

<!-- Título e legenda -->
<h1>Formulário de Contato</h1>
<p class="subtitle">Fale com nosso time de especialistas! Agende um pentest ou tire suas dúvidas sobre segurança digital.</p>

<!-- Formulário -->
<div class="form-container">
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem aqui" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>

<!-- Link para voltar -->
<div class="back-link">
    <a href="/">← Voltar para a página inicial</a>
</div>

<?php
require_once '../../Controllers/contato_controller.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $controller = new ContatoController();
    $controller->form($nome, $email, $mensagem);
}
?>

</body>
</html>