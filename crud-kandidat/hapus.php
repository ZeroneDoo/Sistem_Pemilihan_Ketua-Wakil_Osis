<?php 
include '../koneksi.php' ;

if($_SESSION['username'] !== "admin"){
    header("Location: ../index.php");
}

if (isset($_GET['id_kandidat'])) {
    header('Location: dashboard.php');
}

$id = $_GET['id_kandidat'];

$sql = "UPDATE kandidat SET status = 'down' WHERE id_kandidat = '$id'";
$query =  mysqli_query($koneksi,$sql);

if ($query) {
    header('Location: ../dashboard.php');
}
else{
    header('Location: hapus.php?status gagal');
}

?>