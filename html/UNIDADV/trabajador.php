<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TRABAJADOR.</title>
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
$sql=mysql_query("SELECT * FROM TRABAJADOR WHERE ID_TRABAJADOR='$b'");
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
$NOMBRE=$_POST['NOMBRE'];
$AP =$_POST['AP'];
$AM =$_POST['AM'];
$DIRECCION =$_POST['DIRECCION'];
$PUESTO =$_POST['PUESTO'];
$TIPO_PAGO=$_POST['TIPO_PAGO'];
$PAGO=$_POST['PAGO'];
$EDAD =$_POST['EDAD'];
$HORARIO =$_POST['HORARIO'];
		
$sql=mysql_query("INSERT INTO TRABAJADOR(NOMBRE,AP,AM,DIRECCION,
PUESTO,TIPO_PAGO,PAGO,EDAD,HORARIO) values('$NOMBRE','$AP','$AM',
'$DIRECCION','$PUESTO','$TIPO_PAGO','$PAGO','$EDAD','$HORARIO')",$conexion);					
			}
		}

if(isset($_POST['bl'])){
$bll=$_POST['bl'];
if($bll=="LIMPIAR"){
$ID_TRABAJADOR=$_POST['ID_TRABAJADOR'];
$NOMBRE=$_POST['NOMBRE'];
$AP =$_POST['AP'];
$AM =$_POST['AM'];
$DIRECCION =$_POST['DIRECCION'];
$PUESTO =$_POST['PUESTO'];
$TIPO_PAGO=$_POST['TIPO_PAGO'];
$PAGO=$_POST['PAGO'];
$EDAD =$_POST['EDAD'];
$HORARIO =$_POST['HORARIO'];

$NOMBRE='';
$AP ='';
$AM ='';
$DIRECCION ='';
$PUESTO ='';
$TIPO_PAGO='';
$PAGO='';
$EDAD ='';
$HORARIO ='';
}
}
if(isset($_POST['bm'])){
$bmm=$_POST['bm'];
if($bmm=="ACTUALIZAR"){
	
$ID_TRABAJADOR=$_POST['ID_TRABAJADOR'];
$NOMBRE=$_POST['NOMBRE'];
$AP =$_POST['AP'];
$AM =$_POST['AM'];
$DIRECCION =$_POST['DIRECCION'];
$PUESTO =$_POST['PUESTO'];
$TIPO_PAGO=$_POST['TIPO_PAGO'];
$PAGO=$_POST['PAGO'];
$EDAD =$_POST['EDAD'];
$HORARIO =$_POST['HORARIO'];

	$sql=mysql_query("UPDATE TRABAJADOR SET NOMBRE='$NOMBRE',AP='$AP',
AM='$AM',DIRECCION='$DIRECCION',
PUESTO='$PUESTO',TIPO_PAGO='$TIPO_PAGO',PAGO='$PAGO',EDAD='$EDAD',
HORARIO='$HORARIO' where ID_TRABAJADOR='$ID_TRABAJADOR'",$conexion);
	


}
}

if(isset($_POST['be'])){
$bee=$_POST['be'];	
if($bee=="ELIMINAR"){
$ID_TRABAJADOR=$_POST['ID_TRABAJADOR'];
$NOMBRE=$_POST['NOMBRE'];
$AP =$_POST['AP'];
$AM =$_POST['AM'];
$DIRECCION =$_POST['DIRECCION'];
$PUESTO =$_POST['PUESTO'];
$TIPO_PAGO=$_POST['TIPO_PAGO'];
$PAGO=$_POST['PAGO'];
$EDAD =$_POST['EDAD'];
$HORARIO =$_POST['HORARIO'];
$sql=mysql_query("DELETE FROM TRABAJADOR WHERE ID_TRABAJADOR='$ID_TRABAJADOR'",$conexion);
		
		{
		
		}
	}
}
?>
<br>
<br>


<h1 align="center" class="display-2">TRABAJADOR.</h1><br>
<center>
<div class="container">
<div class="form-group">
<form name="f1" action="trabajador.php" method="post">
<h3 align="center">ID_TRABAJADOR:
<input type="text" class="form-control" name="ID_TRABAJADOR" size="10"  value="<?php echo $vector1 ?>"/><p>
NOMBRE:
<input type="text" class="form-control" name="NOMBRE" size="10"  value="<?php echo $vector2 ?>"/><p>
AP:
<input type="text" class="form-control" name="AP" size="10"  value="<?php echo $vector3 ?>"/><p>
AM:
<input type="text" class="form-control" name="AM" size="10"  value="<?php echo $vector4 ?>"/><p>
DIRECCION:
<input type="text" class="form-control" name="DIRECCION" size="10"  value="<?php echo $vector5 ?>"/><p>
PUESTO:
<input type="text" class="form-control" name="PUESTO" size="10"  value="<?php echo $vector6 ?>"/><p>
TIPO_PAGO:
<input type="text" class="form-control" name="TIPO_PAGO" size="10"  value="<?php echo $vector7 ?>"/><p>
PAGO:
<input type="text" class="form-control" name="PAGO" size="10"  value="<?php echo $vector8 ?>"/><p>
EDAD:
<input type="text" class="form-control" name="EDAD" size="10"  value="<?php echo $vector9 ?>"/><p>
HORARIO:
<input type="text" class="form-control" name="HORARIO" size="10"  value="<?php echo $vector10 ?>"/><p>


<p>

<hr/></h1>



<input type="submit" class="btn btn-primary" value="AGREGAR" name="ba"/>
<input type="submit" class="btn btn-primary" value="ACTUALIZAR" name="bm"/>
<input type="submit" class="btn btn-primary" value="ELIMINAR" name="be"/>
<input type="submit" class="btn btn-primary" value="LIMPIAR" name="bl"/>
<input type="submit" class="btn btn-primary" value="MOSTRAR" name="bli"/>

 </div>
</form>

<form name="f2" action="trabajador.php" method="post">
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
$sql=mysql_query("SELECT * FROM TRABAJADOR",$conexion);
while($lista=mysql_fetch_array($sql)){
	
$vector1 = $lista['ID_TRABAJADOR'];
    $vector2 = $lista['NOMBRE'];
    $vector3 = $lista['AP'];
    $vector4 = $lista['AM'];
    $vector5 = $lista['DIRECCION'];
    $vector6 = $lista['PUESTO'];
    $vector7 = $lista['TIPO_PAGO'];
    $vector8 = $lista['PAGO'];
    $vector9 = $lista['EDAD'];
    $vector10 = $lista['HORARIO'];

?>
<table class="table" width="300" border="2">
<tr>
<td>ID_TRABAJADOR.</td>
<td>NOMBRE.</td>
<td>AP.</td>
<td>AM.</td>
<td>DIRECCION.</td>
<td>PUESTO.</td>
<td>TIPO_PAGO.</td>
<td>PAGO.</td>
<td>EDAD.</td>
<td>HORARIO.</td>


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