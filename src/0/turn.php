<?php
// Arrays that will store all he alphabet letters.
$abecedario = array();
for($i = 65; $i == 90; $i++) {
    $abecedario[] = chr($i);
};








// Shows all data from 'Turno' table
// ...
while($row = $sth ->fetch()) {
    echo "<br>
    $lastLetter<br>
    $lastNumber<br>
        <style>
            th, td {
                padding: 5px;
            }

            table {
                margin: auto;
            }
        </style>
        <table>
            <tr>
                <th>Id:</th>
                <td>{$row['id']}</td>
            </tr>
            <tr>
                <th>T. documento:</th>
                <td>{$row['t_documento']}</td>
            </tr>
            <tr>
                <th>Documento:</th>
                <td>{$row['documento']}</td>
            </tr>
            <tr>
                <th>Letra:</th>
                <td>{$row['letra']}</td>
            </tr>
            <tr>
                <th>Número:</th>
                <td>{$row['numero']}</td>
            </tr>
            <tr>
                <th>T. atención:</th>
                <td>{$row['t_atencion']}</td>
            </tr>
            <tr>
                <th>Estado:</th>
                <td>{$row['estado']}</td>
            </tr>
            <tr>
                <th>Fecha:</th>
                <td>{$row['fecha']}</td>
            </tr>
        </table>
        ";
}

?>