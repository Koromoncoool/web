<!DOCTYPE html>
<html>
<title>Datos cliente</title>
<body>
<h1 alingn="center">Reporte del cliente</h1>

<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT * FROM TRANSPORTE";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_TRANSPORTE</td>";
 echo "<td>NOMBRE</td>";
 echo "<td>RESPONSABLE</td>";
 echo "<td>HORARIO</td>";
 echo "<td>PRODUCTO</td>";
 echo "<td>DESTINO</td>";
 echo "<td>LLEGADA</td>";
 echo "<td>TIPO</td>";
 echo "<td>COSTO</td>";
 echo "<td>ORDEN_DE_SERVICIO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_TRANSPORTE']."</td><td>".$row['NOMBRE']."</td><td>".$row['RESPONSABLE']."</td><td>".$row['HORARIO']."</td><td>".$row['PRODUCTO']."</td><td>".$row['DESTINO']."</td><td>".$row['LLEGADA']."</td><td>".$row['TIPO']."</td><td>".$row['COSTO']."</td><td>".$row['ORDEN_DE_SERVICIO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT PRODUCTO FROM TRANSPORTE WHERE ID_TRANSPORTE=1";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>PRODUCTO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['PRODUCTO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT * FROM TRANSPORTE WHERE ID_TRANSPORTE=2";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_TRANSPORTE</td>";
 echo "<td>NOMBRE</td>";
 echo "<td>RESPONSABLE</td>";
 echo "<td>HORARIO</td>";
 echo "<td>PRODUCTO</td>";
 echo "<td>DESTINO</td>";
 echo "<td>LLEGADA</td>";
 echo "<td>TIPO</td>";
 echo "<td>COSTO</td>";
 echo "<td>ORDEN_DE_SERVICIO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_TRANSPORTE']."</td><td>".$row['NOMBRE']."</td><td>".$row['RESPONSABLE']."</td><td>".$row['HORARIO']."</td><td>".$row['PRODUCTO']."</td><td>".$row['DESTINO']."</td><td>".$row['LLEGADA']."</td><td>".$row['TIPO']."</td><td>".$row['COSTO']."</td><td>".$row['ORDEN_DE_SERVICIO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT TIPO FROM TRANSPORTE WHERE ID_TRANSPORTE=3";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>TIPO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['TIPO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT RESPONSABLE FROM TRANSPORTE WHERE ID_TRANSPORTE=4";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>RESPONSABLE</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['RESPONSABLE']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT ID_TRANSPORTE FROM TRANSPORTE WHERE ID_TRANSPORTE=6";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>iD_TRANSPORTE</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_TRANSPORTE']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT DESTINO FROM TRANSPORTE WHERE ID_TRANSPORTE=6";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>TIPO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['DESTINO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT COSTO FROM TRANSPORTE WHERE ID_TRANSPORTE=7";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>COSTO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['COSTO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT RESPONSABLE FROM TRANSPORTE WHERE ID_TRANSPORTE=9";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>RESPONSABLE</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['RESPONSABLE']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT ORDEN_DE_SERVICIO FROM TRANSPORTE WHERE ID_TRANSPORTE=9";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ORDEN_DE_SERVICIO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ORDEN_DE_SERVICIO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT * FROM TRANSPORTE WHERE ID_TRANSPORTE=11";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_TRANSPORTE</td>";
 echo "<td>NOMBRE</td>";
 echo "<td>RESPONSABLE</td>";
 echo "<td>HORARIO</td>";
 echo "<td>PRODUCTO</td>";
 echo "<td>DESTINO</td>";
 echo "<td>LLEGADA</td>";
 echo "<td>TIPO</td>";
 echo "<td>COSTO</td>";
 echo "<td>ORDEN_DE_SERVICIO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_TRANSPORTE']."</td><td>".$row['NOMBRE']."</td><td>".$row['RESPONSABLE']."</td><td>".$row['HORARIO']."</td><td>".$row['PRODUCTO']."</td><td>".$row['DESTINO']."</td><td>".$row['LLEGADA']."</td><td>".$row['TIPO']."</td><td>".$row['COSTO']."</td><td>".$row['ORDEN_DE_SERVICIO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>

</body>
</html>