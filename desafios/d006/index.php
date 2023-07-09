]<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>" required>

            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>" required>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão:</h2>
        <?php 
            $dividendo = $_REQUEST['dividendo'] ?? 0;
            $divisor = $_REQUEST['divisor'] ?? 1;
            $resto = $dividendo % $divisor;
            $quociente = floor($dividendo / $divisor);

            echo "<p>O dividendo é $dividendo</p>";
            echo "<p>O divisor é $divisor</p>";
            echo "<p>O Resto é $resto</p>";
            echo "<p>O quociente é $quociente</p>";
        ?>
    </section>
</body>
</html>