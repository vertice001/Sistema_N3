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
<form id="form1" name="form1" method="post" action="">
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="479">&nbsp;</td>
      <td width="99"><img src="home.png" width="25" height="25" /><span class="Estilo1"> <a href="inicio.html">Home</a></span></td>
      <td width="172"><img src="intra.png" width="25" height="25" /><span class="Estilo1"><a href="intranet.php"> Salir Intranet</a> </span></td>
    </tr>
    <tr>
      <td colspan="3"><p>&nbsp;</p>
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
              <td width="510"><table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="2"><div align="center" class="Estilo4">Bienvenido a tu intranet </div></td>
                  </tr>
                  <tr>
                    <td width="128" rowspan="4"><img src="intra.png" width="128" height="128" /></td>
                    <td width="272">&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="Estilo3"><strong><?php echo" " .$_SESSION[nombres_];echo" " .$_SESSION[apellidos_]; ?></strong> </span></td>
                  </tr>
                  <tr>
                    <td><span class="Estilo3"> Has entrado a la intranet con tu perfil de&nbsp;<strong>Administrador</strong>. </span></td>
                  </tr>
                  <tr>
                    <td><span class="Estilo3">Rancagua, Martes, 13 de Noviembre de 2012 </span></td>
                  </tr>
              </table></td>
            </tr>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </table>
</form>
</body>
</html>
