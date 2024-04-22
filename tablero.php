<?php
$mov = "<img  src='./images/ficha2.webp' alt='ficha' id='ficha2'>";
$mov1 = "<img  src='./images/ficha4.jpeg' alt='ficha' id='ficha4'>";
$mov2 = "<img  src='./images/ficha6.png' alt='ficha' id='ficha6'>";
$name1 = isset($_POST['name1']) ? $_POST['name1'] : '';
$name2 = isset($_POST['name2']) ? $_POST['name2'] : '';
$name3 = isset($_POST['name3']) ? $_POST['name3'] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .row {
        justify-content: center;
        align-items: center;
    }

    #celda {
        height: 70px;
        width: 70px;
    }

    #celda2 {
        height: 70px;
        width: 70px;
    }

    #row2 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #ficha1 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        margin-left: 21cm;
        margin-top: 0cm;
    }

    #ficha2 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);

    }

    #ficha3 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        margin-top: 0cm;

    }

    #ficha4 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    #ficha5 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        margin-top: 0cm;

    }

    #ficha6 {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    #salida {
        width: 80px;
        height: 80px;
        display: flex;
        margin-left: 18cm;
        margin-top: -2cm;
    }

    #escalera1 {
        width: 10cm;
        height: 10cm;
        display: flex;
        margin-left: 36cm;
        margin-top: -10cm;


    }

    #escalera2 {
        width: 5cm;
        height: 5cm;
        display: flex;
        margin-left: 34cm;
        margin-top: -18cm;
        transform: rotate(24deg);
    }

    #escalera3 {
        width: 4cm;
        height: 3cm;
        display: flex;
        margin-left: 23cm;
        margin-top: 5cm;
    }

    #serpiente1 {
        width: 4cm;
        height: 3cm;
        display: flex;
        margin-left: 35cm;
        margin-top: -5cm;
    }

    #serpiente2 {
        width: 4cm;
        height: 3cm;
        display: flex;
        margin-left: 30cm;
        margin-top: 0cm;
        transform: rotate(30deg);
    }

    #serpiente3 {
        width: 4cm;
        height: cm;
        display: flex;
        margin-left: 25cm;
        margin-top: -13cm;
        transform: rotate(180deg);
    }
</style>

<body>

    <div class="row">
        <div class="col-12 border border-3 border-dark text-center">
            <h1>!Bienvenidos!</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 border border-3 border-dark text-center">

                <?php

                $numeroDado = '';
                $movimientosAcumulados = 0;
                $movimientosAcumulados1 = 0;
                $movimientosAcumulados2 = 0;
                $contador = isset($_POST['contador']) ? $_POST['contador'] : 1;


                if (isset($_POST['tirar']) && $contador < 4) {
                    $contador++;
                    if ($contador == 4) {
                        $contador = 3 - 2;
                    }
                } elseif (isset($_POST['reiniciar'])) {
                    $contador = 0;
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['tirar'])) {

                        $numeroDado = rand(1, 12);

                        switch ($contador) {
                            case 1:

                                $movimientosAcumulados = $movimientosAcumulados + $numeroDado;



                                break;
                            case 2:

                                $movimientosAcumulados1 = $movimientosAcumulados1 + $numeroDado;

                                break;
                            case 3:

                                $movimientosAcumulados2 = $movimientosAcumulados2 + $numeroDado;
                        }
                    } elseif (isset($_POST['reiniciar'])) {

                        $numeroDado = 0;
                        $movimientosAcumulados = 0;
                        $movimientosAcumulados1 = 0;
                        $movimientosAcumulados2 = 0;
                    }
                }

                ?>

                <div class="container mt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form class="mb-3 shadow p-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="mb-3">
                                    <label for="numeroDado" class="form-label">Número del dado</label>
                                    <input type="number" class="form-control" id="numeroDado" name="numeroDado" value="<?php echo $numeroDado; ?>" required readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="movimientosAcumulados" class="form-label">Movimientos acumulados jugado 1</label>
                                    <input type="hydden" class="form-control" id="movimientosAcumulados" name="movimientosAcumulados" value="<?php echo $movimientosAcumulados; ?>" required readonly>

                                    <label for="movimientosAcumulados" class="form-label">Movimientos acumulados jugado 2</label>
                                    <input type="hydden" class="form-control" id="movimientosAcumulados1" name="movimientosAcumulados1" value="<?php echo $movimientosAcumulados1; ?>" required readonly>


                                    <label for="movimientosAcumulados" class="form-label">Movimientos acumulados jugado 3</label>
                                    <input type="hydden" class="form-control" id="movimientosAcumulados2" name="movimientosAcumulados2" value="<?php echo $movimientosAcumulados2; ?>" required readonly>
                                    <br>
                                    <label for="contador" class="form-label">Turnos: <?php echo $contador; ?></label>
                                    <input type="hydden" name="contador" value="<?php echo $contador; ?>">

                                </div>
                                <button type="submit" class="btn btn-success" name="tirar" value="siguiente">Tirar</button>
                                <button type="submit" class="btn btn-danger" name="reiniciar">Reiniciar juego</button>
                            </form>

                            <?php
                            if ($contador == 0) {
                                echo "<h1>Bienvenido, presiona tirar para iniciar</h1>";
                            }
                           
                            switch ($movimientosAcumulados) {

                                case 10:
                                    $movimientosAcumulados = 51;
                                    echo "<h1>Sube a la casilla 51</h1>";
                                    $movimientosAcumulados = $movimientosAcumulados + $numeroDado;


                                    break;
                                case 36:
                                    $movimientosAcumulados = 26;
                                    echo "<h1>Baja a la casilla 26</h1>";

                                    break;
                                case 40:
                                    $movimientosAcumulados = 42;
                                    echo "<h1>Sube a la casilla 42</h1>";
                                    $movimientosAcumulados = $movimientosAcumulados + $numeroDado;

                                    break;
                                case 53:
                                    $movimientosAcumulados = 47;
                                    echo "<h1>Baja a la casilla 47</h1>";

                                    break;
                                case 73:
                                    $movimientosAcumulados = 94;
                                    echo "<h1>¡LUJO! Sube hasta la casilla 94</h1>";
                                    $movimientosAcumulados = $movimientosAcumulados + $numeroDado;

                                    break;
                                case 98:
                                    $movimientosAcumulados = 59;
                                    echo "Baja a la casilla 59</h1>";

                                    break;
                                case 100:
                                    echo "<h1>¡Felicidades Jugador 1! Ganaste, reinicia el juego.</h1>";
                                    break;
                                default:
                                    if ($movimientosAcumulados > 100) {
                                        $regreso = $movimientosAcumulados - 100;
                                        $movimientosAcumulados = 100 - $regreso;
                                    }
                            }
                            switch ($movimientosAcumulados1) {
                                case 10:
                                    $movimientosAcumulados = 51;
                                    echo "<h1>Sube a la casilla 51</h1>";
                                    $movimientosAcumulados1 = $movimientosAcumulados1 + $numeroDado;


                                    break;
                                case 36:
                                    $movimientosAcumulados1 = 26;
                                    echo "<h1>Baja a la casilla 26</h1>";

                                    break;
                                case 40:
                                    $movimientosAcumulados1 = 42;
                                    echo "<h1>Sube a la casilla 42</h1>";
                                    $movimientosAcumulados1 = $movimientosAcumulados1 + $numeroDado;

                                    break;
                                case 53:
                                    $movimientosAcumulados1 = 47;
                                    echo "<h1>Baja a la casilla 47</h1>";

                                    break;
                                case 73:
                                    $movimientosAcumulados1 = 94;
                                    echo "<h1>¡LUJO! Sube hasta la casilla 94</h1>";
                                    $movimientosAcumulados1 = $movimientosAcumulados1 + $numeroDado;

                                    break;
                                case 98:
                                    $movimientosAcumulados1 = 59;
                                    echo "Baja a la casilla 59</h1>";

                                    break;
                                case 100:
                                    echo "<h1>¡Felicidades jugador 2! Ganaste, reinicia el juego.</h1>";
                                    break;
                                default:
                                    if ($movimientosAcumulados1 > 100) {
                                        $regreso = $movimientosAcumulados1 - 100;
                                        $movimientosAcumulados1 = 100 - $regreso;
                                    }
                            }
                            switch ($movimientosAcumulados2) {

                                case 10:
                                    $movimientosAcumulados2 = 51;
                                    echo "<h1>Sube a la casilla 51</h1>";
                                    $movimientosAcumulados2 = $movimientosAcumulados2 + $numeroDado;


                                    break;
                                case 36:
                                    $movimientosAcumulados2 = 26;
                                    echo "<h1>Baja a la casilla 26</h1>";

                                    break;
                                case 40:
                                    $movimientosAcumulados2 = 42;
                                    echo "<h1>Sube a la casilla 42</h1>";
                                    $movimientosAcumulados2 = $movimientosAcumulados2 + $numeroDado;

                                    break;
                                case 53:
                                    $movimientosAcumulados2 = 47;
                                    echo "<h1>Baja a la casilla 47</h1>";

                                    break;
                                case 73:
                                    $movimientosAcumulados2 = 94;
                                    echo "<h1>¡LUJO! Sube hasta la casilla 94</h1>";
                                    $movimientosAcumulados2 = $movimientosAcumulados2 + $numeroDado;

                                    break;
                                case 98:
                                    $movimientosAcumulados2 = 59;
                                    echo "Baja a la casilla 59</h1>";

                                    break;
                                case 100:
                                    echo "<h1>¡Felicidades Jugador 3! Ganaste, reinicia el juego.</h1>";
                                    break;
                                default:
                                    if ($movimientosAcumulados2 > 100) {
                                        $regreso = $movimientosAcumulados2 - 100;
                                        $movimientosAcumulados2 = 100 - $regreso;
                                    }
                            }
                            ?>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <?php
                $color = array(
                    '1' => 'bg-success',
                    '2' => 'bg-info',
                    '3' => 'bg-danger',
                    '4' => 'bg-white',
                    '5' => 'bg-warning',
                    '6' => 'bg-white',
                    '7' => 'bg-danger',
                    '8' => 'bg-info',
                    '9' => 'bg-success',
                    '10' => 'bg-warning'
                );
                $color2 = array(
                    '1' => 'bg-warning',
                    '2' => 'bg-white',
                    '3' => 'bg-info',
                    '4' => 'bg-danger',
                    '5' => 'bg-danger',
                    '6' => 'bg-success',
                    '7' => 'bg-warning',
                    '8' => 'bg-white',
                    '9' => 'bg-white',
                    '10' => 'bg-info'
                );

                $key = 100;
                $key2 = 100;
                switch ($contador) {
                    case 0:
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<div class='row'>";
                            if (($i % 2) == 0) { // Fila par
                                $key2 = $key2 - 19;
                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados == $key2) {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . $mov . "</div>";
                                    } else {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . "</div>";
                                    }
                                }
                                $key2 = $key2 - 11;
                            } else { // Fila impar

                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados == $key) {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . $mov . "</div>";
                                    } else {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . "</div>";
                                    }
                                }
                                $key = $key - 10;
                            }
                            echo "</div>";
                        }
                        break;
                    case 1:
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<div class='row'>";
                            if (($i % 2) == 0) { // Fila par
                                $key2 = $key2 - 19;
                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados == $key2) {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . $mov . "</div>";
                                    } else {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . "</div>";
                                    }
                                }
                                $key2 = $key2 - 11;
                            } else { // Fila impar

                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados == $key) {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . $mov . "</div>";
                                    } else {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . "</div>";
                                    }
                                }
                                $key = $key - 10;
                            }
                            echo "</div>";
                        }
                        break;
                    case 2:
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<div class='row'>";
                            if (($i % 2) == 0) { // Fila par
                                $key2 = $key2 - 19;
                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados1 == $key2) {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . $mov1 . "</div>";
                                    } else {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . "</div>";
                                    }
                                }
                                $key2 = $key2 - 11;
                            } else { // Fila impar

                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados1 == $key) {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . $mov1 . "</div>";
                                    } else {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . "</div>";
                                    }
                                }
                                $key = $key - 10;
                            }
                            echo "</div>";
                        }
                        break;
                    case 3:
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<div class='row'>";
                            if (($i % 2) == 0) { // Fila par
                                $key2 = $key2 - 19;
                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados2 == $key2) {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . $mov2 . "</div>";
                                    } else {
                                        echo "<div id='celda2' class='col-1 $color[$j] border border-1 border-black'>" . $key2++ . "</div>";
                                    }
                                }
                                $key2 = $key2 - 11;
                            } else { // Fila impar

                                for ($j = 1; $j <= 10; $j++) {
                                    if ($movimientosAcumulados2 == $key) {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . $mov2 . "</div>";
                                    } else {
                                        echo "<div id='celda' class='col-1 $color2[$j]  border border-1 border-black'>" . $key-- . "</div>";
                                    }
                                }
                                $key = $key - 10;
                            }
                            echo "</div>";
                        }
                        break;
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    if ($numeroDado != 0) {
        echo " ";
    } else {
        echo "<img  src='./images/ficha1.webp' alt='ficha' id='ficha1'>";
        echo "<img src='./images/ficha3.jpeg' alt='ficha' id='ficha3'>";
        echo " <img src='./images/ficha5.png' alt='ficha' id='ficha5'>";
        echo "<img src='./images/salida.jpg' alt='salida' id='salida'>";
    }
    ?>

    <img src="./images/escalera1.png" alt="escalera1" id="escalera1">
    <img src="./images/escalera2.png" alt="escalera2" id="escalera2">
    <img src="./images/escalera3.png" alt="escalera3" id="escalera3">
    <img src="./images/serpiente1.png" alt="serpiente1" id="serpiente1">
    <img src="./images/serpiente2.png" alt="serpiente2" id="serpiente2">
    <img src="./images/serpiente3.png" alt="serpiente3" id="serpiente3">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>