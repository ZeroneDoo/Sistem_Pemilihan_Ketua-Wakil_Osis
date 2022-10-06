<?php 
include '../koneksi.php';
if($_SESSION['username'] !== "admin"){
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4><a href="tambah.html"> [+]Tambah Data</a></h4>
    <h4><a href="../logout.php"> Log Out</a></h4>
    <table border = "1">
        <tr>
            <th>Id kandidat</th>
            <th>Nama Ketua Osis</th>
            <th>Nama Wakil Ketua osis</th>
            <th>Visi & Misi</th>
            <th>No_grup</th>
            <th>aksi</th>
        </tr>

<?php
        $sql = "SELECT * FROM kandidat WHERE status = 'up'";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
            echo"
        <tr>
            <td>$data[id_kandidat]</td>
            <td>$data[nama_ketos]</td>
            <td>$data[nama_waketos]</td>
            <td>$data[visi_misi]</td>
            <td>$data[no_grup]</td>
            <td>
                    <a href='formedit.php?id_kandidat=$data[id_kandidat]'>Edit</a>    
                    <a href='hapus.php?id_kandidat=$data[id_kandidat]' onclick=\"return confirm('Apakah anda yakin ingin menghapus data tersebut?')\">Hapus</a>    
                </td>
            </tr>";
        }
       
        ?>  
    </table>
</body>
</html>