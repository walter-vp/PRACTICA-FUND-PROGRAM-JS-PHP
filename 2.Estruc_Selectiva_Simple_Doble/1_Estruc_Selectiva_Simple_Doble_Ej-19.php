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
$c = 0;

$m_d = 0;
$m_igv = 0;
$m_p = 0;

//Constantes
define('D1', 0.1);
define('D2', 0.2);
define('IGV', 0.19);

if (isset($_POST['btnCalcular'])) {
    //Entrada
    $c = (float)$_POST["txtc"];
   
    //Proceso
    if( $c <= 500){
        $m_d = $c * D1;
    }else{
        $m_d = $c * D2;
    }

    $m_igv = ($c - $m_d) * IGV;
    $m_p = $c - ($m_d + $m_igv);
}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 19</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-19.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtc">Consumo: </label></td>
                    <td class="col_der"><input type="text" name="txtc" id="txtc" value="<?= $c ?>"></td>
                </tr>
                
                <tr>
                    <td class="col_izq"><label for="txtm_d">Monto descuento: </label></td>
                    <td class="col_der"><input name="txtSuma" id="txt" type="text" value="<?= $m_d ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtm_igv">Impuesto IGV: </label></td>
                    <td class="col_der"><input type="text" name="txtm_igv" id="txtm_igv" value="<?= $m_igv ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtm_p">Importe a pagar: </label></td>
                    <td class="col_der"><input type="text" name="txtm_p" id="txtm_p" value="<?= $m_p ?>" readonly></td>
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