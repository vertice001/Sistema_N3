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
.Estilo5 {color: #000000}
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
      <td colspan="2"><div align="center" class="Estilo3">Agregar Jugador </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
      <td width="150" height="28"><span class="Estilo4">Fecha Nacimiento </span></td>
      <td width="132">:
        <input name="nombre_de_la_caja" type="text" id="dateArrival" onclick="popUpCalendar(this, form1.dateArrival, 'mm-dd-yyyy');" size="16" /></td>
    </tr>
    <tr>
      <td height="27"><span class="Estilo4">Nombre</span></td>
      <td>:
        <input name="cajaNombre" type="text" id="cajaNombre" size="16" maxlength="12" /></td>
    </tr>
    <tr>
      <td height="24" class="Estilo4">Apellido</td>
      <td height="24"><span class="Estilo4">:</span><span class="Estilo3">
        <label>
        <input name="cajaApellido" type="text" id="cajaApellido" size="16" />
        </label>
       
      </span></td>
    </tr>
    <tr>
      <td height="26" class="Estilo4">Rut</td>
      <td><label> :
        <input name="cajaRut" type="text" id="cajaRut" size="16" />
      </label></td>
    </tr>
    <tr>
      <td height="28"><span class="Estilo4">Equipo</span></td>
      <td>:
        <label>
          <input name="cajaEquipo" type="text" id="cajaEquipo" size="16" />
        </label></td>
    </tr>
    <tr>
      <td height="26"><span class="Estilo4">Posicion</span></td>
      <td>:
        <input name="cajaPosicion" type="text" id="cajaPosicion" size="16" maxlength="16" />
          <label></label></td>
    </tr>
    <tr>
      <td height="26"><span class="Estilo4">Nacionalidad</span></td>
      <td><span class="Estilo2"><span class="Estilo5">:</span>
          <input name="cajaNacion" type="text" id="cajaNacion" size="16" maxlength="16" />
          <label></label>
      </span></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td><input name="btAgregar" type="submit" id="btAgregar" value="Agregar" /></td>
    </tr>
  </table>
</form>
<?php
if($_POST['btAgregar']=="Agregar"){
	
	$cnn=Conectar();
	
	$vaNombre=$_POST['cajaNombre'];
	$vaApellido=$_POST['cajaApellido'];
	$vaRut=$_POST['cajaRut'];
	$vaFecha=$_POST['nombre_de_la_caja'];
	$vaEquipo=$_POST['cajaEquipo'];
	$vaPosicion=$_POST['cajaPosicion'];
	$vaNacion=$_POST['cajaNacion'];
	
	$sql= "insert into jugadores values
('','$vaNombre','$vaApellido','$vaRut','$vaFecha','$vaEquipo','$vaPosicion','$vaNacion')";

	mysql_query($sql,$cnn);
?>
<script> alert("El registro ha sido ingresado correctamente")</script>
	
    <?php
}
?>


</body>

</html>
