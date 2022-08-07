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
//Constantes
define('DESC_G', 0.15);
define('DESC_A', 0.2);
define('REC_G', 0.11);
define('REC_A', 0.05);

//Variables
$mc = 0; //Monto de la compra
$tc = ""; //Tipo de cliente
$selected_tc_g =""; // Selección activado/desactivo 
$selected_tc_a =""; // Selección activado/desactivo 
$fp = ""; //Forma de pago
$selected_fp_c =""; // Selección activado/desactivo 
$selected_fp_p =""; // Selección activado/desactivo 
$r = ""; //Tasa Descuento/Recargo
$m = 0;  //Monto de descuento/recargo
$tp = 0; //Total a pagar

if (isset($_POST['btnCalcular'])) {
    //Entrada
    $mc = (float)$_POST["txtmc"];
    $tc = $_POST["txttc"];
    $fp = $_POST["txtfp"];

    //Proceso
    if ($tc == "G") {
        if ($fp == "C" || $fp == "c") {
            $m = $mc * DESC_G;
            $tp = $mc - $m;
            $r = "DESCUENTO 15%";
            $selected_fp_c ="selected";
        } else {
            $m = $mc * REC_G;
            $tp = $mc - $m;
            $r = "RECARGO 10%";
            $selected_fp_p ="selected";
        }
        $selected_tc_g ="selected";
    } else {
        
        if ($fp == "C") {
            $m = $mc * DESC_A;
            $tp = $mc - $m;
            $r = "DESCUENTO 20%";
            $selected_fp_c ="selected";
        } else {
            $m = $mc * REC_A;
            $tp = $mc - $m;
            $r = "RECARGO 5%";
            $selected_fp_p ="selected";
        }
        $selected_tc_a ="selected";
    }
}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 22</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-22.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 
            
                $mc = 0; //Monto de la compra
                $tc=""; //Tipo de cliente
                $fp=""; //Forma de pago
                $r =""; //Tasa Descuento/Recargo 
                $m = 0;  //Monto de descuento/recargo
                $tp = 0; //Total a pagar -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <!-- Entrada de Datos por teclado -->
                <tr>
                    <td class="col_izq"><label for="txtmc">Monto de la compra: </label></td>
                    <td class="col_der"><input type="text" name="txtmc" id="txtmc" value="<?= $mc ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txttc">Tipo Cliente: </label></td>
                    <td class="col_der">
                    <select name="txttc"> 
                            <option value="G" <?=$selected_tc_g?>>Cliente General </option>
                            <option value="A" <?=$selected_tc_a?>>Cliente Afiliado </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtfp">Forma de Pago</label></td>
                    <td class="col_der">
                        <select name="txtfp"> 
                            <option value="C" <?=$selected_fp_c?>>Al Contado </option>
                            <option value="P" <?=$selected_fp_p?>>A Plazos </option>
                        </select>
                    </td>
                </tr>
                <!-- Salida de Datos por Pantalla -->

                <tr>
                    <td class="col_izq"><label for="txtr">Tasa Descuento/Recargo: </label></td>
                    <td class="col_der"><input type="text" name="txtr" id="txtr" value="<?= $r ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txm">Monto de descuento/recargo: </label></td>
                    <td class="col_der"><input type="text" name="txtm" id="txtm" value="<?= $m ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtp">Total a pagar: </label></td>
                    <td class="col_der"><input type="text" name="txttp" id="txttp" value="<?= $tp ?>" readonly></td>
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