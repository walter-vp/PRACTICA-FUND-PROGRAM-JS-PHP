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
$n = 0;
$r = "";

if (isset($_POST['btnCalcular'])) {
    //Entrada
    $n = (int)$_POST["txtn"];

    //Proceso
    if ($n % 3 == 0 && $n % 5 == 0) {
        $r = "SI ES MULTIPLO DE 3 Y 5";
    }else{
        $r = "NO ES MULTIPLO DE 3 Y 5";
    }
}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 14</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-14.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtn">Número : </label></td>
                    <td class="col_der"><input type="text" name="txtn" id="txtn" value="<?= $n ?>"></td>
                </tr>
                
                <tr>
                    <td class="col_izq"><label for="idSuma">Resultado: </label></td>
                    <td class="col_der"><input type="text" name="txtr" id="txtr" value="<?= $r ?>" readonly></td>
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