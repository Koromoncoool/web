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
 echo "<td>DEPARTAMENTO</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_CLIENTE']."</td><td>".$row['NOMBRE']."</td><td>".$row['DEPARTAMENTO']."</td><tr>";
}
 echo "</table>";
 mysql_close();
?>
<br>
<?php
 $connection = mysql_connect('localhost','root','');
 mysql_select_db('soriana');
 $query="SELECT * FROM CLIENTE";
 $result=mysql_query($query);
 echo "<table border='1'>";
 echo "<tr><td>ID_CLIENTE</td>";
 echo "<td>NOMBRE</td>";
 echo "<td>DEPARTMANETO</td>";
 echo "<td>ESCOLARIDAD</td></tr>";
 while($row=mysql_fetch_array($result)){
 echo "<tr><td>".$row['ID_CLIENTE']."</td><td>".$row['NOMBRE']."</td><td>".$row['DEPARTAMENTO']."</td><td>".$row['ESCOLARIDAD']."</td></tr>";
}
 echo "</table>";
 mysql_close();
?>

</body>
</html>