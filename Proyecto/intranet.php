<?php session_start ();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo4 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; }
.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><img src="logosequipos.jpg" width="800" height="45" /></div></td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
      <table width="450" height="217" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="intranet.png"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><p class="Estilo4"><img src="user.png" width="23" height="25" />Usuario</p>
                </td>
              <td><input name="cajaUsuario" type="text" id="cajaUsuario" size="25" maxlength="15" /></td>
            </tr>
            <tr>
              <td><span class="Estilo4"><img src="llaves.png" width="23" height="25" />Contrase&ntilde;a</span></td>
              <td><input name="cajaClave" type="password" id="cajaClave" size="25" maxlength="15" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><p class="Estilo7">(Recuperar contrase&ntilde;a) </p>
                <p class="Estilo7">
                  <label>
                  <input name="btnIngresar" type="submit" id="btnIngresar" value="Ingresar" />
                  </label>
                </p></td>
            </tr>
            <tr>
              <td colspan="2"><input type="checkbox" name="EliminarDatos22" value="1" onclick="onclickEliminar()" />
                <span class="Estilo9"> Eliminar nombre de usuario y clave recordados</span></td>
              </tr>
            <tr>
              <td colspan="2"><input type="checkbox" name="EliminarDatos3" value="1" onclick="onclickEliminar()" />
                <span class="Estilo9">Recordar este nombre de usuario y clave</span></td>
              </tr>
            <tr>
              <td colspan="2"></td>
              </tr>
          </table></td>
      </tr>
    </table>
      <p align="center">&nbsp;</p>
      </td>
  </tr>
</table>

 <?php 
  if ($_POST['btnIngresar']=="Ingresar"){
  include("funciones.php");
  $cnn=conectar();
  $sql="select * from usuarios where usuario= '".$_POST['cajaUsuario']."' and clave= '".$_POST['cajaClave']."' ";
  $rs=mysql_query($sql,$cnn);
  		if (mysql_num_rows($rs) != 0){
  $row = mysql_fetch_array($rs);
		if($row[2]==$_POST['cajaClave']){
				
				if($row['tipo']==1){
					$_SESSION['id']=$row[0];
					$_SESSION['DatoUsuario']=$row[1];
					$_SESSION['DatoClave']=$row[2];	
					$_SESSION['DatoNombre']=$row[4];	
					$_SESSION['DatoApellido']=$row[5];	
					$_SESSION['DatoTipo']=$row[3];	
					?>  <script type="text/javascript">window.location="admin.php";</script><?php 	  
				  }else{
				  		if($row['tipo']==2){
							$_SESSION['id']=$row[0];
							$_SESSION['DatoUsuario']=$row[1];
							$_SESSION['DatoClave']=$row[2];	
							$_SESSION['DatoNombre']=$row[4];	
							$_SESSION['DatoApellido']=$row[5];	
							$_SESSION['DatoTipo']=$row[3];
							?>  <script type="text/javascript">window.location="mod.php";</script><?php 	  
					 	 }else{
								if($row['tipo']==3){
									$_SESSION['id']=$row[0];
									$_SESSION['DatoUsuario']=$row[1];
									$_SESSION['DatoClave']=$row[2];	
									$_SESSION['DatoNombre']=$row[4];	
									$_SESSION['DatoApellido']=$row[5];	
									$_SESSION['DatoTipo']=$row[3];	
									?>  <script type="text/javascript">window.location="visitas.php";</script><?php 
						  			}
							}
					}
				  
	 }else{
					 ?> <script>alert('Usuario no existe')</script>; <?php
					  }			  
			  }
  		}

  ?>
  
</form>
</body>
</html>
