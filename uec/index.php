<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULTIMATE EMOJI C</title>
</head>
<body>
    <pre>
        <?php
    require_once '../uec/lutador.php';

    $l1 = new Lutador('bruno','brasileiro',19,1.98,80);
    var_dump($l1);
    $l1->apresentar();
    
    $l1->status();
    $l1->empatarLuta();
    $l1->status();

    $l2 = new Lutador('Renato','Mongolia',23,1.80,82);
    var_dump($l2);
    $l2->apresentar();
    $l2->getChance();
    


        ?>
    </pre>
</body>
</html>