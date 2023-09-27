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
.Estilo12 {font-family: Arial, Helvetica, sans-serif; font-size: 15px; }
.Estilo8 {color: #FFFFFF; font-family: "Courier New", Courier, monospace; font-size: 14px; font-weight: bold; }
-->
</style></head>

<body>
<?php
include("funciones.php");
?>
 <?php
	$cnn= Conectar();	
	if ($_POST['btBuscar'] == "Buscar"){
	$vaJugador = $_POST['cajaBuscar'];
	$rs = mysql_query("select * from estadisticas where jugador='$vaJugador'",$cnn);
		if ($row = mysql_fetch_array($rs)){
			$vaEquipo		= $row["equipo"];
			$vaPj			= $row["pj"];
			$vaGoles		= $row["goles"];
			$vaTa			= $row["ta"];
			$vaTr			= $row["tr"];

		}
	}
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
      <table width="711" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="200"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><span class="Estilo3"><a href="adminTablaMod.php"><img src="flecha.png" width="16" height="15" />Tabla de Posiciones </a></span></td>
              </tr>
              <tr>
                <td><span class="Estilo3"><a href="adminEstadisticasMod.php"><img src="flecha.png" width="16" height="15" />Estadisticas Jugadores </a></span><span class="Estilo3"><a href="adminEstadios.html"></a></span></td>
              </tr>
              
              <tr>
                <td><span class="Estilo3"><a href="adminProgramacionMod.php"><img src="flecha.png" width="16" height="15" />Programacion</a></span><span class="Estilo3"><a href="adminCampeonato.html"></a></span></td>
              </tr>
              
          </table></td>
          <td width="10">&nbsp;</td>
          <td width="507"><p>&nbsp;</p>
              <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2"><div align="center"><span class="Estilo4"> Estadisticas Jugadores</span></div></td>
                </tr>
                <tr>
                  <td width="115">&nbsp;</td>
                  <td width="362">&nbsp;</td>
                </tr>
                <tr>
                  <td><span class="Estilo3">Jugador:
                      <label></label>
                  </span></td>
                  <td><label>
                        <?php
		  
		  $cnn=Conectar();
          $rSQL="Select jugador From estadisticas";
          $result = mysql_query($rSQL); ?>
          <select name="cajaBuscar">
            <?php while ($row=mysql_fetch_array($result))
            {echo '<option>'.$row["jugador"];} ?>
          </select>
                    </label>
                      <span class="Estilo3"><strong>
                      <label> <a href="adminEstadisticasJugadores2.html"></a></label>
                      <label>
                      <script language="JavaScript" type="text/javascript">

function AbreVentana() {
  window.open("mniJugadores.html", "_blank", "toolbar=no,menubar=no,directories=no,status=no,resizable=no,location=no,scrollbars=no,height=260,width=380,screenX=400,screenY=120")
}
                  </script>
                      </label>
                      <label>
                      <input name="btBuscar" type="submit" id="btBuscar" value="Buscar" />
                      </label>
                    </strong></span></td>
                </tr>
                <tr>
                  <td colspan="2"><p>&nbsp;</p>
                  <p>Equipo
                    <label>
                    <input name="cajaEquipo" type="text" id="cajaEquipo" size="7" value="<?php echo $vaEquipo; ?>" />
                    </label>
                  PJ
                  <label>
                  <input name="cajaPj" type="text" id="cajaPj" size="3" value="<?php echo $vaPj; ?>"/>
                  </label>
                  Goles
                  <label>
                  <input name="cajaGoles" type="text" id="cajaGoles" size="3" value="<?php echo $vaGoles; ?>"/>
                  </label> 
                  TA
                  <label>
                  <input name="cajaTa" type="text" id="cajaTa" size="3" value="<?php echo $vaTa; ?>"/>
                  </label> 
                  TR 
                  <label>
                  <input name="cajaTr" type="text" id="cajaTr" size="3" value="<?php echo $vaTr; ?>"/>
                  </label>
                  </p>
                  <p>
                    <label>
                      <div align="center">
                        <input name="btGuardar" type="submit" id="btGuardar" value="Guardar" />
                      
                    </label>
                  </td>
				  <?php
{
$cnn=conectar();
$vaJugador=$_POST['cajaBuscar'];
$rs=mysql_query("select * from estadisticas",$cnn);
	echo "<table align='center' border='1'>";
	echo "<tr align='center'>";
	echo '<td><b> Jugador </b></td>';
	echo '<td><b> Equipo </b></td>';
	echo '<td><b> PJ </b></td>';
	echo '<td><b> Goles </b></td>';
	echo '<td><b> TA </b></td>';
	echo '<td><b> TR </b></td>';
	echo '</tr>';

	while ($row=mysql_fetch_array($rs))
	{
	echo "<tr>";
	echo "<td>$row[jugador]</td>";
	echo "<td>$row[equipo]</td>";
	echo "<td>$row[pj]</td>";
	echo "<td>$row[goles]</td>";
	echo "<td>$row[ta]</td>";
	echo "<td>$row[tr]</td>";
	echo "</tr> \n";
	}
	echo "</table>";	
}
?>
                </tr> 
              </table>
              <table width="132" border="0" align="center" cellspacing="2">
                <tr>
                  <td width="122">Listar estadisticas</td>
                </tr>
                <tr>
                  <td><a href="ListarEstadisticas.php" target="_blank"><img src="verPDF.jpg" width="77" height="75" /></a></td>
                </tr>
              </table>
            <p align="center">&nbsp;</p></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
 <?php
if($_POST['btGuardar']=="Guardar"){
	$cnn=Conectar();
	$vaJugador = $_POST['cajaBuscar'];
	$vaEquipo=$_POST['cajaEquipo'];
	$vaPj=$_POST['cajaPj'];
	$vaGoles=$_POST['cajaGoles'];
	$vaTa=$_POST['cajaTa'];
	$vaTr=$_POST['cajaTr'];
	
	$sql= "Update estadisticas set equipo ='$vaEquipo', pj ='$vaPj', goles ='$vaGoles', ta ='$vaTa', tr ='$vaTr' where jugador = '$vaJugador'";

	mysql_query($sql,$cnn);
	
?>
	<script> alert("El registro ha sido ingresado correctamente")</script>
	
    <?php
}
?>
 
  
  
  
</div>
</body>
</html>
