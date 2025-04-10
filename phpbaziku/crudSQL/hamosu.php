<!DOCTYPE html>
<html>
<head>
	<title>HAMOSU DADUS</title>
</head>
<body>
<h1>Lista Utilizador</h1>
	<a href='f_aumenta.php'>
			<button>Aumenta Dadus Foun</button></a>
<hr>
<table>
	<thead>
		<tr>
			<th>Nu.</th>
			<th>Naran Utilizador</th>
			<th>Naran Kompletu</th>
			<th>Deskrisaun</th>
			<th>Asaun</th>
		</tr>
		</thead>
<tbody>
<?php
include"dbconn.php";
$result = mysqli_query($conn, "SELECT * FROM utilizador");
$no = 1; 
while($row=mysqli_fetch_array($result))
{
echo "<td>$no</td>";
echo "<td>$row[naran_utilizador]</td>";
echo "<td>$row[xave_utilizador]</td>";
echo "<td>$row[naran]</td>";
echo "<td>$row[deskrisaun]</td>";
echo "<td> <a href='f_hadiak.php?naran_utilizador=$row[naran_utilizador]'>Hadiak</a> | 
<a href='hamoos.php?naran_utilizador=$row[naran_utilizador]' onClick=\"return confirm('Hakarak atu Hamoos Dadus $row[naran]?')\">Hamoos</a></td></tr>";
$no++;
}
echo "</table>";
?>
</tbody>
</body>
</html>