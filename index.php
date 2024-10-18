<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Testando variaveis</h1>
    <?php 

    $nome = "Arthur";
    $sobrenome ="da Rosa";
    const pais = "Brasil";
    echo"olá $nome $sobrenome você é do " .pais;
    ?>
    <h1>Testando tipos primitivos</h1>
    <?php 
    $num = 12;
    echo" número é $num <br> ";
    var_dump($num);

    $numi = 14.9;
    //$numi =(int) 14.9;
    // posso colocar o (int) para forçar o número a ser um int
    echo"<br><br>o numero é $numi <br>";
    var_dump($numi);

    $real=true;
    echo"<br><br>Real or fake: <br> is ";
    var_dump($real);

    $palavra="palavra";
    echo"<br><br>A palavra é $palavra <br> ";
    var_dump($palavra);
    ?>
    
</body>
</html>