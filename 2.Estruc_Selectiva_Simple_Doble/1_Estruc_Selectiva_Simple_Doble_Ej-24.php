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
$a = 0;
$b = 0;
$c = 0;
$d = 0;
$x1 = 0;
$x2 = 0;

if (isset($_POST['btnCalcular'])) {
    //Entrada
    $a = (float)$_POST["txta"];
    $b = (float)$_POST["txtb"];
    $c = (float)$_POST["txtc"];
   
    //Proceso
    $d = pow($b,2.0) - 4.0 * $a * $c;
    echo $d;
    if($a != 0 && $d >= 0){
        $x1 = (-$b + pow($d, (1.0/2.0))) / 2 * $a;
        $x2 = (-$b - pow($d, (1.0/2.0))) / 2 * $a;
    }else{
        $x1 = 0;
        $x2 = 0;
    }
}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 24</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-24.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*6 -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txta">Número 1</label></td>
                    <td class="col_der"><input type="text" name="txta" id="txta" value="<?= $a ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtb">Número 2</label></td>
                    <td class="col_der"><input type="text" name="txtb" id="txtb" value="<?= $b ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtc">Número 3</label></td>
                    <td class="col_der"><input type="text" name="txtc" id="txtc" value="<?= $c ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtx1">Valor 1</label></td>
                    <td class="col_der"><input type="text" name="txtx1" id="txtx1" value="<?= $x1 ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtx2">Valor 2</label></td>
                    <td class="col_der"><input type="text" name="txtx2" id="txtx2" value="<?= $x2 ?>" readonly></td>
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