<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="css/stilos.css">
    <title>Estructura Secuencial</title>
  </head>

  <?php 
  // Variables
  $n1 = 0; $n2 = 0; $c = 0; $r = 0;
  if (isset($_POST['btnCalcular'])) {
    // Entrada  
    $n1 = (int)$_POST['txtn1'];
    $n2 = (int)$_POST['txtn2'];

    // Proceso
    $c = (int)($n1/$n2);
    $r = $n1 % $n2;
    echo $c . ' ';
    echo $r;
  }
  ?>

  <body>
    <header>
        <h1>ESTRUCTURA SECUENCIAL</h1>
        <h2 class="centrado">Problema N° 02</h2>
    </header>

    <main>
        <form action="1_Estruc_Secuencial_Ej-02.php" method="post">
            <table>
                <tr>
                    <th class="col_izq">Variables</th>
                    <th class="col_der">Valores</th>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtn1">Número 1: </label></td>
                    <td class="col_der">
                        <input type="text" name="txtn1" id="txtn1" value="<?=$n1?>">
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtn2">Número 2: </label></td>
                    <td class="col_der">
                        <input type="text" name="txtn2" id="txtn2" value="<?=$n2?>">
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtnc">Cociente: </label></td>
                    <td class="col_der">
                        <input type="text" name="txtnC" id="txtnc" value="<?=$c?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"><label for="txtnr">Residuo: </label></td>
                    <td class="col_der">
                        <input type="text" name="txtnR" id="txtnr" value="<?=$r?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="col_izq"></td>
                    <td class="col_der">
                        <input type="submit" name="btnCalcular" value="Calcular">
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
