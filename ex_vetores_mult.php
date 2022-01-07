<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Vetores Multidimencionais</title>
</head>
<body>
    <?php
        $turma = array(
            1 => array("nome" => "Afonso",
                       "sobrenome" => "Gomes",
                       "idade" => 31,
                        "funcao" => "formador"),
            2 => array("nome" => "Alailson",
                        "sobrenome" => "Braz",
                        "idade" => 30,
                        "funcao" => "aluno"),
            3 => array("nome" => "João",
                        "sobrenome" => "Pereira",
                        "idade" => 25,
                        "funcao" => "aluno"),
        );

        echo "<pre>";
        print_r($turma);
        echo "</pre>";


    ?>
    
</body>
</html>