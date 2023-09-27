<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("campeonato", $conexion);
$queEmp = "select usuarios.usuario, usuarios.clave, tipousuario.tipo, usuarios. Nombre, usuarios.Apellido, usuarios.Rut from usuarios, tipousuario where (usuarios.tipo=tipousuario.id)";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>Num</b>',
				'usuario'=>'<b>USUARIO</b>',
				'clave'=>'<b>CLAVE</b>',
				'tipo'=>'<b>TIPO</b>',
				'Nombre'=>'<b>NOMBRE</b>',
				'Apellido'=>'<b>APELLIDO</b>',
				'Rut'=>'<b>RUT</b>'
				
				);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>TITULO DEL INFORME</b>\n";
$txttit.= "HECHO POR PROFE DUQUE \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>