<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VENTA.</title>
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
$sql=mysql_query("SELECT * FROM VENTA WHERE ID_VENTA='$b'");
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
$NUMERO_VENTA=$_POST['NUMERO_VENTA'];
$NOMBRE_ATENDIO =$_POST['NOMBRE_ATENDIO'];
$FECHA =$_POST['FECHA'];
$HORA =$_POST['HORA'];
$NOMBRE_PRODUCTO =$_POST['NOMBRE_PRODUCTO'];
$PRECIO=$_POST['PRECIO'];
$MARCA=$_POST['MARCA'];
$CANTIDAD =$_POST['CANTIDAD'];
$PRECIO_TOTAL =$_POST['PRECIO_TOTAL'];
		
$sql=mysql_query("INSERT INTO VENTA(NUMERO_VENTA,NOMBRE_ATENDIO,FECHA,HORA,
NOMBRE_PRODUCTO,PRECIO,MARCA,CANTIDAD,PRECIO_TOTAL) values('$NUMERO_VENTA','$NOMBRE_ATENDIO','$FECHA',
'$HORA','$NOMBRE_PRODUCTO','$PRECIO','$MARCA','$CANTIDAD','$PRECIO_TOTAL')",$conexion);					
			}
		}

if(isset($_POST['bl'])){
$bll=$_POST['bl'];
if($bll=="LIMPIAR"){
$ID_VENTA=$_POST['ID_VENTA'];
$NUMERO_VENTA=$_POST['NUMERO_VENTA'];
$NOMBRE_ATENDIO =$_POST['NOMBRE_ATENDIO'];
$FECHA =$_POST['FECHA'];
$HORA =$_POST['HORA'];
$NOMBRE_PRODUCTO =$_POST['NOMBRE_PRODUCTO'];
$PRECIO=$_POST['PRECIO'];
$MARCA=$_POST['MARCA'];
$CANTIDAD =$_POST['CANTIDAD'];
$PRECIO_TOTAL =$_POST['PRECIO_TOTAL'];

$NUMERO_VENTA='';
$NOMBRE_ATENDIO ='';
$FECHA ='';
$HORA ='';
$NOMBRE_PRODUCTO ='';
$PRECIO='';
$MARCA='';
$CANTIDAD ='';
$PRECIO_TOTAL ='';
}
}
if(isset($_POST['bm'])){
$bmm=$_POST['bm'];
if($bmm=="ACTUALIZAR"){
	
$ID_VENTA=$_POST['ID_VENTA'];
$NUMERO_VENTA=$_POST['NUMERO_VENTA'];
$NOMBRE_ATENDIO =$_POST['NOMBRE_ATENDIO'];
$FECHA =$_POST['FECHA'];
$HORA =$_POST['HORA'];
$NOMBRE_PRODUCTO =$_POST['NOMBRE_PRODUCTO'];
$PRECIO=$_POST['PRECIO'];
$MARCA=$_POST['MARCA'];
$CANTIDAD =$_POST['CANTIDAD'];
$PRECIO_TOTAL =$_POST['PRECIO_TOTAL'];

	$sql=mysql_query("UPDATE VENTA SET NUMERO_VENTA='$NUMERO_VENTA',NOMBRE_ATENDIO='$NOMBRE_ATENDIO',
FECHA='$FECHA',HORA='$HORA',
NOMBRE_PRODUCTO='$NOMBRE_PRODUCTO',PRECIO='$PRECIO',MARCA='$MARCA',CANTIDAD='$CANTIDAD',
PRECIO_TOTAL='$PRECIO_TOTAL' where ID_VENTA='$ID_VENTA'",$conexion);
	


}
}

if(isset($_POST['be'])){
$bee=$_POST['be'];	
if($bee=="ELIMINAR"){
$ID_VENTA=$_POST['ID_VENTA'];
$NUMERO_VENTA=$_POST['NUMERO_VENTA'];
$NOMBRE_ATENDIO =$_POST['NOMBRE_ATENDIO'];
$FECHA =$_POST['FECHA'];
$HORA =$_POST['HORA'];
$NOMBRE_PRODUCTO =$_POST['NOMBRE_PRODUCTO'];
$PRECIO=$_POST['PRECIO'];
$MARCA=$_POST['MARCA'];
$CANTIDAD =$_POST['CANTIDAD'];
$PRECIO_TOTAL =$_POST['PRECIO_TOTAL'];
$sql=mysql_query("DELETE FROM VENTA WHERE ID_VENTA='$ID_VENTA'",$conexion);
		
		{
		
		}
	}
}
?>
<br>
<br>


<h1 align="center" class="display-2">VENTA.</h1><br>
<center>
<div class="container">
<div class="form-group">
<form name="f1" action="venta.php" method="post">
<h3 align="center">ID_VENTA:
<input type="text" class="form-control" name="ID_VENTA" size="10"  value="<?php echo $vector1 ?>"/><p>
NUMERO_VENTA:
<input type="text" class="form-control" name="NUMERO_VENTA" size="10"  value="<?php echo $vector2 ?>"/><p>
NOMBRE_ATENDIO:
<input type="text" class="form-control" name="NOMBRE_ATENDIO" size="10"  value="<?php echo $vector3 ?>"/><p>
FECHA:
<input type="text" class="form-control" name="FECHA" size="10"  value="<?php echo $vector4 ?>"/><p>
HORA:
<input type="text" class="form-control" name="HORA" size="10"  value="<?php echo $vector5 ?>"/><p>
NOMBRE_PRODUCTO:
<input type="text" class="form-control" name="NOMBRE_PRODUCTO" size="10"  value="<?php echo $vector6 ?>"/><p>
PRECIO:
<input type="text" class="form-control" name="PRECIO" size="10"  value="<?php echo $vector7 ?>"/><p>
MARCA:
<input type="text" class="form-control" name="MARCA" size="10"  value="<?php echo $vector8 ?>"/><p>
CANTIDAD:
<input type="text" class="form-control" name="CANTIDAD" size="10"  value="<?php echo $vector9 ?>"/><p>
PRECIO_TOTAL:
<input type="text" class="form-control" name="PRECIO_TOTAL" size="10"  value="<?php echo $vector10 ?>"/><p>


<p>

<hr/></h1>



<input type="submit" class="btn btn-primary" value="AGREGAR" name="ba"/>
<input type="submit" class="btn btn-primary" value="ACTUALIZAR" name="bm"/>
<input type="submit" class="btn btn-primary" value="ELIMINAR" name="be"/>
<input type="submit" class="btn btn-primary" value="LIMPIAR" name="bl"/>
<input type="submit" class="btn btn-primary" value="MOSTRAR" name="bli"/>

 </div>
</form>

<form name="f2" action="venta.php" method="post">
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
$sql=mysql_query("SELECT * FROM VENTA",$conexion);
while($lista=mysql_fetch_array($sql)){
	
$vector1 = $lista['ID_VENTA'];
    $vector2 = $lista['NUMERO_VENTA'];
    $vector3 = $lista['NOMBRE_ATENDIO'];
    $vector4 = $lista['FECHA'];
    $vector5 = $lista['HORA'];
    $vector6 = $lista['NOMBRE_PRODUCTO'];
    $vector7 = $lista['PRECIO'];
    $vector8 = $lista['MARCA'];
    $vector9 = $lista['CANTIDAD'];
    $vector10 = $lista['PRECIO_TOTAL'];

?>
<table class="table" width="300" border="2">
<tr>
<td>ID_VENTA.</td>
<td>NUMERO_VENTA.</td>
<td>NOMBRE_ATENDIO.</td>
<td>FECHA.</td>
<td>HORA.</td>
<td>NOMBRE_PRODUCTO.</td>
<td>PRECIO.</td>
<td>MARCA.</td>
<td>CANTIDAD.</td>
<td>PRECIO_TOTAL.</td>


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