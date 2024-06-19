<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        $string = "Curso PHP";
        $number = 256;
        $array = array("PHP", "HTML", "CSS");
        $date = date("d/m/Y H:i");
    ?>
    <p>Essa é uma variavel do tipo string, para implementa uma variavel do tipo string utilizamos aspas simples ('') ou duplas ("") :
        <?php echo $string;
        ?>
    </p>
    <p>Essa é uma variavel do tipo integer :
        <?php echo $number ?>
    </p>
    <p>Essa é uma variavel com um array :
        <?php print_r($array)?>
    </p>
    <p>Para implementa variaveis do tipo datas, utilizamos a função date(parametros) exemplo date("d/m/Y H:i:s") :
        <?php echo $date?>
    </p>
</body>
</html>