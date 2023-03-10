<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ControleRemoto</title>
</head>
<body>
    <pre>
        <?php
            require_once('ControleRemoto.php');
            $c = new controleRemoto();
            $c->ligar();
            // $c->setVolume(42); gera um erro informando que não é possivel modificar um valor em um método privado
            $c->desligar();
            $c->maisVolume();
            $c->abrirMenu();
        ?>
    </pre>
</body>
</html>