<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>
    
</head>

<body>

    <?php
    $num1 = 1;
    $num2 = 1;
    $res = 1;

    
    if(ISSET($_GET['n1'])) $num1 = $_GET['n1'];

    if(ISSET($_GET['n2'])) $num2 = $_GET['n2'];


    $res = ($num1 / $num2);
    

    ?>

        <h1>Calcule a divisão</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="n1">Digite o n1</label></P>
            <input id="n1" name="n1" required>

            <P><label for="n2">Digite o n2</label></P>
            <input id="n2" name="n2" required>
        </p>


        <input id="calcular" type="submit" value="calcular">
        <form>

<?php
        echo "<p>A sua divisão é: $res</p>"
?>
</body>

</html>