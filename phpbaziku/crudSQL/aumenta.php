<?php
include"dbconn.php";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$xave_utilizador=md5($_POST[xave_utilizador]);
$stmt =("INSERT INTO utilizador(naran_utilizador, xave_utilizador, naran, deskrisaun)
VALUES ('$_POST[naran_utilizador]','$xave_utilizador','$_POST[naran]','$_POST[deskrisaun]')");
if(!mysqli_query($conn,$stmt))
	{
	die('Error: '.mysqli_error($conn));
	}
//echo "1 record added";
if($stmt){
	//se susesu
?>
<script language="javaScript">
alert('Dadus utilizador rai tiha ona, obrigado barak!');
document.location="hamosu.php";
</script>
<?php
// se falla
}
  mysqli_close($conn);
?>