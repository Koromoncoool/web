<!DOCTYPE html>
<html>
<title>Tabajador</title>
<head></head>
<body>
<h1 align="center">Trabajador.</h1>
<center>
BUSCAR:
<input type="text" id="valor1" placeholder="">
<br>
<br>
ID_TRABAJADOR:
<input type="text" id="valor2" placeholder="">
<br>
<br>
NOMBRE:
<input type="text" id="valor3" placeholder="">
<br>
<br>
APELLIDO_PATERNO:
<input type="text" id="valor4" placeholder="">
<br>
<br>
APELLIDO_MATERNO:
<input type="text" id="valor5" placeholder="">
<br>
<br>
DIRECCION:
<input type="text" id="valor6" placeholder="">
<br>
<br>
PUESTO:
<input type="text" id="valor7" placeholder="">
<br>
<br>
TIPO_PAGO:
<input type="text" id="valor8" placeholder="">
<br>
<br>
PAGO:
<input type="text" id="valor9" placeholder="">
<br>
<br>
EDAD:
<input type="text" id="valor10" placeholder="">
<br>
<br>
HORARIO:
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
<br>
<h1 alingn="center">TRABAJADOR</h1>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('ZAPATERIA');
 $query="SELECT * FROM TRABAJADOR";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_TRABAJADOR</td>";
 echo "<td>NOMBRE</td>";
 echo "<td>APELLIDO_P</td>";
 echo "<td>APELLIDO_M</td>";
 echo "<td>DIRECCION</td>";
 echo "<td>PUESTO</td>";
 echo "<td>TIPO_PAGO</td>";
 echo "<td>PAGO</td>";
 echo "<td>EDAD</td>";
 echo "<td>HORARIO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_TRABAJADOR']."</td><td>".$row['NOMBRE']."</td><td>".$row['APELLIDO_P']."</td><td>".$row['APELLIDO_M']."</td><td>".$row['DIRECCION']."</td><td>".$row['PUESTO']."</td><td>".$row['TIPO_PAGO']."</td><td>".$row['PAGO']."</td><td>".$row['EDAD']."</td><td>".$row['HORARIO']."</td></tr>";
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