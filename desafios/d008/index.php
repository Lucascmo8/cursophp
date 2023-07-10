<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $numero = $_REQUEST['numero'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Numero</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>" min="1" required>
            
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final:</h2>
        <?php 
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
            echo "<ul>
                <li>A sua raiz quadrada é <strong>". number_format($numero ** (1/2),3,",",".")."</strong></li>
                <li>A sua raiz cubica é <strong>". number_format($numero ** (1/3),3,",",".")."</strong></li>
            </ul>";
        ?>
    </section>
</body>
</html>