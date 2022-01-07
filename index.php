<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <?php
       //include "connect.php"

        $e = array(
            10 => 'Benfica',
            20 => 'Porto',
            30 => 'Sporting'
        );

        array_pop($e);
        print_r($e);
        echo "<br />";

        array_push($e, "teste");
        echo "<br />";
        array_push($e, "teste2");
        print_r($e);

    ?>
</body>

</html>