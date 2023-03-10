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
            require_once('Aluno.php');
            require_once('Professor.php');
            require_once('Funcionario.php');
            require_once('Pessoa.php');
            
            $p1 = new Pessoa("Pedro", 12, "M");
            $p2 = new Aluno("Maria", 25, "F");
            $p3 = new Professor("Cláudio", 54, "M");
            $p4 = new Funcionario("Fabiana", 20, "M");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
</body>
</html>