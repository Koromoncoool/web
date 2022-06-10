<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inventario.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>


<?php
include("conexion.php");
$vector1="";
$vector2="";
$vector3="";
$vector4="";
$vector5="";
$vector6="";
$vector7="";
$vector8="";
$vector9="";
$vector10="";
if(isset($_POST['bb'])){
$bob=$_POST['bb'];
if($bob=="BUSCAR"){
$b=$_POST['bus'];
$sql=mysql_query("SELECT * FROM INVENTARIO WHERE ID_PRODUCTO='$b'");
while($lista=mysql_fetch_array($sql)){
$vector1=$lista[0];
$vector2=$lista[1];
$vector3=$lista[2];
$vector4=$lista[3];
$vector5=$lista[4];
$vector6=$lista[5];
$vector7=$lista[6];
$vector8=$lista[7];
$vector9=$lista[8];
$vector10=$lista[9];
	}
}
}

if(isset($_POST['ba'])){
$baa=$_POST['ba'];
if($baa=="AGREGAR"){
$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
$MARCA =$_POST['MARCA'];
$NOMBRE =$_POST['NOMBRE'];
$CLASE_ZAPATO =$_POST['CLASE_ZAPATO'];
$TAMANO =$_POST['TAMANO'];
$PRECIO=$_POST['PRECIO'];
$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
$CANTIDAD =$_POST['CANTIDAD'];
$NOMBRE_ENCARGADO =$_POST['NOMBRE_ENCARGADO'];
		
$sql=mysql_query("INSERT INTO INVENTARIO(ID_FABRICANTE,MARCA,NOMBRE,CLASE_ZAPATO,
TAMANO,PRECIO,PRECIO_DESCUENTO,CANTIDAD,NOMBRE_ENCARGADO) values('$ID_FABRICANTE','$MARCA','$NOMBRE',
'$CLASE_ZAPATO','$TAMANO','$PRECIO','$PRECIO_DESCUENTO','$CANTIDAD','$NOMBRE_ENCARGADO')",$conexion);					
			}
		}

if(isset($_POST['bl'])){
$bll=$_POST['bl'];
if($bll=="LIMPIAR"){
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
$MARCA =$_POST['MARCA'];
$NOMBRE =$_POST['NOMBRE'];
$CLASE_ZAPATO =$_POST['CLASE_ZAPATO'];
$TAMANO =$_POST['TAMANO'];
$PRECIO=$_POST['PRECIO'];
$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
$CANTIDAD =$_POST['CANTIDAD'];
$NOMBRE_ENCARGADO =$_POST['NOMBRE_ENCARGADO'];

$ID_FABRICANTE='';
$MARCA ='';
$NOMBRE ='';
$CLASE_ZAPATO ='';
$TAMANO ='';
$PRECIO='';
$PRECIO_DESCUENTO='';
$CANTIDAD ='';
$NOMBRE_ENCARGADO ='';
}
}
if(isset($_POST['bm'])){
$bmm=$_POST['bm'];
if($bmm=="ACTUALIZAR"){
	
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
$MARCA =$_POST['MARCA'];
$NOMBRE =$_POST['NOMBRE'];
$CLASE_ZAPATO =$_POST['CLASE_ZAPATO'];
$TAMANO =$_POST['TAMANO'];
$PRECIO=$_POST['PRECIO'];
$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
$CANTIDAD =$_POST['CANTIDAD'];
$NOMBRE_ENCARGADO =$_POST['NOMBRE_ENCARGADO'];

	$sql=mysql_query("UPDATE INVENTARIO SET ID_FABRICANTE='$ID_FABRICANTE',MARCA='$MARCA',
NOMBRE='$NOMBRE',CLASE_ZAPATO='$CLASE_ZAPATO',
TAMANO='$TAMANO',PRECIO='$PRECIO',PRECIO_DESCUENTO='$PRECIO_DESCUENTO',CANTIDAD='$CANTIDAD',
NOMBRE_ENCARGADO='$NOMBRE_ENCARGADO' where ID_PRODUCTO='$ID_PRODUCTO'",$conexion);
	


}
}

if(isset($_POST['be'])){
$bee=$_POST['be'];	
if($bee=="ELIMINAR"){
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
$MARCA =$_POST['MARCA'];
$NOMBRE =$_POST['NOMBRE'];
$CLASE_ZAPATO =$_POST['CLASE_ZAPATO'];
$TAMANO =$_POST['TAMANO'];
$PRECIO=$_POST['PRECIO'];
$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
$CANTIDAD =$_POST['CANTIDAD'];
$NOMBRE_ENCARGADO =$_POST['NOMBRE_ENCARGADO'];
$sql=mysql_query("DELETE FROM INVENTARIO WHERE ID_PRODUCTO='$ID_PRODUCTO'",$conexion);
		
		{
		
		}
	}
}
?>
<br>
<br>


<h1 align="center" class="display-2">INVENTARIO.</h1><br>
<center>
<div class="container">
<div class="form-group">
<form name="f1" action="inventario.php" method="post">
<h3 align="center">ID_PRODUCTO:
<input type="text" class="form-control" name="ID_PRODUCTO" size="10"  value="<?php echo $vector1 ?>"/><p>
ID_FABRICANTE:
<input type="text" class="form-control" name="ID_FABRICANTE" size="10"  value="<?php echo $vector2 ?>"/><p>
MARCA:
<input type="text" class="form-control" name="MARCA" size="10"  value="<?php echo $vector3 ?>"/><p>
NOMBRE:
<input type="text" class="form-control" name="NOMBRE" size="10"  value="<?php echo $vector4 ?>"/><p>
CLASE_ZAPATO:
<input type="text" class="form-control" name="CLASE_ZAPATO" size="10"  value="<?php echo $vector5 ?>"/><p>
TAMANO:
<input type="text" class="form-control" name="TAMANO" size="10"  value="<?php echo $vector6 ?>"/><p>
PRECIO:
<input type="text" class="form-control" name="PRECIO" size="10"  value="<?php echo $vector7 ?>"/><p>
PRECIO_DESCUENTO:
<input type="text" class="form-control" name="PRECIO_DESCUENTO" size="10"  value="<?php echo $vector8 ?>"/><p>
CANTIDAD:
<input type="text" class="form-control" name="CANTIDAD" size="10"  value="<?php echo $vector9 ?>"/><p>
NOMBRE_ENCARGADO:
<input type="text" class="form-control" name="NOMBRE_ENCARGADO" size="10"  value="<?php echo $vector10 ?>"/><p>


<p>

<hr/></h1>



<input type="submit" class="btn btn-primary" value="AGREGAR" name="ba"/>
<input type="submit" class="btn btn-primary" value="ACTUALIZAR" name="bm"/>
<input type="submit" class="btn btn-primary" value="ELIMINAR" name="be"/>
<input type="submit" class="btn btn-primary" value="LIMPIAR" name="bl"/>
<input type="submit" class="btn btn-primary" value="MOSTRAR" name="bli"/>

 </div>
</form>

<form name="f2" action="inventario.php" method="post">
<div class="form-group">
<h3 align="center">Buscar:</h3>
<input type="text" class="btn btn-secondary" name="bus" size="35" plaholder="BUSCAR"/>

<input type="submit" value="BUSCAR" name="bb" class="btn btn-primary"/><p>
</form>
<hr/>
</div>

</center>
<?php
if(isset($_POST['bli']))
{
$bli=$_POST['bli'];

if($bli=="MOSTRAR")
{
$sql=mysql_query("SELECT * FROM INVENTARIO",$conexion);
while($lista=mysql_fetch_array($sql)){
	
$vector1 = $lista['ID_PRODUCTO'];
    $vector2 = $lista['ID_FABRICANTE'];
    $vector3 = $lista['MARCA'];
    $vector4 = $lista['NOMBRE'];
    $vector5 = $lista['CLASE_ZAPATO'];
    $vector6 = $lista['TAMANO'];
    $vector7 = $lista['PRECIO'];
    $vector8 = $lista['PRECIO_DESCUENTO'];
    $vector9 = $lista['CANTIDAD'];
    $vector10 = $lista['NOMBRE_ENCARGADO'];

?>
<table class="table" width="300" border="2">
<tr>
<td>ID_PRODUCTO.</td>
<td>ID_FABRICANTE.</td>
<td>MARCA.</td>
<td>NOMBRE.</td>
<td>CLASE_ZAPATO.</td>
<td>TAMANO.</td>
<td>PRECIO.</td>
<td>PRECIO_DESCUENTO.</td>
<td>CANTIDAD.</td>
<td>NOMBRE_ENCARGADO.</td>


</tr>
<tr>
<td><?php echo $vector1 ?></td>
<td><?php echo $vector2 ?></td>
<td><?php echo $vector3 ?></td>
<td><?php echo $vector4 ?></td>
<td><?php echo $vector5 ?></td>
<td><?php echo $vector6 ?></td>

<td><?php echo $vector7 ?></td>
<td><?php echo $vector8 ?></td>
<td><?php echo $vector9 ?></td>
<td><?php echo $vector10 ?></td>
</tr>
</table>
<?php
		}
	}
}
?>


</body>
</html>