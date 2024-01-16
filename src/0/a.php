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


    // Here should be the toast alarm to see the new Turn ??????????
    // -------------------------------------------------------------
    echo "
    <p>Los datos enviados fueron:<br>
        * t. documento: <b>$t_documento</b><br>
        * documento: <b>$documento</b><br>
        * t. atención: <b>$t_atencion</b><br>
    </p>";
    // -------------------------------------------------------------

    try {
        $dbh = new PDO($DB_INFO, $DB_USERNAME, $DB_PASSWORD);

        session_start();

        $query = "SELECT letra, numero FROM turno
                WHERE t_atencion = :t_atencion
                ORDER BY id DESC, fecha DESC
                LIMIT 1;";
        
// $query = "SELECT CONCAT(letra, LPAD(numero, 3, 0)) AS turno, t_atencion FROM turno
// WHERE t_atencion = 'preferencial'
// ORDER BY fecha DESC, turno DESC
// LIMIT 1;";
        $sth = $dbh -> prepare($query);
        $sth -> bindParam(':t_atencion', $t_atencion);
        $sth -> setFetchMode(PDO::FETCH_ASSOC);
        $sth -> execute();

        // Save 'letra' and 'numero' columns data from query and assings them to new variables
        $lastTurn = $sth -> fetch();
        $lastLetter = $lastTurn['letra'];
        $lastNumber = $lastTurn['numero'];

        echo "<br>
        $lastLetter<br>
        $lastNumber<br>";
        
        $dbh = null;
        $sth = null;
        //$lastTurn = getLastTurn($t_atencion);
        //echo $lastTurn;
    
    }
    catch(PDOException $e) {
        echo "
            <br>
            <div class='spacing-10px'>
                <p><h3>¡Ups!, algo salió mal :(</h3>
                    No se pudo realizar la conección con la base de datos '<b>$DB_NAME</b>':<br>
                    $e
                </p>
            </div>";
    }
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
    session_start();
}




?>