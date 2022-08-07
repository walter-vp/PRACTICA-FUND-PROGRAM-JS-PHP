<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/stilos.css" rel="stylesheet">
    <title>Estructura Secuencial</title>

</head>

<?php
//Variables
$txt_numero='200';
$n1 = 0;
$n2 = 0;
$s = 0;
if (isset($_POST['btnCalcular'])) {
    //Entrada
    $n1 = (int)$_POST["txtn1"];
    $n2 = (int)$_POST["txtn2"];
    //Proceso
   $s = $n1 + $n2;
}
?>

<body>
    <header>
        <h1>ESTRUCTURA SECUENCIAL</h1>
        <h2 class="centrado">Problema N° 73</h2>
    </header>

    <main>

        <form action="1_Estruc_Secuencial_Ej-01.php" method="POST">

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
                </tr>
                <tr>
                    <td class="col_izq"><label for="idSuma">Suma</label></td>
                    <td class="col_der"><input name="txtSuma" id="idSuma" type="text" value="<?= $s ?>" readonly></td>
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