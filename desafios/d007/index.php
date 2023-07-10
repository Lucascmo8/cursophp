<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $salario = $_REQUEST['salario'] ?? 1320;
        $salarioMinimo = 1320;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$): </label>
            <input type="number" step="0.01" name="salario" id="salario" value="<?=$salario?>" required>
            <p>Considerando o salário mínimo de <strong>R$1.320,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final:</h2>
        <?php 
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $quantidadeDeSalariosMinimos = intdiv($salario , $salarioMinimo);
            // $restanteDoSalario = $salario % $salarioMinimo;
            $restanteDoSalario = $salario - ($salarioMinimo * $quantidadeDeSalariosMinimos);

            echo "<p>Quem recebe um salário de ". numfmt_format_currency($padrao,$salario,"BRL") ." ganha <strong>$quantidadeDeSalariosMinimos salários mínimos</strong> + ".   numfmt_format_currency($padrao,$restanteDoSalario,"BRL") ."</p>"
        ?>
    </section>
</body>
</html>