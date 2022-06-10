
<!DOCTYPE html>
<html>
<title>Inventario</title>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
<?php
include("enlace.php");
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
		 //$b=$_POST['bus'];
		 $sql=mysql_query("SELECT *FROM ZAPATOS WHERE ID=`$bob`",$enlace);
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
		$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
		$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
		$MARCA=$_POST['MARCA'];
		$NOMBRE=$_POST['NOMBRE'];
		$CLASE_ZAPATO=$_POST['CLASE_ZAPATO'];
		$TAMANO=$_POST['TAMANO'];
		$PRECIO=$_POST['PRECIO'];
		$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
		$CANTIDAD=$_POST['CANTIDAD'];
		$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
		$sql=mysql_query("INSERT INTO INVENTARIO(ID_PRODUCTO,ID_FABRICANTE,MARCA,NOMBRE,CLASE_ZAPATO,TAMANO,PRECIO,PRECIO_DESCUENTO,CANTIDAD,NOMBRE_ENCARGADO)VALUES('$ID_PRODUCTO','$ID_FABRICANTE','$MARCA','$NOMBRE','$CLASE_ZAPATO','$TAMANO','$PRECIO','$PRECIO_DESCUENTO','$CANTIDAD',$'NOMBRE_ENCARGADO')",$enlace);
	 }
 }
 
 if(isset($_POST['bm'])){
	 $bmm=$_POST['bm'];
	 if($bmm=="ACTUALIZAR"){
		$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
		$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
		$MARCA=$_POST['MARCA'];
		$NOMBRE=$_POST['NOMBRE'];
		$CLASE_ZAPATO=$_POST['CLASE_ZAPATO'];
		$TAMANO=$_POST['TAMANO'];
		$PRECIO=$_POST['PRECIO'];
		$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
		$CANTIDAD=$_POST['CANTIDAD'];
		$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
		$sql=mysql_query("UPDATE INVENTARIO SET ID_PRODUCTO='$ID_PRODUCTO',ID_FABRICANTE='$ID_FABRICANTE',MARCA='$MARCA',NOMBRE='$NOMBRE',CLASE_ZAPATO='$CLASE_ZAPATO',TAMANO='$TAMANO',PRECIO='$PRECIO',PRECIO_DESCUENTO='$PRECIO_DESCUENTO',CANTIDAD='$CANTIDAD',NOMBRE_ENCARGADO='$NOMBRE_ENCARGADO' WHERE ID_PRODUCTO='ID_PRODUCTO'",$enlace);
	 }
 }
  if(isset($_POST['be'])){
	 $bee=$_POST['be'];
	 if($bee=="BORRAR"){
		$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
		$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
		$MARCA=$_POST['MARCA'];
		$NOMBRE=$_POST['NOMBRE'];
		$CLASE_ZAPATO=$_POST['CLASE_ZAPATO'];
		$TAMANO=$_POST['TAMANO'];
		$PRECIO=$_POST['PRECIO'];
		$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
		$CANTIDAD=$_POST['CANTIDAD'];
		$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
		$sql=mysql_query("DELETE FROM INVENTARIO WHERE ID_PRODUCTO='$ID_PRODUCTO'",$enlace);
	 }
 }
 if(isset($_POST['bl'])){
	 $bll=$_POST['bl'];
	 if($bll=="LIMPIAR"){
		$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
		$ID_FABRICANTE=$_POST['ID_FABRICANTE'];
		$MARCA=$_POST['MARCA'];
		$NOMBRE=$_POST['NOMBRE'];
		$CLASE_ZAPATO=$_POST['CLASE_ZAPATO'];
		$TAMANO=$_POST['TAMANO'];
		$PRECIO=$_POST['PRECIO'];
		$PRECIO_DESCUENTO=$_POST['PRECIO_DESCUENTO'];
		$CANTIDAD=$_POST['CANTIDAD'];
		$NOMBRE_ENCARGADO=$_POST['NOMBRE_ENCARGADO'];
		
		$ID_PRODUCTO="";
		$ID_FABRICANTE="";
		$MARCA="";
		$NOMBRE="";
		$CLASE_ZAPATO="";
		$TAMANO="";
		$PRECIO="";
		$PRECIO_DESCUENTO="";
		$CANTIDAD="";
		$NOMBRE_ENCARGADO="";
		
	 }
 }
 ?>
 <br>
<h1 align="center" class="display-2">Inventario.</h1>
<br>
<center>
<div class="contanier">
<div class="form-group">
<form name="f1" action="Inventario.php" method="post">
<br>
<h3 align="center">ID_PRODUCTO:</h3>
<input type="text" class="form-control" name="ID_PRODUCTO" value="<?php echo $vector1?>"/>
<br>
<br>
<h4 align="ceneter">ID_FABRICANTE:</h4>
<input type="text" class="form-control" name="ID_FABRICANTE" value="<?php echo $vector2?>"/>
<br>
<br>
<h5 align="center">MARCA:</h5>
<input type="text" class="form-control" name="MARCA" value="<?php echo $vector3?>"/>
<br>
<br>
<h6 align="center">NOMBRE:</h6>
<input type="text" class="form-control" name="NOMBRE" value="<?php echo $vector4?>"/>
<br>
<br>
<h6 align="center">CLASE_ZAPATO:</h6>
<input type="text" class="form-control" name="CLASE_ZAPATO" value="<?php echo $vector5?>"/>
<br>
<br>
<h6 align="center">TAMANO:</h6>
<input type="text" class="form-control" name="TAMANO" value="<?php echo $vector6?>"/>
<br>
<br>
<h6 align="center">PRECIO:</h6>
<input type="text" class="form-control" name="PRECIO" value="<?php echo $vector7?>"/>
<br>
<br>
<h6 align="center">PRECIO_DESCUENTO:</h6>
<input type="text" class="form-control" name="PRECIO_DESCUENTO" value="<?php echo $vector8?>"/>
<br>
<br>
<h6 align="center">CANTIDAD:</h6>
<input type="text" class="form-control" name="CANTIDAD" value="<?php echo $vector9?>"/>
<br>
<br>
<h6 align="center">NOMBRE_ENCARGADO:</h6>
<input type="text" class="form-control" name="NOMBRE_ENCARGADO" value="<?php echo $vector10?>"/>
<br>
<br>

<input type="submit" class="btn btn-primary" value="AGREGAR" name="ba"/>
<input type="submit" class="btn btn-primary" value="ACTUALIZAR" name="bm"/>
<input type="submit" class="btn btn-primary" value="ELIMINAR" name="be"/>
<input type="submit" class="btn btn-primary" value="LIMPIAR" name="bl"/>
<input type="submit" class="btn btn-primary" value="MOSTRAR" name="bli"/>
</div>
</form>
<form name="f2" action="Inventario.php" method="post">
<div class="form-group">
<h8 align="center">Buscar:</h8>
<input type="text" class="form-control" name="buscar"/>
<input type="submit" class="btn btn-primary" value="BUSCAR" name="bb"/>
</div>
</form>
</center>
<?php
 if(isset($_POST['bli'])){
	 $bli=$_POST['bli'];
	 if($bli=="MOSTRAR"){
	 $sql=mysql_query("SELECT * FROM INVENTARIO",$enlace);
	while($lista=mysql_fetch_array($sql)){
		 $vector1=$lista['ID_PRODUCTO'];
		 $vector2=$lista['ID_FABRICANTE'];
		 $vector3=$lista['MARCA'];
		 $vector4=$lista['NOMBRE'];
		 $vector5=$lista['CLASE_ZAPATO'];
		 $vector6=$lista['TAMANO'];
		 $vector7=$lista['PRECIO'];
		 $vector8=$lista['PRECIO_DESCUENTO'];
		 $vector9=$lista['CANTIDAD'];
		 $vector10=$lista['NOMBRE_ENCARGADO']; 
	 	 	 
?>
 <table class="table" width="300" border="2">
        <tr>
        <td>ID_PRODUCTO.</td>
        <td>ID_FABRICANTE.</td>
        <td>MARCA</td>
        <td>NOMBRE.</td>
        <td>CLASE_ZAPATO</td>
        <td>TAMANO</td>
        <td>PRECIO.</td>
        <td>PRECIO_DESCUENTO.</td>
        <td>CANTIDAD</td>
        <td>NOMBRE_ENCARGADO</td>
        </tr>
        <tr>
        <td><?php echo $vector1?></td>
        <td><?php echo $vector2?></td>
        <td><?php echo $vector3?></td>
        <td><?php echo $vector4?></td>
        <td><?php echo $vector5?></td>
        <td><?php echo $vector6?></td>
        <td><?php echo $vector7?></td>
        <td><?php echo $vector8?></td>
        <td><?php echo $vector9?></td>
        <td><?php echo $vector10?></td>
        </tr>
        </table>
        <?php
 }
 }
 }
 ?>
</body>
</html>