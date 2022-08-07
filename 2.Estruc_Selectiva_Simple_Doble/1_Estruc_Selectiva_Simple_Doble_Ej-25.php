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
$h = 0;
$m = 0;
$s = 0;
if (isset($_POST['btnCalcular'])) {
    //Entrada
    $h = (float)$_POST["txth"];
    $m = (float)$_POST["txtm"];
    $s = (float)$_POST["txts"];

    //Proceso
    $s += 1;
    if($s >= 60){
        $s = 0;
        $m += 1;
        if($m >= 60){
            $m = 0;
            $h += 1;
            if($h >= 24){
                $h = 0;
            }
        }
    }

}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 25</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-25.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txth">Hora</label></td>
                    <td class="col_der"><input type="text" name="txth" id="txth" value="<?= $h ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtm">Minutos</label></td>
                    <td class="col_der"><input type="text" name="txtm" id="txtm" value="<?= $m ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="xtxs">Segundos</label></td>
                    <td class="col_der"><input type="text" name="txts" id="txts" value="<?= $s ?>"></td>
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