<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $dividendo = $_REQUEST['dividendo'] ?? 0;
        $divisor = $_REQUEST['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>" required>

            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>" min="1" required>

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão:</h2>
        <?php 
            $resto = $dividendo % $divisor;
            $quociente = floor($dividendo / $divisor);

            echo "<p>O dividendo é $dividendo</p>";
            echo "<p>O divisor é $divisor</p>";
            echo "<p>O Resto é $resto</p>";
            echo "<p>O quociente é $quociente</p>";
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>  
    </section>
</body>
</html>