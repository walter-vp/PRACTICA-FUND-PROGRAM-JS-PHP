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
$r = 0;

if (isset($_POST['btnCalcular'])) {
    //Entrada
    $c = $_POST["txtc"];

    //Proceso
    $r = "NO ES UNA VOCAL";

    if ($c == "a" || $c == "A") {
        $r = "ES UNA VOCAL";
    }

    if ($c == "e" || $c == "E") {
        $r = "ES UNA VOCAL";
    }

    if ($c == "i" || $c == "I") {
        $r = "ES UNA VOCAL";
    }

    if ($c == "o" || $c == "O") {
        $r = "ES UNA VOCAL";
    }

    if ($c == "u" || $c == "U") {
        $r = "ES UNA VOCAL";
    }


}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 13</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-13.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtc">Carácter: </label></td>
                    <td class="col_der"><input type="text" name="txtc" id="txtc" value="<?= $c ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="textr">Resultado: </label></td>
                    <td class="col_der"><input type="text" name="txtr" id="textr" value="<?= $r ?>" readonly></td>
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