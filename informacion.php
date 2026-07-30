<?php

$Identificacion = $_POST['Identificacion'];
$NomApellidos = $_POST['NomApellidos'];
$Cargo = $_POST['Cargo'];
$Salario = $_POST['Salario'];

echo "La identificación del empleado es: " . $Identificacion;
echo "<br>";

echo "Los nombres y apellidos del empleado son: " . $NomApellidos;
echo "<br>";

echo "El cargo del empleado es: " . $Cargo;
echo "<br>";

echo "El salario del empleado es: " . $Salario;

?>
