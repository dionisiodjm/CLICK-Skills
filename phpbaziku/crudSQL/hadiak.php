<?php
include "dbconn.php";

// Get form inputs directly
$naran_utilizador = $_POST['naran_utilizador'];
$naran = $_POST['naran'];
$deskrisaun = $_POST['deskrisaun'];

// Prepare base query
$query = "UPDATE utilizador SET 
          naran_utilizador = '$naran_utilizador',
          naran = '$naran',
          deskrisaun = '$deskrisaun'";

// Add password if provided
if (!empty($_POST['xave_utilizador'])) {
    $xave = md5($_POST['xave_utilizador']);
    $query .= ", xave_utilizador = '$xave'";
}

// Complete query
$query .= " WHERE naran_utilizador = '$naran_utilizador'";

// Execute
if(mysqli_query($conn, $query)) {
    // Show success message and redirect
    echo '<script type="text/javascript">
          alert("Dadus utilizador Hadia tiha ona, obrigado barak!");
          window.location = "hamosu.php";
          </script>';
}
exit();
?>