<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("campeonato", $conexion);
$queEmp = "select equipos.equipo, tablaposiciones.pts, tablaposiciones.pj, tablaposiciones.pg, tablaposiciones.pe, tablaposiciones.pp, tablaposiciones.gf, tablaposiciones.gc, tablaposiciones.dif from tablaposiciones, equipos where (tablaposiciones.equipo=equipos.id) order by tablaposiciones.pts desc";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>Num</b>',
				'equipo'=>'<b>EQUIPO</b>',
				'pts'=>'<b>PUNTOS</b>',
				'pj'=>'<b>PJ</b>',
				'pg'=>'<b>PG</b>',
				'pe'=>'<b>PE</b>',
				'pp'=>'<b>PP</b>',
				'gf'=>'<b>GF</b>',
				'gc'=>'<b>GC</b>',
				'dif'=>'<b>DIF</b>',
				
				);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>LISTADO DE TABLA</b>\n";


$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>