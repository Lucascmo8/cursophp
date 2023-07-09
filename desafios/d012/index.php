]<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="totalSegundos">Qual é o total de segundos?</label>
            <input type="number" name="totalSegundos" id="totalSegundos" value="<?=$totalSegundos?>" required min="0">
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $totalSegundos = $_GET["totalSegundos"] ?? 0;
            $semanas = floor($totalSegundos / 604800);
            $dias = floor(($totalSegundos - ($semanas * 604800))/86400);
            $horas = floor(($totalSegundos - ($semanas * 604800) - ($dias * 86400))/3600);
            $minutos = floor(($totalSegundos - ($semanas * 604800) - ($dias * 86400) - ($horas * 3600))/60);
            $segundos = floor(($totalSegundos - ($semanas * 604800) - ($dias * 86400) - ($horas * 3600) - ($minutos * 60)));

            echo "<p>Analisando o valor que você digitou, <strong>$totalSegundos segundos</strong> equivalem a um total de:</p>";
            echo "<ul>";
            echo "<li>$semanas semanas</li>";
            echo "<li>$dias dias</li>";
            echo "<li>$horas horas</li>";
            echo "<li>$minutos minutos</li>";
            echo "<li>$segundos segundos</li>";
            echo "</ul>";

        ?>
    </section>
</body>
</html>