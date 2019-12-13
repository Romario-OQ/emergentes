<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT sensor_ph, sensor_temp, data FROM data WHERE sensor_ph<>7 AND sensor_temp<>14";
	$resultado = $mysqli->query($query);
	$consulta = "SELECT count(sensor_ph) FROM data";
	$resultado2 = $mysqli->query($consulta);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'SENSOR PH',1,0,'C',1);
	$pdf->Cell(50,6,'SENSOR TEMP',1,0,'C',1);
	$pdf->Cell(50,6,'FECHA',1,1,'C',1);
	//$pdf->Cell(45,6,'consulta',1,1,'C',1);
	//select DATE_ADD(NOW(),INTERVAL 3 DAY) FROM data
	//select sensor_ph, sensor_temp, data FROM data WHERE data >= ( CURDATE() - INTERVAL 10 DAY )
	$pdf->SetFont('Arial','',10);
	//select sensor_ph, sensor_temp, data FROM data WHERE sensor_ph<>7.00 AND sensor_temp<>14
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,utf8_decode($row['sensor_ph']),1,0,'C');
		$pdf->Cell(50,6,$row['sensor_temp'],1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['data']),1,1,'C');
	}
	$pdf->Cell(40,10,'Hola Mundo: ',$rowss = $resultado2->fetch_assoc());
	$pdf->Output();
	
	
	
?>