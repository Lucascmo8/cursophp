<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numeroReal = $_REQUEST["numeroReal"];
            $numeroInteiro = intval($numeroReal);
            $numeroFracionario = round(fmod($numeroReal,1),2);

            echo "Analisando o número <strong>$numeroReal</strong> informado pelo usuário;";
            echo "<ul>
                <li>A parte inteira do número é <strong>$numeroInteiro</strong></li>
                <li>A parte fracionária do número é <strong>$numeroFracionario</strong></li>
            </ul>";
        ?>
        <button><a href="/">Voltar</a></button>
    </main>
</body>
</html>