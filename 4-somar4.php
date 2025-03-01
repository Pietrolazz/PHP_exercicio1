<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>

    
</head>

<body>

    <?php

    $num1 = 0;
     if(ISSET($_GET['n1'])) $num1 = $_GET['n1'];

    $num2 = 0;
    if(ISSET($_GET['n2'])) $num2 = $_GET['n2'];

    $num3 = 0;
    if(ISSET($_GET['n3'])) $num3 = $_GET['n3'];

    $num4 = 0;
    if(ISSET($_GET['n4'])) $num4 = $_GET['n4'];

    $num5 = 0;
    if(ISSET($_GET['n5'])) $num5 = $_GET['n5'];

    $num6 = 1;
    if(ISSET($_GET['n6'])) $num6 = $_GET['n6'];
    

    $res = (($num1 + $num2 + $num3 + $num4) * $num5) / $num6;
?>

        <h1>Faça sua Conta</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="n1">Digite o n1</label></P>
            <input id="n1" name="n1" required>


            <P><label for="n2">Digite o n2</label></P>
            <input id="n2" name="n2" required>
        </p>


        <P><label for="n3">Digite o n3</label></P>
            <input id="n3" name="n3" required>
        </p>


        <P><label for="n4">Digite o n4</label></P>
            <input id="n4" name="n4" required>
        </p>

        <P><label for="n5">Digite o n5</label></P>
            <input id="n5" name="n5" required>

            <P><label for="n6">Digite o n6</label></P>
            <input id="n6" name="n6" required>
        </p>
        </p>

        <input id="calcular" type="submit" value="calcular">
        <form>

<?php
        echo "<p>O seu resultado é: $res</p>"
?>
</body>

</html>