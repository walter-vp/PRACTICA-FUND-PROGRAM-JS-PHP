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

//Variables
$a = 0;
$n = 0;
$p = 0;
 
//Entrada
if (isset($_POST['btnCalcular'])){
    $a = (int)$_POST["txta"];
    $n = (int)$_POST["txtn"];
}

//Proceso
$p = pow($a, $n);
?>

<body>

    <header>
        <h1>ESTRUCTURA SECUENCIAL</h1>
        <h2 class="centrado">Problema N° 07</h2>
    </header>

    <main>

        <form action="1_Estruc_Secuencial_Ej-07.php" method="post">

            <!-- table>tr>(th.col_izq{Variables}+th.col_der{Valores})^(tr>(td.col_izq>label^td.col_der>input))*4 -->
            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="">A : </label></td>
                    <td class="col_der">
                        <input type="text" name="txta" id="txta" value="<?=$a?>" >
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="">n : </label></td>
                    <td class="col_der">
                        <input type="text" name="txtn" id="txtn" value="<?=$n?>" >
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtp">Potencia : </label></td>
                    <td class="col_der">
                        <input type="text" name="txtp" id="txtp" value="<?=$p?>" readonly >
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"></td>
                    <td class="col_der">
                        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular" >
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