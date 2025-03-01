<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>

    
</head>

<body>

    <?php
    $name = 0;
    $number = 1;

    
    if(ISSET($_GET['nome'])) $name = $_GET['nome'];
    if(ISSET($_GET['n'])) $number = $_GET['n'];



?>

        <h1>Desconto</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="nome">Digite nome do produto</label></P>
            <input id="nome" name="nome" required>



            <P><label for="n">Digite o preco</label></P>
            <input id="n" name="n" required>
        </p>

        <input id="calcular" type="submit" value="calcular">
        <form>

<?php

        echo "<p>O preco atual do produto $name é R$: " . number_format($number +  ($number * 0.35), 2) . "</p>"
?>
</body>

</html>