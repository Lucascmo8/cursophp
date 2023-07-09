<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../style.css">
</head>

<style>
    #percentual{
        padding: 0;
    }
</style>

<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get" id="formulario" onsubmit="return validarFormulario()">
            <label for="precoDoProduto">Preço do Produto ( em R$)</label>
            <input type="number" name="precoDoProduto" id="precoDoProduto" value="<?=$precoDoProduto?>" required min="0.01" step="0.01">
            
            <label for="percentual">Qual será o percentual de Reajuste? (<strong id="percentualVisivel"></strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="1" step="0.01" value="0" onchange="alterarValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $precoDoProduto = $_GET["precoDoProduto"]??0;
            $percentual = $_GET["percentual"]?? 0;
            $precoFinal = $precoDoProduto * $percentual + $precoDoProduto;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>O produto que custava ". numfmt_format_currency($padrao, $precoDoProduto,"BRL") .", com <strong>". $percentual * 100 ." % de aumento</strong> vai passar a custar <strong>". numfmt_format_currency($padrao, $precoFinal,"BRL") ."</strong> a partir de agora.</p>";
        ?>
    </section>

    <script>
        const alterarValor = () =>{
            let percentual = document.querySelector("#percentual").value

            let percentualVisivel = document.querySelector("#percentualVisivel")

            percentualVisivel.textContent = `${Math.floor(percentual*100)}%`
        }
        alterarValor()
    </script>
</body>
</html>