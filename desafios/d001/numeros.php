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
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_REQUEST["numero"] ?? 1;
            $numeroAntecessor = $numero - 1;
            $numeroSucessor = $numero + 1;
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu <em>
                antecessor é <strong>$numeroAntecessor</strong></p>";
                echo "<p>O seu sucessor
            </em> é <strong>$numeroSucessor</strong></p>";
        ?>
        <p><a href="/">&#x2b05 Voltar</a></p>
    </main>
</body>
</html>