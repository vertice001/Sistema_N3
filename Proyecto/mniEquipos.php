<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language='javascript' src="popcalendar.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo2 {color: #FFFFFF}
.Estilo3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo4 {font-family: Arial, Helvetica, sans-serif}
body {
	background-image: url();
}
-->
</style>
</head>

<body>
<?php
include("funciones.php");
?>
<label></label>
<form id="form1" name="form1" method="post" action="">
  <table width="282" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center" class="Estilo3">Agregar Equipos</div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
      <td width="150" height="28"><span class="Estilo4">Fundacion</span></td>
      <td width="132">:
        <input name="nombre_de_la_caja" type="text" id="dateArrival" onclick="popUpCalendar(this, form1.dateArrival, 'mm-dd-yyyy');" size="16" /></td>
    </tr>
    <tr>
      <td height="27"><span class="Estilo4">Equipo</span></td>
      <td>:
        <input name="cajaEquipo" type="text" id="cajaEquipo" size="16" maxlength="12" /></td>
    </tr>
    <tr>
      <td height="35" class="Estilo4">Direccion</td>
      <td height="35"><span class="Estilo4">:</span><span class="Estilo3">
        <label>
        <input name="cajaDireccion" type="text" id="cajaDireccion" size="16" />
        </label>
       
      </span></td>
    </tr>
    <tr>
      <td height="29" class="Estilo4">Fono</td>
      <td><label> :
        <input name="cajaFono" type="text" id="cajaFono" size="16" />
      </label></td>
    </tr>
    <tr>
      <td height="28"><span class="Estilo4">Sitio Web </span></td>
      <td>:
        <label>
          <input name="cajaSitio" type="text" id="cajaSitio" size="16" />
        </label></td>
    </tr>
    <tr>
      <td height="26" colspan="2"><label></label></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td><span class="Estilo2">: </span>
          <input name="btAgregar" type="submit" id="btAgregar" value="Agregar" /></td>
    </tr>
  </table>
</form>
<?php
if($_POST['btAgregar']=="Agregar"){
	
	$cnn=Conectar();
	$vaFecha=$_POST['nombre_de_la_caja'];
	$vaHora=$_POST['cajaEquipo'];
	$vaEstadio=$_POST['cajaDireccion'];
	$vaArbitro=$_POST['cajaFono'];
	$vaLocal=$_POST['cajaSitio'];
	
	$sql= "insert into equipos values
('','$vaHora','$vaEstadio','$vaFecha','$vaArbitro','$vaLocal')";

	mysql_query($sql,$cnn);
?>
<script> alert("El registro ha sido ingresado correctamente")</script>
	
    <?php
}
?>


</body>

</html>
