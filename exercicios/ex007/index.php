<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo o PHP_SELF</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1: </label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" required>
            <label for="valor2">Valor 2: </label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" required>
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da Soma:</h2>
        <?php 
            $valor1 = $_REQUEST['valor1'] ?? 0;
            $valor2 = $_REQUEST['valor2'] ?? 0;

            echo "<p>A soma de $valor1 e $valor2 é igual a: <strong>" . $valor1 + $valor2."</strong></p>";
        ?>
    </section>
</body>
</html>