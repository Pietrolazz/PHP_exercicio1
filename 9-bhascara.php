<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>

    
</head>

<body>

    <?php
    $a = 1;
    $b = 1;
    $c = 1;

    
    if(ISSET($_GET['n1'])) $a = $_GET['n1'];
    if(ISSET($_GET['n2'])) $b = $_GET['n2'];
    if(ISSET($_GET['n3'])) $c = $_GET['n3'];

    $delta = ($b * $b) - 4 * $a * $c;

    $x1 = (- $b + sqrt($delta)) / (2 * $a);
    $x2 = (- $b - sqrt($delta)) / (2 * $a);


?>

        <h1>Calcule a Bháskara</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="n1">Digite o a</label></P>
            <input id="n1" name="n1" required>


            <P><label for="n2">Digite o b</label></P>
            <input id="n2" name="n2" required>
        </p>


        <P><label for="n3">Digite o c</label></P>
            <input id="n3" name="n3" required>
        </p>



        <input id="calcular" type="submit" value="calcular">
        <form>

<?php
        echo "<p>O seu bháskara é: $x1, $x2</p>"
?>
</body>

</html>