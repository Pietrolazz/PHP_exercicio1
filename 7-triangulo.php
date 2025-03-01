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

    $res = (sqrt(3) * $num1) * 2;
?>

<h1>Calculo Altura do Triângulo</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="n1">Digite um lado</label></P>
            <input id="n1" name="n1" required>

        <input id="calcular" type="submit" value="calcular">
        <form>

<?php
        echo "<p>A sua altura: $res</p>"
?>
</body>

</html>