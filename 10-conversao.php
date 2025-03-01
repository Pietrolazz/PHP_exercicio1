<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>

    
</head>

<body>

    <?php
    $n1 = 0;
    $n2 = 1;


    
    if(ISSET($_GET['n1'])) $n1 = $_GET['n1'];
    if(ISSET($_GET['n2'])) $n2 = $_GET['n2'];



?>

        <h1>Conversão</h1>
    
    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="n1">Digite o numero do conversor | 1 = dólar | 2 = Euro | 3 = libra | 4 = Peso Argentino | 5 = Iene |</label></P>
            <input id="n1" name="n1" required>


            <P><label for="n2">Digite o valor em real</label></P>
            <input id="n2" name="n2" required>
        </p>




        <input id="calcular" type="submit" value="calcular">
        <form>

<?php
    switch ($n1) {
        case 1:
            echo "<p>O seu valor em Dólar é: " . number_format($n2 / 5.69, 2) . "</p>";
            break;
        case 2:
            echo "<p>O seu valor em Euro é: " . number_format($n2 / 5.94, 2) . "</p>";
            break;
        case 3:
            echo "<p>O seu valor em Libra é: " . number_format($n2 / 7.19, 2) . "</p>";
            break;
        case 4:
            echo "<p>O seu valor em Peso Argentino é: " . number_format($n2 * 182.104, 2) . "</p>";
            break;
        case 5:
            echo "<p>O seu valor em Iene é: " . number_format($n2 * 30.44, 2) . "</p>";
            break;
        default:
            echo "<p>Selecione um conversor válido </p>";
    }
            
?>
</body>

</html>