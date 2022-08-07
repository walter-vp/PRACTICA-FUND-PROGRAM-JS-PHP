<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/stilos.css" rel="stylesheet">
    <title>Estruc Selectiva Sim Dob</title>

</head>

<?php
//Variables
$txt_numero='200';
$n1 = 0;
$n2 = 0;
$n3 = 0;
$m = 0;
if (isset($_POST['btnCalcular'])) {
    //Entrada
    $n1 = (int)$_POST["txtn1"];
    $n2 = (int)$_POST["txtn2"];
    $n3 = (int)$_POST["txtn3"];
    //Proceso
    if($n1 > $n2){
        if($n1 > $n3){
            $m = $n1;
        }else{
            $m = $n3;
        }
    }else{
        if($n2 > $n3){
            $m = $n2;
        }else{
            $m = $n3;
        }
    }
}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 16</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-16.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtn1">Número 1</label></td>
                    <td class="col_der"><input name="txtn1" id="txtn1" type="text" value="<?= $n1 ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtn2">Número 2</label></td>
                    <td class="col_der"><input name="txtn2" id="txtn2" type="text" value="<?= $n2 ?>"></td>
                <tr>
                    <td class="col_izq"><label for="txtn3">Número 3</label></td>
                    <td class="col_der"><input type="text" name="txtn3" id="txtn3" value="<?= $n3 ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtm">Número Mayor</label></td>
                    <td class="col_der"><input type="text" name="txtm" id="txtm" value="<?= $m ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"></td>
                    <td class="col_der">
                        <input type="submit" name="btnCalcular" value="Calcular">
                        <br>
                    </td>
                </tr>
            </table>
        </form>

    </main>

    <footer>
        <p>Todos los derechos reservados &copy;2022 Ing. Walter Vásquez Piña</p>
    </footer>
</body>

</html>