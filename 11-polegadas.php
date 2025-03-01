<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>

    
</head>

<body>

    <?php
    $h = 1;
    $l = 1;

    
    if(ISSET($_GET['n1'])) $h = $_GET['n1'];
    if(ISSET($_GET['n2'])) $l = $_GET['n2'];



?>

        <h1>Calcule as Polegadas</h1>

    <form id="somar" name="somar" action="" target="_self">
        <p>
            <P><label for="n1">Digite o altura</label></P>
            <input id="n1" name="n1" required>


            <P><label for="n2">Digite o largura</label></P>
            <input id="n2" name="n2" required>
        </p>



        <input id="calcular" type="submit" value="calcular">
</form>

<?php
    $res = ($h**2) + ($l**2);
        echo "<p>O seu resultado é: " . number_format( sqrt($res) / 2.54, 2) . "</p>"
?>
</body>

</html>