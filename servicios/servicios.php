<?php
$identificador = isset($_GET['tarjeta']) ? $_GET['tarjeta'] : '';
if ($identificador == 'Consultoria') {
    echo '<p>Consultoria</p>';
} else if ($identificador == 'Implementacion') {
    echo '<p>Implementacion</p>';
} else if ($identificador == 'Tercearizacion') {
    echo '<p>Tercearizacion</p>';
} else if ($identificador == 'Desarrollo') {
    echo '<p>Desarrollo</p>';
} else {
    echo '<p>TODOS</p>';
}
?>