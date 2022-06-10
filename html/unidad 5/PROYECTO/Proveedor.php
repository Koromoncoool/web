<!DOCTYPE html>
<html>
<title>Proveedor</title>
<head></head>
<body>
<h1 align="center">Proveedor.</h1>
<center>
BUSCAR:
<input type="text" id="valor1" placeholder="">
<br>
<br>
ID_PRODUCTO:
<input type="text" id="valor2" placeholder="">
<br>
<br>
ID_PEDIDO:
<input type="text" id="valor3" placeholder="">
<br>
<br>
FABRICANTE:
<input type="text" id="valor4" placeholder="">
<br>
<br>
TIPO_PAGO:
<input type="text" id="valor5" placeholder="">
<br>
<br>
DIRECCION_ORIGEN:
<input type="text" id="valor6" placeholder="">
<br>
<br>
DIRECCION_LLEGADA:
<input type="text" id="valor7" placeholder="">
<br>
<br>
PAQUETERIA:
<input type="text" id="valor8" placeholder="">
<br>
<br>
COSTO_PAQUETERIA:
<input type="text" id="valor9" placeholder="">
<br>
<br>
FECHA_PEDIDO:
<input type="text" id="valor10" placeholder="">
<br>
<br>
FECHA_LLEGADA:
<input type="text" id="valor11" placeholder="">
<br>
<br>

<button onclick="ALTAS()">ALTAS</button>
<button onclick="BAJAS()">BAJAS</button>
<button onclick="MODIFICACION()">MODIFICACION</button>
<button onclick="LISTAS()">LISTAS</button>
<button onclick="LIMPIAR()">LIMPIAR</button>
<script>
function ALTAS(){
                         
                }
function BAJAS(){
                         
                }
function MODFICACION(){
                         
                }
function LISTAS(){
<h1 alingn="center">Proveedor</h1>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('ZAPATERIA');
 $query="SELECT * FROM PROVEEDOR";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_PRODUCTO</td>";
 echo "<td>ID_PEDIDO</td>";
 echo "<td>FABRICANTE</td>";
 echo "<td>TIPO_PAGO</td>";
 echo "<td>DIRECCION_ORIGEN</td>";
 echo "<td>DIRECCION_LLEGADA</td>";
 echo "<td>PAQUETERIA</td>";
 echo "<td>COSTO_PAQUETERIA</td>";
 echo "<td>FECHA_PEDIDO</td>";
 echo "<td>FECHA_LLEGADA</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_PRODUCTO']."</td><td>".$row['ID_PEDIDO']."</td><td>".$row['FABRICANTE']."</td><td>".$row['TIPO_PAGO']."</td><td>".$row['DIRECCION_ORIGEN']."</td><td>".$row['DIRECCION_LLEGADA']."</td><td>".$row['PAQUETERIA']."</td><td>".$row['COSTO_PAQUETERIA']."</td><td>".$row['FECHA_PEDIDO']."</td><td>".$row['FECHA_LLEGADA']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
                         
                }
function LIMPIAR(){
                         
                }
</script>
</center>
</body>
</html>