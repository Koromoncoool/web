<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>proveedor.</title>
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
$sql=mysql_query("SELECT * FROM PROVEEDOR WHERE ID_PRODUCTO='$b'");
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
$ID_PEDIDO=$_POST['ID_PEDIDO'];
$FABRICANTE =$_POST['FABRICANTE'];
$TIPO_PAGO =$_POST['TIPO_PAGO'];
$DIRECCION =$_POST['DIRECCION'];
$DIRECCION_ORIGEN =$_POST['DIRECCION_ORIGEN'];
$DIRECCION_LLEGADA=$_POST['DIRECCION_LLEGADA'];
$PAQUETERIA=$_POST['PAQUETERIA'];
$COSTO_PAQUETERIA =$_POST['COSTO_PAQUETERIA'];
$FECHA_PEDIDO =$_POST['FECHA_PEDIDO'];
		
$sql=mysql_query("INSERT INTO PROVEEDOR(ID_PEDIDO,FABRICANTE,TIPO_PAGO,DIRECCION,
DIRECCION_ORIGEN,DIRECCION_LLEGADA,PAQUETERIA,COSTO_PAQUETERIA,FECHA_PEDIDO) values('$ID_PEDIDO','$FABRICANTE','$TIPO_PAGO',
'$DIRECCION','$DIRECCION_ORIGEN','$DIRECCION_LLEGADA','$PAQUETERIA','$COSTO_PAQUETERIA','$FECHA_PEDIDO')",$conexion);					
			}
		}

if(isset($_POST['bl'])){
$bll=$_POST['bl'];
if($bll=="LIMPIAR"){
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$ID_PEDIDO=$_POST['ID_PEDIDO'];
$FABRICANTE =$_POST['FABRICANTE'];
$TIPO_PAGO =$_POST['TIPO_PAGO'];
$DIRECCION =$_POST['DIRECCION'];
$DIRECCION_ORIGEN =$_POST['DIRECCION_ORIGEN'];
$DIRECCION_LLEGADA=$_POST['DIRECCION_LLEGADA'];
$PAQUETERIA=$_POST['PAQUETERIA'];
$COSTO_PAQUETERIA =$_POST['COSTO_PAQUETERIA'];
$FECHA_PEDIDO =$_POST['FECHA_PEDIDO'];

$ID_PEDIDO='';
$FABRICANTE ='';
$TIPO_PAGO ='';
$DIRECCION ='';
$DIRECCION_ORIGEN ='';
$DIRECCION_LLEGADA='';
$PAQUETERIA='';
$COSTO_PAQUETERIA ='';
$FECHA_PEDIDO ='';
}
}
if(isset($_POST['bm'])){
$bmm=$_POST['bm'];
if($bmm=="ACTUALIZAR"){
	
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$ID_PEDIDO=$_POST['ID_PEDIDO'];
$FABRICANTE =$_POST['FABRICANTE'];
$TIPO_PAGO =$_POST['TIPO_PAGO'];
$DIRECCION =$_POST['DIRECCION'];
$DIRECCION_ORIGEN =$_POST['DIRECCION_ORIGEN'];
$DIRECCION_LLEGADA=$_POST['DIRECCION_LLEGADA'];
$PAQUETERIA=$_POST['PAQUETERIA'];
$COSTO_PAQUETERIA =$_POST['COSTO_PAQUETERIA'];
$FECHA_PEDIDO =$_POST['FECHA_PEDIDO'];

	$sql=mysql_query("UPDATE PROVEEDOR SET ID_PEDIDO='$ID_PEDIDO',FABRICANTE='$FABRICANTE',
TIPO_PAGO='$TIPO_PAGO',DIRECCION='$DIRECCION',
DIRECCION_ORIGEN='$DIRECCION_ORIGEN',DIRECCION_LLEGADA='$DIRECCION_LLEGADA',PAQUETERIA='$PAQUETERIA',COSTO_PAQUETERIA='$COSTO_PAQUETERIA',
FECHA_PEDIDO='$FECHA_PEDIDO' where ID_PRODUCTO='$ID_PRODUCTO'",$conexion);
	


}
}

if(isset($_POST['be'])){
$bee=$_POST['be'];	
if($bee=="ELIMINAR"){
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$ID_PEDIDO=$_POST['ID_PEDIDO'];
$FABRICANTE =$_POST['FABRICANTE'];
$TIPO_PAGO =$_POST['TIPO_PAGO'];
$DIRECCION =$_POST['DIRECCION'];
$DIRECCION_ORIGEN =$_POST['DIRECCION_ORIGEN'];
$DIRECCION_LLEGADA=$_POST['DIRECCION_LLEGADA'];
$PAQUETERIA=$_POST['PAQUETERIA'];
$COSTO_PAQUETERIA =$_POST['COSTO_PAQUETERIA'];
$FECHA_PEDIDO =$_POST['FECHA_PEDIDO'];
$sql=mysql_query("DELETE FROM PROVEEDOR WHERE ID_PRODUCTO='$ID_PRODUCTO'",$conexion);
		
		{
		
		}
	}
}
?>
<br>
<br>


<h1 align="center" class="display-2">PROVEEDOR.</h1><br>
<center>
<div class="container">
<div class="form-group">
<form name="f1" action="proveedor.php" method="post">
<h3 align="center">ID_PRODUCTO:
<input type="text" class="form-control" name="ID_PRODUCTO" size="10"  value="<?php echo $vector1 ?>"/><p>
ID_PEDIDO:
<input type="text" class="form-control" name="ID_PEDIDO" size="10"  value="<?php echo $vector2 ?>"/><p>
FABRICANTE:
<input type="text" class="form-control" name="FABRICANTE" size="10"  value="<?php echo $vector3 ?>"/><p>
TIPO_PAGO:
<input type="text" class="form-control" name="TIPO_PAGO" size="10"  value="<?php echo $vector4 ?>"/><p>
DIRECCION:
<input type="text" class="form-control" name="DIRECCION" size="10"  value="<?php echo $vector5 ?>"/><p>
DIRECCION_ORIGEN:
<input type="text" class="form-control" name="DIRECCION_ORIGEN" size="10"  value="<?php echo $vector6 ?>"/><p>
DIRECCION_LLEGADA:
<input type="text" class="form-control" name="DIRECCION_LLEGADA" size="10"  value="<?php echo $vector7 ?>"/><p>
PAQUETERIA:
<input type="text" class="form-control" name="PAQUETERIA" size="10"  value="<?php echo $vector8 ?>"/><p>
COSTO_PAQUETERIA:
<input type="text" class="form-control" name="COSTO_PAQUETERIA" size="10"  value="<?php echo $vector9 ?>"/><p>
FECHA_PEDIDO:
<input type="text" class="form-control" name="FECHA_PEDIDO" size="10"  value="<?php echo $vector10 ?>"/><p>


<p>

<hr/></h1>



<input type="submit" class="btn btn-primary" value="AGREGAR" name="ba"/>
<input type="submit" class="btn btn-primary" value="ACTUALIZAR" name="bm"/>
<input type="submit" class="btn btn-primary" value="ELIMINAR" name="be"/>
<input type="submit" class="btn btn-primary" value="LIMPIAR" name="bl"/>
<input type="submit" class="btn btn-primary" value="MOSTRAR" name="bli"/>

 </div>
</form>

<form name="f2" action="proveedor.php" method="post">
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
$sql=mysql_query("SELECT * FROM PROVEEDOR",$conexion);
while($lista=mysql_fetch_array($sql)){
	
$vector1 = $lista['ID_PRODUCTO'];
    $vector2 = $lista['ID_PEDIDO'];
    $vector3 = $lista['FABRICANTE'];
    $vector4 = $lista['TIPO_PAGO'];
    $vector5 = $lista['DIRECCION'];
    $vector6 = $lista['DIRECCION_ORIGEN'];
    $vector7 = $lista['DIRECCION_LLEGADA'];
    $vector8 = $lista['PAQUETERIA'];
    $vector9 = $lista['COSTO_PAQUETERIA'];
    $vector10 = $lista['FECHA_PEDIDO'];

?>
<table class="table" width="300" border="2">
<tr>
<td>ID_PRODUCTO.</td>
<td>ID_PEDIDO.</td>
<td>FABRICANTE.</td>
<td>TIPO_PAGO.</td>
<td>DIRECCION.</td>
<td>DIRECCION_ORIGEN.</td>
<td>DIRECCION_LLEGADA.</td>
<td>PAQUETERIA.</td>
<td>COSTO_PAQUETERIA.</td>
<td>FECHA_PEDIDO.</td>


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