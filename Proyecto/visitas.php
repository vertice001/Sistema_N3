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
              <td><span class="Estilo3"><a href="visitasBoletin.php"><img src="flecha.png" width="16" height="15" />Suscripcion Boletines </a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="visitasActualizaciones.php"><img src="flecha.png" width="16" height="15" />Suscripcion Actualizaciones </a></span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"><a href="visitasPromo.php"><img src="flecha.png" width="16" height="15" />Promociones y Descuentos </a></span></td>
            </tr>
            
          </table></td>
          <td width="10">&nbsp;</td>
          <td width="510"><table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2"><div align="center" class="Estilo4">Bienvenido a tu intranet </div></td>
              </tr>
            <tr>
              <td width="128" rowspan="4"><img src="intra.png" width="128" height="128" /></td>
              <td width="272">&nbsp; </td>
            </tr>
            <tr>
              <td><span class="Estilo3"><strong><?php echo" " .$_SESSION[nombres_];echo" " .$_SESSION[apellidos_]; ?></strong> </span></td>
            </tr>
            <tr>
              <td><span class="Estilo3"> Has entrado a la intranet con tu perfil de&nbsp;<strong>Visita.</strong>. </span></td>
            </tr>
            <tr>
              <td><span class="Estilo3">Rancagua, Martes, 13 de Noviembres de 2012 </span></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
