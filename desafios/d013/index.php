<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valorParaSaque">Qual valor você deseja sacar? (em R$)</label>
            <input type="number" name="valorParaSaque" id="valorParaSaque" value="<?=$valorParaSaque?>" required min="0" step="5">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 
            $valorParaSaque = $_GET["valorParaSaque"] ?? 0;
            $notasDe100 = intdiv($valorParaSaque , 100);
            $notasDe50 = floor(($valorParaSaque - ($notasDe100 * 100))/50);
            $notasDe10 = floor(($valorParaSaque - ($notasDe100 * 100) - ($notasDe50 * 50))/10);
            $notasDe5 = floor(($valorParaSaque - ($notasDe100 * 100) - ($notasDe50 * 50) - ($notasDe10 * 10))/5);
            

            echo"<h2>Saque de R$ ". number_format($valorParaSaque,2,",",".") ." realizado</h2>";
            echo "<p>O caixa eletrônio vai te entregar as seguintes notas</p>";
            echo "<ul>";
            echo "<li>$notasDe100 notas de 100</li>";
            echo "<li>$notasDe50 notas de 50</li>";
            echo "<li>$notasDe10 notas de 10</li>";
            echo "<li>$notasDe5 notas de 5</li>";
            echo "</ul>";

        ?>
    </section>
</body>
</html>