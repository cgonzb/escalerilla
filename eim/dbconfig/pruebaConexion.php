<?php
include(dirname(__FILE__) . '/dbconfig.php');
echo 'Conectando a :'.$servidor.' '.$nombre_usuario.' '.$contrasena.'...';

$link = mysql_connect($servidor, $nombre_usuario, $contrasena);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db('netbau_escalerillas');
?>