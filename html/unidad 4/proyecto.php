<!DOCTYPE html>
<html>
<title>Datos cliente</title>
<body>
<h1 alingn="center">Reporte del cliente</h1>

<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT * FROM CLIENTE";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_CLIENTE</td>";
 echo "<td>NOMBRE</td>";
 echo "<td>DEPARTAMENTO</td>";
 echo "<td>ESCOLARIDAD</td>";
 echo "<td>BANCO</td>";
 echo "<td>TIPO_PAGO</td>";
 echo "<td>FECHA</td>";
 echo "<td>TARJETA</td>";
 echo "<td>COLOR</td>";
 echo "<td>SALDO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_CLIENTE']."</td><td>".$row['NOMBRE']."</td><td>".$row['DEPARTAMENTO']."</td><td>".$row['ESCOLARIDAD']."</td><td>".$row['BANCO']."</td><td>".$row['TIPO_PAGO']."</td><td>".$row['FECHA']."</td><td>".$row['TARJETA']."</td><td>".$row['COLOR']."</td><td>".$row['SALDO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT DEPARTAMENTO,ESCOLARIDAD,BANCO,TIPO_PAGO,FECHA FROM CLIENTE WHERE ID_CLIENTE=3";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>DEPARTAMENTO</td>";
 echo "<td>ESCOLARIDAD</td>";
 echo "<td>BANCO</td>";
 echo "<td>TIPO_PAGO</td>";
 echo "<td>FECHA</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['DEPARTAMENTO']."</td><td>".$row['ESCOLARIDAD']."</td><td>".$row['BANCO']."</td><td>".$row['TIPO_PAGO']."</td><td>".$row['FECHA']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT ID_CLIENTE FROM CLIENTE WHERE ID_CLIENTE=5";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_CLIENTE</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_CLIENTE']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT ESCOLARIDAD FROM CLIENTE WHERE ID_CLIENTE=6";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ESCOLARIDAD</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ESCOLARIDAD']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT TARJETA,COLOR,SALDO FROM CLIENTE WHERE ID_CLIENTE=6";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>TARJETA</td>";
 echo "<td>COLOR</td>";
 echo "<td>SALDO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['TARJETA']."</td><td>".$row['COLOR']."</td><td>".$row['SALDO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT ID_CLIENTE FROM CLIENTE WHERE ID_CLIENTE=8";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_CLIENTE</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_CLIENTE']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT TIPO_PAGO FROM CLIENTE WHERE ID_CLIENTE=9";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>TIPO_PAGO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['TIPO_PAGO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT DEPARTAMENTO FROM CLIENTE WHERE ID_CLIENTE=10";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>DEPARTAMENTO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['DEPARTAMENTO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT TIPO_PAGO,FECHA,TARJETA,COLOR FROM CLIENTE WHERE ID_CLIENTE=11";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>TIPO_PAGO</td>";
 echo "<td>FECHA</td>";
 echo "<td>TARJETA</td>";
 echo "<td>COLOR</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['TIPO_PAGO']."</td><td>".$row['FECHA']."</td><td>".$row['TARJETA']."</td><td>".$row['COLOR']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT ID_CLIENTE FROM CLIENTE WHERE ID_CLIENTE=12";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_CLIENTE</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_CLIENTE']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT BANCO,TIPO_PAGO,FECHA,TARJETA,COLOR,SALDO FROM CLIENTE WHERE ID_CLIENTE=14";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>BANCO</td>";
 echo "<td>TIPO_PAGO</td>";
 echo "<td>FECHA</td>";
 echo "<td>TARJETA</td>";
 echo "<td>COLOR</td>";
 echo "<td>SALDO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['BANCO']."</td><td>".$row['TIPO_PAGO']."</td><td>".$row['FECHA']."</td><td>".$row['TARJETA']."</td><td>".$row['COLOR']."</td><td>".$row['SALDO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT DEPARTAMENTO,ESCOLARIDAD,BANCO FROM CLIENTE WHERE ID_CLIENTE=18";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>TARJETA</td>";
 echo "<td>COLOR</td>";
 echo "<td>SALDO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['DEPARTAMENTO']."</td><td>".$row['ESCOLARIDAD']."</td><td>".$row['BANCO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT DEPARTAMENTO FROM CLIENTE WHERE ID_CLIENTE=19";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>DEPARTAMENTO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['DEPARTAMENTO']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>
</body>
</html>