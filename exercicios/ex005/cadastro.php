<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Header><h1>Resultado do Processamento</h1></Header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Gafanhoto";
            $sobrenome = $_REQUEST["sobrenome"] ?? "";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong></p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
    </main>
</body>
</html>