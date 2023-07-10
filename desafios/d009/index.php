<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $valor1 = $_REQUEST["valor1"] ?? 0;
        $peso1 = $_REQUEST["peso1"] ?? 1;
        $valor2 = $_REQUEST["valor2"] ?? 0;
        $peso2 = $_REQUEST["peso2"] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º valor: </label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" required>

            <label for="peso1">1º peso: </label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" min="1" required>

            <label for="valor2">2º valor: </label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" required>

            <label for="peso2">2º peso: </label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" min="1" required>
            
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $media = ($valor1 + $valor2) / 2 ;
            $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

            echo "<p>Analisando os valores $valor1 e $valor2</p>";
            echo "<ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é valores é igual a " . number_format(($valor1 + $valor2) / 2 ,1,",",".") ."</li>" ;
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos é igual a ". number_format($mediaPonderada,2,",",".")."</li></ul>";

        ?>
    </section>
</body>
</html>