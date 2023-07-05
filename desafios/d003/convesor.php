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
        <h1>Conversor de Moedas v.1.0</h1>
        <?php 
            $cotacao = 4.84;
            $dinheiroEmReal = $_REQUEST["dinheiroEmReal"] ?? 0;
            $conversao =  $dinheiroEmReal / $cotacao;

            // formato Travado no jeito que programei
            // echo "<p>Seus R$ ". number_format($dinheiroEmReal,2,",",".") ." equivalem a U$ " . number_format($conversao , 2,",",".") . " </p>";
            // echo "<p> <strong>* Cotação fixa de R$ ". number_format($cotacao,2,",","."). "</strong> informada diretamente no código.</p>";

            // Formato adaptavel
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus". numfmt_format_currency($padrão, $dinheiroEmReal,"BRL"). " equivalem a " . numfmt_format_currency($padrão,$conversao, "USD") . " </p>";
            echo "<p> <strong>* Cotação fixa de ". numfmt_format_currency($padrão,$cotacao,"BRL"). "</strong> informada diretamente no código.</p>";
        ?>
        <button><a href="index.html">Voltar a pagina anterior</a></button>
    </main>
</body>
</html>