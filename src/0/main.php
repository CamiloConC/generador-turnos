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

    try {
        $dbh = new PDO($DB_INFO, $DB_USERNAME, $DB_PASSWORD);

        session_start();

        $query = "SELECT letra, numero FROM turno
                WHERE t_atencion = :t_atencion
                ORDER BY id DESC, fecha DESC
                LIMIT 1;";

        $sth = $dbh -> prepare($query);
        $sth -> bindValue(':t_atencion', $t_atencion);
        $sth -> setFetchMode(PDO::FETCH_ASSOC);
        $sth -> execute();

        // Save 'letra' and 'numero' columns data from query and assings them to new variables
        $lastTurn = $sth -> fetch();
        $lastLetter = $lastTurn['letra'];
        $lastNumber = $lastTurn['numero'];

        // Saves the new turn assigned according to the last one by its 't_atencion' type
        $newTurn = getNewTurn($t_atencion, $lastLetter, $lastNumber);

        $query = "INSERT INTO turno (t_documento, documento, letra, numero, t_atencion)
                VALUES ('$t_documento', $documento, '$newTurn[0]', '$newTurn[1]', '$t_atencion');";

        $sth = $dbh -> prepare($query);
        $sth -> execute();


        $dbh = null;
        $sth = null;

        $newTurn = $newTurn[0] . sprintf('%03d', $newTurn[1]);

        echo "
        <div class='principal'>
            <center>
                <h4>$t_documento - $documento</h4>
                <h1>".$newTurn."</h1>
            </center>
        </div>
        ";

    } catch(PDOException $e) {
        echo "
            <br>
            <div class='spacing-10px'>
                <p><h3>¡Ups!, algo salió mal :(</h3>
                    No se pudo realizar la conección con la base de datos '<b>$DB_NAME</b>':<br>
                    $e
                </p>
            </div>";
    }

} else {
    echo "
    <center>
        <p class=0spacing-10px;>
            Digite los datos y luego oprimar el botón 'enviar'.
        </p>
    </center>";
}



function getNewTurn($t_atencion, $letra, $numero) {
    if($numero < 9) {
        $numero++;
    } else {
        if($letra == 'W' || $letra == 'Z') {
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
    if($letra =='') {
        $letra = 'A';
    }
    $newTurn = array($letra, $numero);
    return $newTurn;
}
?>
