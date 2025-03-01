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
    $num2 = 0;

    if(ISSET($_GET['n1'])) $num1 = $_GET['n1'];
    if(ISSET($_GET['n2'])) $num2 = $_GET['n2'];

    $res = (($num1 * $num1) * 3.14) * $num2;
?>

<h1>Calculo Volume do Cilindro</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="n1">Digite o raio</label></P>
            <input id="n1" name="n1" required>

            <P><label for="n2">Digite a altura</label></P>
            <input id="n2" name="n2" required>
        </p>
       
        <input id="calcular" type="submit" value="calcular">
        <form>

<?php
        echo "<p>O resultado é: $res</p>"
?>
</body>

</html>