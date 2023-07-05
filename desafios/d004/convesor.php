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
            $dataAtual = date("m-d-Y");
            $dataSemanaPassada = date("m-d-Y" , strtotime("-7 days"));
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' .$dataSemanaPassada . '\'&@dataFinalCotacao=\'' .$dataAtual . '\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados['value'][0]['cotacaoCompra'];

            $dinheiroEmReal = $_REQUEST["dinheiroEmReal"] ?? 0;
            $conversao =  $dinheiroEmReal / $cotacao;

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus". numfmt_format_currency($padrão, $dinheiroEmReal,"BRL"). " equivalem a <strong>" . numfmt_format_currency($padrão,$conversao, "USD") . " </strong></p>";
            echo "<p> <strong>* Cotação fixa de ". numfmt_format_currency($padrão,$cotacao,"BRL"). "</strong> informada diretamente no código.</p>";
        ?>
        <button><a href="index.html">Voltar a pagina anterior</a></button>
    </main>
</body>
</html>