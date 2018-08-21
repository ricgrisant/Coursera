<?php

	include_once("class/class_conexion.php");
	$conexion = new Conexion();
	$sql = "select e.FIRST_NAME,e.LAST_NAME,e.SALARY,ROWNUM as row1 from HR.EMPLOYEES e
	    order by e.SALARY desc";
	//$params = array(1, "some data");
	$conexion->consultaSql($sql);
	$stmt = $conexion->consultaSql($sql);
	if( $stmt === false ) {
		die( print_r( oci_error(), true));
	}

	echo "<table border='1'>
	<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	</tr>";
	oci_execute($stmt);

	while($row = $conexion->obtenerFila($stmt))
	{
		echo "<tr>";
		echo "<td>" . $row['FIRST_NAME'] . "</td>";
		echo "<td>" . $row['LAST_NAME'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	var_dump($row);

	$conexion->liberarResultado($stmt);

?>