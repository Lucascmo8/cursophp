]<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $anoNascimento = $_GET["anoNascimento"] ?? 2001;
        $anoAtual = date("Y");
        $anoAlvo = $_GET["anoAlvo"]?? $anoAtual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get" id="formulario" onsubmit="return validarFormulario()">
            <label for="anoNascimento">Em que ano você nasceu? </label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>" required min="0">

            <label for="anoAlvo">Quer saber sua idade em que ano? (atualmente estamos em <?=date("Y")?>) </label>
            <input type="number" name="anoAlvo" id="anoAlvo" value="<?=$anoAlvo?>" min="1" required>
            
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<p>Quem nasceu em $anoNascimento vai ter <strong>" . $anoAlvo - $anoNascimento ." anos</strong> em $anoAlvo !</p>";

        ?>
    </section>

    <script>
        const validarFormulario = () =>{
            const anoNascimento = document.getElementById('anoNascimento').value;
            const anoAlvo = document.getElementById('anoAlvo').value;

            if(anoNascimento > anoAlvo){
                alert(`Ano de nascimento não pode ser maior que o ano alvo.`)
                return false
            }

            return true
        }

    </script>
</body>
</html>