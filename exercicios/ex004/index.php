<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php 
        $nome = 'Lucas';
        $idade = 21;
        echo "Curso " . "de ". "PHP \u{1f418} " . 'para o $nome';

        echo " Estamos no ano \n de " . date('Y');

        echo " $nome \" Iluminado \" Costa" ;

        echo <<< 'TESTE'
            Olá pessoal sou o Lucas
                de 21 anos

        TESTE;
    ?>
</body>
</html>