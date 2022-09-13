<?php

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$telefono= $_POST['telefono'];
$correo= $_POST['ciudad'];
$ciudad= $_POST['ciudad'];


echo "<h2> Información Registrada Correctamente </h2>";
echo "El nombre recibido es:" .$nombre. " <br>";
echo "El apellido recibido es:" .$apellido. " <br>";
echo "El telefono recibido es:" .$telefono. " <br>";
echo "El correo recibido es:" .$correo. " <br>";
echo "La ciudad recibida es:" .$ciudad. " <br>";
?>