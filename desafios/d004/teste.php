<pre>
    <?php
        $dataAtual = date("m-d-Y");
        $dataSemanaPassada = date("m-d-Y" , strtotime("-7 days"));
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' .$dataSemanaPassada . '\'&@dataFinalCotacao=\'' .$dataAtual . '\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
        // var_dump($dados);
        $cotacao = $dados['value'][0]['cotacaoCompra'];
    ?>
</pre>