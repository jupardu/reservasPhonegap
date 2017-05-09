<?php
header("access-control-allow-origin: *");
include("conexion.php");

$sentencia = "select * from reserva";

$query = mysqli_query($conexion, $sentencia);

$cantidadRegistros = mysqli_num_rows($query);
if ($cantidadRegistros > 0) {
	while ($row = mysqli_fetch_array($query)) {
		echo "Nombre: ".$row["nombre"]."<br/>"; 
		echo "Apellidos: ".$row["apellidos"]."<br/>"; 
		echo "Placa: ".$row["placa"]."<br/><br/>"; 
	}
}else{
	echo "No hay registros";
}

mysqli_close($conexion);
?>