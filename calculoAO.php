<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el Area de un Octagono Regular</title>
</head>
<body>
    <h1>Calculo del Area de un Octagono Regular</h1>
    <br>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="cperimetro" placeholder="Perimetro...">
    <br>
    <input type="text" name="capotema" placeholder="Apotema...">
    <br>
    <input type="submit" name="btn" value="enviar">
    <input type="submit" value="limpiar">
</body>
</html>

<?php
    if(isset($_POST['btn']) && $_POST['btn'] == "enviar"){
        $perimetro = $_POST["cperimetro"];
        $apotema = $_POST["capotema"];
        $hipo = null;

        if(!empty($perimetro) && !empty($apotema)){
            if(is_numeric($perimetro) && is_numeric($apotema)){
                $hipo = ($perimetro * $apotema) / 2;
                ?>
                <h2>Resultado: </h2><br>
                <?php
                echo $hipo;
                
            } else {
                ?>
                <h2>No se aceptan letras...</h2>
                <?php
            }
        } else {
            ?>
            <h2>Digite numeros en los campos...</h2>
            <?php
        }
        
    }
?>
    