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
            require_once('Ave.php');
            require_once('Mamifero.php');
            require_once('Peixe.php');
            require_once('Reptil.php');
            //
            require_once('Canguru.php');
            require_once('Arara.php');
            require_once('Cachorro.php');
            require_once('Goldfish.php');
            require_once('Tartaruga.php');
            require_once('Cobra.php');

            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a = new Ave();

            $m->setPeso(85.3);
            $m->setIdade(2);
            $m->setMembros(4);

            $m->locomover();
            $m->alimentar();
            $m->emitirSom();

            $p->setPeso(0.35);
            $p->setIdade(1);
            $p->setMembros(0);

            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            $p->soltarBolha();

            $a->setPeso(0.89);
            $a->setIdade(2);
            $a->setMembros(2);

            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();

            $m1 = new Mamifero();
            $ca = new Canguru();
            $ka = new Cachorro();
            $ta = new Tartaruga();

            $m1->setPeso(5.70);
            $m1->setIdade(8);
            $m1->setMembros(4);
            $m1->alimentar();
            $m1->locomover();
            $m1->emitirSom();

            $ca->setPeso(55.30);
            $ca->setIdade(3);
            $ca->setMembros(4);
            $ca->locomover();
            $ca->alimentar();
            $ca->emitirSom();
            $ca->usarBolsa();

            $ka->setPeso(3.94);
            $ka->setIdade(5);
            $ka->setMembros(4);
            $ka->setCorPelo("Preto");
            $ka->locomover();
            $ka->alimentar();
            $ka->emitirSom();
            $ka->abanarRabo();
            $ka->enterrarOsso();

            $ta->locomover();
        ?>
    </pre>
</body>
</html>