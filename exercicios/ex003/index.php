<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos no PHP</title>
</head>
<body>
    <?php 
        $num = 0x1A;
        echo "O valor da variável é $num ";

        $v = 300;
        var_dump($v);

        $v2 = (bool) "1";
        var_dump($v2);

        $valores = [6,14,9,21,7];

        var_dump($valores)
    ?>
</body>
</html>