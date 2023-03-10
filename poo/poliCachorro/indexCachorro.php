<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once('Cachorro.php');
            require_once('Mamifero.php');
            require_once('Lobo.php');

            $m = new Mamifero();
            $m->emitirSom();

            $l = new Lobo();
            $l->emitirSom();

            $c = new Cachorro();
            $c->reagirFrase("Olá"); // Abanar e latir
            $c->reagirFrase("Vai apanhar"); // Rosnar
            $c->reagirHora(11, 45); // Abanar
            $c->reagirHora(21, 00); // Ignorar
            $c->reagirDono(true); // Abanar
            $c->reagirDono(false); // Rosnar e Latir
            $c->reagirIdadePeso(2, 12.5); // Latir
            $c->reagirIdadePeso(17, 4.5); // Rosnar

            var_dump($c);
        ?>
    </pre>
</body>
</html>