<?php 
require "../koneksi.php";

if(isset($_GET['id_siswa'])){
    $query = mysqli_query($koneksi, "UPDATE siswa SET status = 'down' WHERE id='$_GET[id_siswa]'");

    if($query){
        header("Location: ../dashboard.php");
    }else{
        header("Location: hapus_siswa.php?status='gagal'");
    }
}

var_dump($query);
die;

?>