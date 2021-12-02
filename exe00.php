<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'exe00classe.php';
        $c1 = new Canetao;
        $c1->cor = "Azul";
        $c1->modelo = "Cristal";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        $c1->tampada = false;
        print_r($c1);
        $c1->rabiscar();
        $c1->tampar();
        

        $c2 = new Canetao;
        $c2->modelo = "Pena";
        $c2->cor = "Vermelha";
        $c2->ponta = 1.0;
        $c2->tampada = true;
        $c2->carga = 77;
        var_dump($c2);
        $c2->rabiscar();
        $c2->destampar();
        
    ?>
    
</body>
</html>