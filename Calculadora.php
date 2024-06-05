<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Tabuada</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: #f8b195;
            padding: 15px;
            text-align: center;
        }
        .navbar h1 {
            color: white;
            margin: 0;
            font-size: 24px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px);
        }
        .content {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        .content h1 {
            color: #f67280;
            margin-bottom: 20px;
        }
        .content ul {
            list-style: none;
            padding: 0;
        }
        .content li {
            background: #c2e9fb;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .content a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #f67280;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .content a:hover {
            background: #c06c84;
        }
        .footer {
            background: #f8b195;
            padding: 10px;
            text-align: center;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Calculadora de Tabuada</h1>
    </div>
    <div class="container">
        <div class="content">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = intval($_POST['numero']);
                echo "<h1>Tabuada do $numero</h1>";
                echo "<ul>";
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "<li>$numero x $i = $resultado</li>";
                }
                echo "</ul>";
            } else {
                echo "<h1>Erro ao processar o formulário.</h1>";
            }
            ?>
            <a href="index.html">Voltar</a>
        </div>
    </div>
    <div class="footer">
        <p>Desenvolvido por Brenda Lorrany</p>
    </div>
</body>
</html>
