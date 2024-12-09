<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
        <pre>
            <?php
    include_once 'code.php';
    $pam = new Panela('Frigideira','Inox','Grande','Madeira');
    var_dump($pam);
    $pam->mostrar();
?>
</pre>
</body>
</html>