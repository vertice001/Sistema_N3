<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("campeonato", $conexion);
$queEmp = "select estadios.nombre, estadios.ubicacion, estadios.capacidad, estadios.fundacion, equipos.equipo from estadios, equipos where (estadios.equipo=equipos.id)";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>Num</b>',
				'nombre'=>'<b>NOMBRE</b>',
				'ubicacion'=>'<b>UBICACION</b>',
				'capacidad'=>'<b>CAPACIDAD</b>',
				'fundacion'=>'<b>FUNDACION</b>',
				'equipo'=>'<b>EQUIPO</b>'
				
				);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>LISTADO DE ESTADIOS</b>\n";


$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>