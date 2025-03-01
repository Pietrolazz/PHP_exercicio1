<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>

    
</head>

<body>

    <?php
    $c = 1;
    $t = 1;

    
    if(ISSET($_GET['nome'])) $c = $_GET['nome'];
    if(ISSET($_GET['n'])) $t = $_GET['n'];



?>

        <h1>Juros Composto</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="nome">Digite a qntd de dinheiro</label></P>
            <input id="nome" name="nome" required>



            <P><label for="n">Digite o tempo que vc deseja pagar</label></P>
            <input id="n" name="n" required>
        </p>

        <input id="calcular" type="submit" value="calcular">
        <form>

<?php
        echo "<p>O juros que vc ira pagar é R$: " . number_format($c * ((1+ 0.02)**$t), 2) . "</p>"
?>
</body>

</html>