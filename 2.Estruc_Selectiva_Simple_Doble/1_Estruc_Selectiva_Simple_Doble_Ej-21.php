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
$t = 0;
$c = "";

if (isset($_POST['btnCalcular'])) {
    //Entrada
    $t = (int)$_POST["txtt"];
    
    //Proceso
    if($t < 10){
        $c = "FRIO";
    }else{
        if($t >= 10 && $t <= 20){
            $c = "NUBLADO";
        }else{
            if($t >= 21 && $t <= 30){
                $c = "CALOR";
            }else{
                $c = "TROPICAL";
            }
        }
    }
}
?>

<body>
    <header>
        <h1>ESTRUCTURA SELECTIVA SIMPLE DOBLE</h1>
        <h2 class="centrado">Problema N° 21</h2>
    </header>

    <main>

        <form action="1_Estruc_Selectiva_Simple_Doble_Ej-21.php" method="POST">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 -->

            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtt">Temperatura: </label></td>
                    <td class="col_der"><input type="text" name="txtt" id="txtt" value="<?= $t ?>"></td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtc">Clima: </label></td>
                    <td class="col_der"><input type="text" name="txtc" id="txtc" value="<?= $c ?>" readonly></td>
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