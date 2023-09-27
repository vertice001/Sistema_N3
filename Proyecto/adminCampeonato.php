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
<?php
include("funciones.php");
?>


<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="479">&nbsp;</td>
    <td width="99"><img src="home.png" width="25" height="25" /><span class="Estilo1"> <a href="inicio.html">Home</a></span></td>
    <td width="172"><img src="intra.png" width="25" height="25" /><span class="Estilo1"><a href="intranet.php"> Salir Intranet</a> </span></td>
  </tr>
  <tr>
    <td colspan="3"><form id="form1" name="form1" method="post" action="">
      <p>&nbsp;</p>
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
              <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2"><div align="center"><span class="Estilo4">Campeonato</span></div></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><?php
{
$cnn=conectar();
$rs=mysql_query("select * from info",$cnn);
	echo "<table align='center' border='1'>";
	echo "<tr align='center'>";
	echo '<td><b> Informacion </b></td>';

	echo '</tr>';

	while ($row=mysql_fetch_array($rs))
	{
	echo "<tr>";
	echo "<td>$row[informacion]</td>";
	echo "</tr> \n";
	}
	echo "</table>";	
}
?>
                    &nbsp;</td>
                </tr>
                <tr>
                  <td width="172">&nbsp;</td>
                  <td width="278">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><label> </label>
                      <div align="center">
                        <textarea name="cajaInfo" cols="60" rows="4" id="cajaInfo"  >Edite aqui el texto...</textarea>
                    </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input name="btModificar" type="submit" id="btModificar" value="Modificar" /></td>
                </tr>
              </table>
            <label></label>
              <p>&nbsp;</p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </form>
    <p class="Estilo2">&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>

<?php
if($_POST['btModificar']=="Modificar"){
	$cnn=Conectar();
	$vaInfo = $_POST['cajaInfo'];
	
	
	$sql= "Update info set informacion ='$vaInfo'";

	mysql_query($sql,$cnn);
	
?>
	<script> alert("El registro ha sido ingresado correctamente")</script>
	
    <?php
}
?>

</body>
</html>
