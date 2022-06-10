<!DOCTYPE html>
<html>
<title>Venta</title>
<head></head>
<body>
<h1 align="center">Venta.</h1>
<center>
BUSCAR:
<input type="text" id="valor1" placeholder="">
<br>
<br>
ID_VENTA:
<input type="text" id="valor2" placeholder="">
<br>
<br>
NUMERO_VENTA:
<input type="text" id="valor3" placeholder="">
<br>
<br>
NOMBRE_ATENDIO:
<input type="text" id="valor4" placeholder="">
<br>
<br>
FECHA:
<input type="text" id="valor5" placeholder="">
<br>
<br>
HORA:
<input type="text" id="valor6" placeholder="">
<br>
<br>
NOMBRE_PRODUCTO:
<input type="text" id="valor7" placeholder="">
<br>
<br>
PRECIO:
<input type="text" id="valor8" placeholder="">
<br>
<br>
MARCA:
<input type="text" id="valor9" placeholder="">
<br>
<br>
CANTIDAD:
<input type="text" id="valor10" placeholder="">
<br>
<br>
PRECIO_TOTAL:
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
</script>
<script>
function BAJAS(){
                         
                }
</script>
<script>
function MODFICACION(){
                         
                }
</script>
<script>
function LISTAS(){
<h1 alingn="center">VENTA</h1>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('ZAPATERIA');
 $query="SELECT * FROM VENTA";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_VENTA</td>";
 echo "<td>NUMERO_VENTA</td>";
 echo "<td>NOMBRE_ATENDIO</td>";
 echo "<td>FECHA</td>";
 echo "<td>HORA</td>";
 echo "<td>NOMBRE_PRODUCTO</td>";
 echo "<td>PRECIO</td>";
 echo "<td>MARCA</td>";
 echo "<td>CANTIDAD</td>";
 echo "<td>PRECIO_TOTAL</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_VENTA']."</td><td>".$row['NUMERO_VENTA']."</td><td>".$row['NOMBRE_ATENDIO']."</td><td>".$row['FECHA']."</td><td>".$row['HORA']."</td><td>".$row['NOMBRE_PRODUCTO']."</td><td>".$row['PRECIO']."</td><td>".$row['MARCA']."</td><td>".$row['CANTIDAD']."</td><td>".$row['PRECIO_TOTAL']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>

                }
</script>
<script>
function LIMPIAR(){
                         
                }
</script>

</center>
</body>
</html>