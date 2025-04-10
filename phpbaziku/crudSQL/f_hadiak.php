<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO HADIA DADUS</title>
</head>
<body>
<?php
include "dbconn.php";
// Added security check for the parameter
if(isset($_GET['naran_utilizador'])) {
    $naran_utilizador = mysqli_real_escape_string($conn, $_GET['naran_utilizador']);
    $edit = mysqli_query($conn, "SELECT * FROM utilizador WHERE naran_utilizador='$naran_utilizador'");
    $row = mysqli_fetch_array($edit);
} else {
    die("Parameter naran_utilizador la iha!");
}
?>
<h1>Formulariu Hadiak Dadus Utilizador</h1><hr>
<form method='POST' action='hadiak.php'>
<table class='table' cellpadding='0' cellspacing='0' border='0' autofit>
<tbody>
<tr>
    <td>Naran Utilizador</td>
    <td><input type='text' name='naran_utilizador' readonly value='<?php echo ($row['naran_utilizador']); ?>' size='12'></td>
</tr>
<tr>
    <td>Xave Utilizador</td>
    <td><input type='password' name='xave_utilizador' placeholder='*)Bainhira xave utilizador la muda entaun husi mamuk deit'></td>
</tr>
<tr>
    <td>Naran</td>
    <td><input type='text' name='naran' value='<?php echo ($row['naran']); ?>'></td>
</tr>
<tr>
    <td>Deskrisaun</td>
    <td><input type='text' name='deskrisaun' value='<?php echo ($row['deskrisaun']); ?>' size='75'></td>
</tr>
<tr>
    <td></td>
    <td colspan='2'>
        <button type='submit'>Hadiak</button> &nbsp; 
        <button type='reset'>Kansela</button>
    </td>
</tr>
</tbody>
</table>
</form>
</body>
</html>