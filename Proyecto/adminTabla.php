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
.Estilo22 {	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
}
.Estilo14 {color: #000000; font-family: Arial, Helvetica, sans-serif; }
.Estilo15 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.Estilo21 {color: #FFFFFF; font-weight: bold; font-size: 14px; }
.Estilo23 {	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
}
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
                  <td colspan="2"><div align="center"><span class="Estilo4">Tabla Posiciones </span></div></td>
                </tr>
                <tr>
                  <td colspan="2"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                      <tr>
                        <td bgcolor="#FFFFFF" class="Estilo22">Equipo
                        <label>
                        <?php
		  
		  $cnn=Conectar();
          $rSQL="Select equipo From tablaposiciones order by pts";
          $result = mysql_query($rSQL); ?>
          <select name="cajaEquipo">
            <?php while ($row=mysql_fetch_array($result))
            {echo '<option>'.$row["equipo"];} ?>
          </select>
</label></td>
                      </tr>
                      <tr>
                        <td class="Estilo22">&nbsp;</td>
                      </tr>
                      
                  </table></td>
                </tr>
                <tr>
                  <td width="4">&nbsp;</td>
                  <td width="591"><label>
                    <div align="center">
                        
                        PTS
                        <input name="cajaPts" type="text" id="cajaPts" size="3" /> 
                        PJ
                        <input name="cajaPj" type="text" id="cajaPj" size="3" />
                        PG
                        <input name="cajaPg" type="text" id="cajaPg" size="3" />
                        PE
                        <input name="cajaPe" type="text" id="cajaPe" size="3" />
                        PP
                        <input name="cajaPp" type="text" id="cajaPp" size="3" />
                        GF
                        <input name="cajaGf" type="text" id="cajaGf" size="3" />
                        GC
                        <input name="cajaGc" type="text" id="cajaGc" size="3" />
                        DIF
                        <input name="cajaDif" type="text" id="cajaDif" size="3" />
                        <br />
                        <br />
                        <input name="btGuardar" type="submit" id="btGuardar" value="Guardar Cambios" />
                        </div>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input name="btTabla" type="submit" id="btTabla" value="Mostrar Posiciones" />
                  </label></td>
                </tr>
              </table>
              <table width="100" border="0" align="center" cellspacing="2">
                <tr>
                  <td>Listar tabla</td>
                </tr>
                <tr>
                  <td><a href="ListarTabla.php" target="_blank"><img src="verPDF.jpg" width="77" height="75" /></a></td>
                </tr>
              </table>
            <p>&nbsp;</p></td>
        </tr>
      </table>
	   
	   <?php
if($_POST['btGuardar']=="Guardar Cambios"){
	
	$cnn=Conectar();
	$vaEquipo=$_POST['cajaEquipo'];
	$vaPts=$_POST['cajaPts'];
	$vaPj=$_POST['cajaPj'];
	$vaPg=$_POST['cajaPg'];
	$vaPe=$_POST['cajaPe'];
	$vaPp=$_POST['cajaPp'];
	$vaGf=$_POST['cajaGf'];
	$vaGc=$_POST['cajaGc'];
	$vaDif=$_POST['cajaDif'];
	
	$sql= "Update tablaposiciones set pts ='$vaPts', pj ='$vaPj', pg ='$vaPg', pe ='$vaPe', pp ='$vaPp', gf ='$vaGf', gc ='$vaGc', dif ='$vaDif'
where equipo = '$vaEquipo'";

	mysql_query($sql,$cnn);
	
?>
	<script> alert("El registro ha sido ingresado correctamente")</script>
	
    <?php
}
?>
	  
<?php

if ($_POST['btTabla']=="Mostrar Posiciones"){
$cnn=conectar();
$rs=mysql_query("select * from tablaposiciones order by pts desc",$cnn);
	echo "<table align='center' border='1'>";
	echo "<tr align='center'>";
	echo '<td><b> Pos </b></td>';
	echo '<td><b> Equipo </b></td>';
	echo '<td><b> Pts </b></td>';
	echo '<td><b> PG </b></td>';
	echo '<td><b> PE </b></td>';
	echo '<td><b> PP </b></td>';
	echo '<td><b> GF </b></td>';
	echo '<td><b> GC </b></td>';
	echo '<td><b> Dif </b></td>';
	echo '</tr>';

	while ($row=mysql_fetch_array($rs))
	{
	echo "<tr>";
	echo "<td>$row[pos]</td>";
	echo "<td>$row[equipo]</td>";
	echo "<td>$row[pts]</td>";
	echo "<td>$row[pg]</td>";
	echo "<td>$row[pe]</td>";
	echo "<td>$row[pp]</td>";
	echo "<td>$row[gf]</td>";
	echo "<td>$row[gc]</td>";
	echo "<td>$row[dif]</td>";
	echo "</tr> \n";
	}
	echo "</table>";	
}
?>	  
	  
	  
      </form>
    <p class="Estilo2">&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>