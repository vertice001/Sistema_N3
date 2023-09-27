<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
  <table width="282" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2"><div align="center" class="Estilo3">Agregar Usuario </div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
      <td height="28"><span class="Estilo4">Usuario</span></td>
      <td>:
        <input name="cajaUsuario" type="text" id="cajaUsuario" size="16" maxlength="12" /></td>
    </tr>
    <tr>
      <td height="27"><span class="Estilo4">Contrase&ntilde;a</span></td>
      <td>:
        <input name="cajaClave" type="password" id="cajaClave" size="16" maxlength="12" /></td>
    </tr>
    <tr>
      <td height="35" class="Estilo4">Categoria</td>
      <td height="35"><span class="Estilo4">:</span><span class="Estilo3">
       <?php
              
			  $consulta = "SELECT id,tipo FROM tipousuario order by id asc";
			  $con      = conectar();
			  $result   = mysql_query ($consulta,$con);			  
			  ?>
              <?php
              $varegion =$_POST['cmbRegion']
			  ?>
              <select name="cmbRegion" size="1"><?php echo $varegion;?>
                  <option>Seleccione una opcion</option> 
                  <?php
                  while($fila=mysql_fetch_row($result)){
					  echo "<option value='".$fila['0']."'>".$fila['1']." </option>";
					  }
				  ?> 
      </span></td>
    </tr>
    <tr>
      <td height="29" class="Estilo4">Nombre</td>
      <td><label> :
        <input name="cajaNombre" type="text" id="cajaNombre" size="16" />
      </label></td>
    </tr>
    <tr>
      <td height="28"><span class="Estilo4">Apellido </span></td>
      <td>:
        <label>
          <input name="cajaApellido" type="text" id="cajaApellido" size="16" />
        </label></td>
    </tr>
    <tr>
      <td height="26"><span class="Estilo4">Rut</span></td>
      <td>:
        <input name="cajaRut" type="text" id="cajaRut" size="8" maxlength="8" />
          <label></label></td>
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
	$vaCod=$_POST['cajaCod'];
	$vaUsuario=$_POST['cajaUsuario'];
	$vaClave=$_POST['cajaClave'];
	$vaRegion=$_POST['cmbRegion'];
	$vaNombre=$_POST['cajaNombre'];
	$vaApellido=$_POST['cajaApellido'];
	$vaRut=$_POST['cajaRut'];
	
	$sql= "insert into usuarios values
('$vaCod','$vaUsuario','$vaClave','$vaRegion','$vaNombre','$vaApellido','$vaRut')";

	mysql_query($sql,$cnn);
?>
<script> alert("El registro ha sido ingresado correctamente")</script>
	
    <?php
}
?>


</body>

</html>
