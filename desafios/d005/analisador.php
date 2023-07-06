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
            $numeroReal = $_REQUEST["numeroReal"] ?? 0;
            $numeroInteiro = intval($numeroReal);
            $numeroFracionario = $numeroReal - $numeroInteiro;

            echo "Analisando o número <strong>". number_format($numeroReal,3,",",".") ."</strong> informado pelo usuário;";
            echo "<ul>
                <li>A parte inteira do número é <strong>" . number_format($numeroInteiro,0,",",".") ."</strong></li>
                <li>A parte fracionária do número é <strong>". number_format($numeroFracionario,3,",",".") ."</strong></li>
            </ul>";
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>