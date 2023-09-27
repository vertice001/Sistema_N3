<?php 
	session_start();
	
	if(! isset($_SESSION['id']))
	{
		session_destroy();
		//header ("Location: index.php");//
		?>  <script type="text/javascript">window.location="intranet.php";</script><?php 
	}else{
	$_SESSION[nombre_]=$_SESSION['DatoUsuario'];
	$_SESSION[nombres_]=$_SESSION['DatoNombre'];
	$_SESSION[apellidos_]=$_SESSION['DatoApellido'];
	$_SESSION[tipo_]=$_SESSION['DatoTipo'];
	echo"Usuario en linea: " .$_SESSION[nombres_];echo" ".$_SESSION[apellidos_];
	} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo2 {color: #FFFFFF}
.Estilo3 {font-family: Arial, Helvetica, sans-serif}
.Estilo4 {font-family: Arial, Helvetica, sans-serif; font-size: 18px; }
-->
</style></head>

<body>
<?php include("funciones.php");
 ?>
<?php 
if($_POST['btnBuscar']=="Buscar"){
 $cnn=Conectar();
 $vaRut=$_POST['cajaRut'];
 
$rs = mysql_query("Select * from dt where rut = '$vaRut'",$cnn);

	if ($row= mysql_fetch_array($rs)){
		$muestroFecha= $row['fecha_nac'];
		$muestroEquipo= $row['equipo'];
		$muestroNombre= $row['nombre'];
		$muestroApellidos= $row['apellido'];
		$muestroRut= $row['rut'];
		
	}

}

?>
<form id="form1" name="form1" method="post" action="">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="479">&nbsp;</td>
    <td width="99"><img src="home.png" width="25" height="25" /><span class="Estilo1"> <a href="inicio.html">Home</a></span></td>
    <td width="172"><img src="intra.png" width="25" height="25" /><span class="Estilo1"><a href="intranet.php"> Salir Intranet</a> </span></td>
  </tr>
  <tr>
    <td colspan="3"><p class="Estilo2">&nbsp;</p>
      <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="200"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><span class="Estilo3"><a href="adminUsr.php"><img src="flecha.png" width="16" height="15" />Usuarios</a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminArbitro.php"><img src="flecha.png" width="16" height="15" />Arbitros</a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminEquipos.php"><img src="flecha.png" width="16" height="15" />Equipos</a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminPresi.php"><img src="flecha.png" width="16" height="15" />Presidentes Equipos </a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminDt.php"><img src="flecha.png" width="16" height="15" />Directores Tecnicos </a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminJugadores.php"><img src="flecha.png" width="16" height="15" />Jugadores</a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminTabla.php"><img src="flecha.png" width="16" height="15" />Tabla de Posiciones </a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminEstadisticasJugadores.php"><img src="flecha.png" width="16" height="15" />Estadisticas Jugadores </a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminEstadios.php"><img src="flecha.png" width="16" height="15" />Estadios</a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminProgramacion.php"><img src="flecha.png" width="16" height="15" />Programacion</a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="adminCampeonato.php"><img src="flecha.png" width="16" height="15" />Campeonato</a></span></td>
            </tr>
            
          </table></td>
          <td width="10">&nbsp;</td>
          <td width="510"><p>&nbsp;</p>
            <table width="450" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td colspan="2"><div align="center"><span class="Estilo4">Director Tecnico </span></div></td>
              </tr>
              <tr>
                <td width="161" class="Estilo3"><strong class="Estilo3">I</strong>ngrese Rut:</td>
                <td width="289"><input name="cajaRut" type="text" id="cajaRut" />
                  <span class="Estilo3"><strong>
                  <label>
                  <input name="btnBuscar" type="submit" id="btnBuscar" value="Buscar" />
                  </label>
				  
                  <input name="button" type="button" onClick="AbreVentana()" value="+" />
                </strong></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="Estilo3"><strong>
                  <label>
                  <a href="adminDt2.html"></a></label>
                  <label>
                  <script language="JavaScript" type="text/javascript">

function AbreVentana() {
  window.open("mniDt.php", "_blank", "toolbar=no,menubar=no,directories=no,status=no,resizable=no,location=no,scrollbars=no,height=280,width=400,screenX=400,screenY=120")
}
                  </script>
                  </label>
                </strong></span></td></tr>
              <tr>
                <td class="Estilo3">Nombre:</td>
                <td><label>
                  <input name="cajaNombre" type="text" id="cajaNombre" value=<?php echo $muestroNombre; ?> >
                </label></td>
              </tr>
              <tr>
                <td class="Estilo3">Apellido:</td>
                <td><label>
                  <input name="cajaApellido" type="text" id="cajaApellido" value=<?php echo $muestroApellidos; ?> >
                </label></td>
              </tr>
              <tr>
                <td class="Estilo3">Fecha de nacimiento:</td>
                <td><label>
                  <input name="cajaFecha" type="text" id="cajaFecha" value=<?php echo $muestroFecha; ?> >
                </label></td>
              </tr>
              <tr>
                <td class="Estilo3">Equipo:</td>
                <td><label>
                  <input name="cajaEquipo" type="text" id="cajaEquipo" value=<?php echo $muestroNombre; ?> >
                </label></td>
              </tr>
              <tr>
                <td class="Estilo3">Rut:</td>
                <td><label>
                  <input name="cajaRut1" type="text" id="cajaRut1" value=<?php echo $muestroRut; ?>>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label></label></td>
                <td><input name="btnGuardar" type="submit" id="btnGuardar" value="Guardar" />
                  <input name="coRut" type="hidden" id="coRut" value="<?php echo $vaRut; ?>" />
                  <label>
                  <input name="btEliminar" type="submit" id="btEliminar" value="Eliminar" />
                  </label></td>
              </tr>
            </table>
            <table width="100" border="0" align="center" cellspacing="2">
              <tr>
                <td>Listar DT</td>
              </tr>
              <tr>
                <td><a href="ListarDt.php" target="_blank"><img src="verPDF.jpg" width="77" height="75" /></a></td>
              </tr>
            </table>
            <p>&nbsp;</p>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p></td>
  </tr>
</table>
<?php
  $cnn=Conectar();
  if ($_POST['btnGuardar'] == "Guardar"){
  $vaRuT = $_POST['coRut'];
  
  $vaNombre    = $_POST['cajaNombre'];
  $vaApellidos = $_POST['cajaApellido'];
  $vaRUT 	   = $_POST['cajaRut1'];
  $vaFecha 	   = $_POST['cajaFecha'];
  $vaEquipo    = $_POST['cajaEquipo'];
  
  
  $sql   = "Update dt set nombre ='$vaNombre', apellido ='$vaApellidos', rut ='$vaRUT', fecha_nac ='$vaFecha', equipo ='$vaEquipo' where  rut ='$vaRuT'";
  mysql_query ($sql, $cnn);  
  ?>
  <script> alert ("DATOS MODIFICADOS")</script>	
	 	
  <?php
  }
  ?>
  
  <?php
if ($_POST['btEliminar']=="Eliminar"){
$cnn=Conectar();
$vaRuT=$_POST['coRut'];
$sql= "delete from dt where equipo = '$vaRuT'";

mysql_query($sql,$cnn);

?>
<script> alert("Se elimino el cliente")</script>

<?php
}
?>
  
  
  
</form>
</body>
</html>
