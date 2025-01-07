<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULTIMATE EMOJI C</title>
</head>
<body>
    <?php
    echo "<pre>";
    require_once '../uec/lutador.php';
    require_once '../uec/luta.php';
    
    // $l1 = new Lutador('bruno','brasileiro',19,1.98,80);
    // var_dump($l1);
    // $l1->apresentar();
    
    // $l1->status();
    // $l1->empatarLuta();
    // $l1->status();
    
    $L = array();
    $L[] = new Lutador('Renato','Mongolia',23,1.80,82);
    echo "<br>";
    $L[] = new Lutador('Albani','Marciano',17,1.84,90);
    echo "<br>";
    $albani = $L[1];
    echo "<br>";
    $albani->ganharLuta();
    echo "<br>";
    
    $ringue = new Luta($L[0],$albani);
    $ringue->lutar();
    echo "<br>";
    $ringue->lutar();
    echo "<br>";
    $ringue->lutar();
    echo "<br>";
    // $L[0]->setChanceWin();
    
    
    echo "</pre>";
    
    ?>
    <br>
</body>
</html>