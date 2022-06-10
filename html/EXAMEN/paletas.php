<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PALETAS.</title>
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
$sql=mysql_query("SELECT * FROM PALETAS WHERE ID_PRODUCTO='$b'");
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
$SABOR=$_POST['SABOR'];
$PRECIO =$_POST['PRECIO'];
$PRECIO_MAYOREO =$_POST['PRECIO_MAYOREO'];
$TAMANO =$_POST['TAMANO'];
$TIPO =$_POST['TIPO'];
$PIEZAS=$_POST['PIEZAS'];
$PROMOCION=$_POST['PROMOCION'];
$DIA_PRODUCCION =$_POST['DIA_PRODUCCION'];
$DADUCIDAD =$_POST['DADUCIDAD'];
		
$sql=mysql_query("INSERT INTO PALETAS(SABOR,PRECIO,PRECIO_MAYOREO,TAMANO,
TIPO,PIEZAS,PROMOCION,DIA_PRODUCCION,DADUCIDAD)values('$SABOR','$PRECIO','$PRECIO_MAYOREO',
'$TAMANO','$TIPO','$PIEZAS','$PROMOCION','$DIA_PRODUCCION','$DADUCIDAD')",$conexion);					
			}
		}

if(isset($_POST['bl'])){
$bll=$_POST['bl'];
if($bll=="LIMPIAR"){
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$SABOR=$_POST['SABOR'];
$PRECIO =$_POST['PRECIO'];
$PRECIO_MAYOREO =$_POST['PRECIO_MAYOREO'];
$TAMANO =$_POST['TAMANO'];
$TIPO =$_POST['TIPO'];
$PIEZAS=$_POST['PIEZAS'];
$PROMOCION=$_POST['PROMOCION'];
$DIA_PRODUCCION =$_POST['DIA_PRODUCCION'];
$DADUCIDAD =$_POST['DADUCIDAD'];

$SABOR='';
$PRECIO ='';
$PRECIO_MAYOREO ='';
$TAMANO ='';
$TIPO ='';
$PIEZAS='';
$PROMOCION='';
$DIA_PRODUCCION ='';
$DADUCIDAD ='';
}
}
if(isset($_POST['bm'])){
$bmm=$_POST['bm'];
if($bmm=="ACTUALIZAR"){
	
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$SABOR=$_POST['SABOR'];
$PRECIO =$_POST['PRECIO'];
$PRECIO_MAYOREO =$_POST['PRECIO_MAYOREO'];
$TAMANO =$_POST['TAMANO'];
$TIPO =$_POST['TIPO'];
$PIEZAS=$_POST['PIEZAS'];
$PROMOCION=$_POST['PROMOCION'];
$DIA_PRODUCCION =$_POST['DIA_PRODUCCION'];
$DADUCIDAD =$_POST['DADUCIDAD'];

	$sql=mysql_query("UPDATE PALETAS SET SABOR='$SABOR',PRECIO='$PRECIO',
PRECIO_MAYOREO='$PRECIO_MAYOREO',TAMANO='$TAMANO',
TIPO='$TIPO',PIEZAS='$PIEZAS',PROMOCION='$PROMOCION',DIA_PRODUCCION='$DIA_PRODUCCION',
DADUCIDAD='$DADUCIDAD' where ID_PRODUCTO='$ID_PRODUCTO'",$conexion);
	


}
}

if(isset($_POST['be'])){
$bee=$_POST['be'];	
if($bee=="ELIMINAR"){
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$SABOR=$_POST['SABOR'];
$PRECIO =$_POST['PRECIO'];
$PRECIO_MAYOREO =$_POST['PRECIO_MAYOREO'];
$TAMANO =$_POST['TAMANO'];
$TIPO =$_POST['TIPO'];
$PIEZAS=$_POST['PIEZAS'];
$PROMOCION=$_POST['PROMOCION'];
$DIA_PRODUCCION =$_POST['DIA_PRODUCCION'];
$DADUCIDAD =$_POST['DADUCIDAD'];
$sql=mysql_query("DELETE FROM PALETAS WHERE ID_PRODUCTO='$ID_PRODUCTO'",$conexion);
		
		{
		
		}
	}
}
?>
<br>
<br>


<h1 align="center" class="display-2">PALETAS.</h1><br>
<center>
<div class="container">
<div class="form-group">
<form name="f1" action="paletas.php" method="post">
<h3 align="center">ID_PRODUCTO:
<input type="text" class="form-control" name="ID_PRODUCTO" size="10"  value="<?php echo $vector1 ?>"/><p>
SABOR:
<input type="text" class="form-control" name="SABOR" size="10"  value="<?php echo $vector2 ?>"/><p>
PRECIO:
<input type="text" class="form-control" name="PRECIO" size="10"  value="<?php echo $vector3 ?>"/><p>
PRECIO_MAYOREO:
<input type="text" class="form-control" name="PRECIO_MAYOREO" size="10"  value="<?php echo $vector4 ?>"/><p>
TAMANO:
<input type="text" class="form-control" name="TAMANO" size="10"  value="<?php echo $vector5 ?>"/><p>
TIPO:
<input type="text" class="form-control" name="TIPO" size="10"  value="<?php echo $vector6 ?>"/><p>
PIEZAS:
<input type="text" class="form-control" name="PIEZAS" size="10"  value="<?php echo $vector7 ?>"/><p>
PROMOCION:
<input type="text" class="form-control" name="PROMOCION" size="10"  value="<?php echo $vector8 ?>"/><p>
DIA_PRODUCCION:
<input type="text" class="form-control" name="DIA_PRODUCCION" size="10"  value="<?php echo $vector9 ?>"/><p>
DADUCIDAD:
<input type="text" class="form-control" name="DADUCIDAD" size="10"  value="<?php echo $vector10 ?>"/><p>


<p>

<hr/></h1>



<input type="submit" class="btn btn-primary" value="AGREGAR" name="ba"/>
<input type="submit" class="btn btn-primary" value="ACTUALIZAR" name="bm"/>
<input type="submit" class="btn btn-primary" value="ELIMINAR" name="be"/>
<input type="submit" class="btn btn-primary" value="LIMPIAR" name="bl"/>
<input type="submit" class="btn btn-primary" value="MOSTRAR" name="bli"/>

 </div>
</form>

<form name="f2" action="paletas.php" method="post">
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
$sql=mysql_query("SELECT * FROM PALETAS",$conexion);
while($lista=mysql_fetch_array($sql)){
	
$vector1 = $lista['ID_PRODUCTO'];
    $vector2 = $lista['SABOR'];
    $vector3 = $lista['PRECIO'];
    $vector4 = $lista['PRECIO_MAYOREO'];
    $vector5 = $lista['TAMANO'];
    $vector6 = $lista['TIPO'];
    $vector7 = $lista['PIEZAS'];
    $vector8 = $lista['PROMOCION'];
    $vector9 = $lista['DIA_PRODUCCION'];
    $vector10 = $lista['DADUCIDAD'];

?>
<table class="table" width="300" border="2">
<tr>
<td>ID_PRODUCTO.</td>
<td>SABOR.</td>
<td>PRECIO.</td>
<td>PRECIO_MAYOREO.</td>
<td>TAMANO.</td>
<td>TIPO.</td>
<td>PIEZAS.</td>
<td>PROMOCION.</td>
<td>DIA_PRODUCCION.</td>
<td>DADUCIDAD.</td>


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