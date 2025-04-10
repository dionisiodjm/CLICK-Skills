<?php
include "dbconn.php";

// Get the username from URL parameter
$naran_utilizador = $_GET['naran_utilizador'];

// Execute delete query
$sql = "DELETE FROM utilizador WHERE naran_utilizador='$naran_utilizador'";
$query = mysqli_query($conn, $sql);

// Redirect immediately after deletion
header("Location: hamosu.php"); 
exit();
?>