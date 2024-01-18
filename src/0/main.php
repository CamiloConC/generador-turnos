<?php
// ** DATABASE CREDENTIALS **
$DB_NAME = "wb_turnos";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_INFO = "mysql:host=localhost;dbname=".$DB_NAME.";charset=utf8";

if (isset($_POST['submit'])) {
    $t_documento = $_POST['t_documento'];
    $documento = $_POST['documento'];
    $t_atencion = isset($_POST['t_atencion']) ? 'preferencial' : 'normal';

    // Try to connect to database
    try {
        $connection = new PDO($DB_INFO, $DB_USERNAME, $DB_PASSWORD, array(PDO::ATTR_PERSISTENT => true));
        
        // echo "
        // <html>
        //     <p class='spacing-10px'>
        //         ¡Se ha establecido la conexión a la base dedatos! :)
        //     </p>
        // </html>";

    } catch (PDOException $e) {
        echo "
            <br>
            <div class='spacing-10px'>
                <p><h3>¡Ups!, algo salió mal :(</h3>
                    No se pudo realizar la conección con la base de datos '<b>$DB_NAME</b>':<br>".
                    $e->getMessage()."
                </p>
            </div>";
    }

    // Try to do all the needed transactions (1.Search for last turn, 2.Save the new one)
    try {
        $connection->beginTransaction();

        $query_a =   "SELECT letra, numero FROM turno
                    WHERE t_atencion = '$t_atencion'
                    ORDER BY id DESC, fecha DESC
                    LIMIT 1;";

        $stmt = $connection->query($query_a);
        // Save 'letra' and 'numero' columns data from query and assings them to new variables
        while ($row = $stmt->fetch()) {
            $lastLetter = $row['letra'];
            $lastNumber = $row['numero'];
        }

        // Saves the new turn assigned according to the last one by its 't_atencion' type
        $newTurn = getNewTurn($t_atencion, $lastLetter, $lastNumber);

        $query = "INSERT INTO turno (t_documento, documento, letra, numero, t_atencion)
                VALUES ('$t_documento', $documento, '$newTurn[0]', '$newTurn[1]', '$t_atencion');";

        $stmt = $connection -> exec($query);

        $newTurn = $newTurn[0] . sprintf('%03d', $newTurn[1]);

        // Send all transactions executed
        $connection->commit();

        // Shows on screen the assigned turn
        printNewTurn($t_documento, $documento, $t_atencion, $newTurn);

    } catch (PDOException $e) {
        $connection->rollBack();
        echo "
            <br>
            <div class='spacing-10px'>
                <p><h3>¡Ups!, algo salió mal :(</h3>
                    No se realizar la transacción requerida en la base de datos '<b>$DB_NAME</b>':<br>".
                    $e->getMessage()."
                </p>
            </div>";
    } finally {
        // Close connection to database
        $connection = null;
        $stmt = null;
    }

} else {
    echo "
    <center>
        <p class='spacing-10px'>
            Digite los datos y luego oprimar el botón 'imprimir'.
        </p>
    </center>";
}


function getNewTurn($t_atencion, $letra, $numero) {
    /*
    Variables 'letra' and 'numero' are going to change,
    from values of last turn assigned to the new one.
    All this according of 't_atencion' value type
    */
    if ($numero < 9) {
        $numero++;
    } else {
        if ($letra == 'W' || $letra == 'Z') {
            switch($t_atencion) {
                case 'preferencial':
                    $letra = 'X';
                    break;
                default:
                    $letra = 'A';
                    break;
            }
        } else {
            // 'chr()' converts code ascii to text
            // 'ord()' converts text to code ascii
            $letra = chr(ord($letra) + 1);
        }
        $numero = 0;
    }
    if ($letra =='') {
        $letra = 'A';
    }
    $newTurn = array($letra, $numero);
    return $newTurn;
}

function printNewTurn($t_documento, $documento, $t_atencion, $newTurn) {
    $upperComment = "Este turno es único e intrasferible.";
    $lowerComment = "No bote o extravíe este tiquete, ya que podría no ser atendido.";
    echo "

    <html>
    <div class='popup' id='popup-1'>
        <div class='bg-blur'>
            <div class='content'>
                <div class='close-btn' onClick='togglePopup()'>&times;</div>
                <center>
                    <p class='compact'>
                        $upperComment
                    </p>
                        <br><br>
                    <p>
                        Datos registrados:
                    </p>

                    <h5>$t_documento - $documento</h5>
                    <h1>$newTurn</h1><br>

                    <p class='small'>
                        Tipo atención<br>
                        <b style='height: 10em;'>$t_atencion</b>
                    </p>
                        <br><br>
                    <p class='compact'>
                        $lowerComment
                    </p>
                </center>
            </div>
        </div>
    </div>
    <html>
";
}
