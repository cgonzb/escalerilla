<?php
print_r($_POST);
session_start();

$rut = explode('-',$_POST['data']);
$rut = $rut[0];


require_once('../capaControladores/usuarios.php');

$datos = usuarios::Datos($rut);

echo json_encode($datos);

?>
