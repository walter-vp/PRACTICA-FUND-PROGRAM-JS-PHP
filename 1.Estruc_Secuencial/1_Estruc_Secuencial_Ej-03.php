<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stilos.css">
    <title>Estructura Secuencial</title>
</head>

<?php
// Variables
$vv = 0.0;
$IGV = 0.0;
$pv = 0.0;

if (isset($_POST['btnCalcular'])) {
    // Entrada
    $vv = (int)$_POST['txtvv'];

    // Proceso
    $IGV = $vv * 0.19;
    $pv = $vv + $IGV;
}

?>

<body>
    <header>
        <h1>ESTRUCTURA SECUENCIAL</h1>
        <h2 class="centrado">Problema N° 03</h2>
    </header>

    <main>

        <form action="1_Estruc_Secuencial_Ej-03.php" method="post">

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtvv">Valor de Venta</label></td>
                    <td class="col_der"><input type="text" name="txtvv" id="txtvv" value="<?= $vv ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtIGV"></label>IGV</td>
                    <td class="col_der"><input type="text" name="txtIGV" id="txtIGV" value="<?= $IGV ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtpv"></label>Precio Venta</td>
                    <td class="col_der"><input type="text" name="txtpv" id="txtpv" value="<?= $pv ?>" readonly></td>
                </tr>
                <tr>
                    <td class="col_izq"></td>
                    <td class="col_der"><input type="submit" name="btnCalcular" value="Calcular"></td>
                </tr>
            </table>

        </form>

    </main>

    <footer>
        <p>Todos los derechos reservados &copy;2022 Ing. Walter Vásquez Piña</p>
    </footer>
</body>

</html>