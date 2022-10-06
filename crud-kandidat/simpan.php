<?php
include '../koneksi.php';

if($_SESSION['username'] !== "admin"){
    header("Location: ../index.php");
}

if(isset($_POST['simpan'])){
    $nama_ketos = $_POST ['nama_ketos'] ;
    $nama_waketos = $_POST ['nama_waketos'] ;
    $kelas_ketos  = $_POST['kelas_ketos'];
    $kelas_waketos = $_POST['kelas_waketos'];
    $visi_misi = $_POST ['visi_misi'] ;
    $no_grup = $_POST ['no_grup'] ;

    $sql = "INSERT INTO kandidat VALUES('','$nama_ketos','$nama_waketos', 'profile.png', '$kelas_ketos', '$kelas_waketos', '$visi_misi','$no_grup', 'up')";

    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location: ../dashboard.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}

var_dump($sql);
die;
?>