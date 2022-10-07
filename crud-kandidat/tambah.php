<?php
include "../koneksi.php";

if ($_SESSION['username'] !== "admin") {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kandidat - Pemilihan Ketua & Wakil Ketua</title>
    <style>
        <?php include '../assets/css/style.css'?>
    </style>
</head>
<body class="create">
    <form action="simpan.php" method="POST">
        <table cellpadding="6">
            <tr>
                <td class="nama ketos">Calon Ketua</td>
                <td class="nama semcol1">:</td>
                <td><input class="in" type="text" name="nama_ketos" id=""></td>
            </tr>
            <tr>
                <td class="nama waketos">Calon Wakil Ketua</td>
                <td class="nama semcol2">:</td>
                <td><input class="in" type="text" name="nama_waketos" id=""></td>
            </tr>
            <tr>
                <td class="nama waketos">Kelas Ketua</td>
                <td class="nama semcol2">:</td>
                <td><input class="in" type="text" name="kelas_ketos" id=""></td>
            </tr>
            <tr>
                <td class="nama waketos">Kelas Wakil Ketua</td>
                <td class="nama semcol2">:</td>
                <td><input class="in" type="text" name="kelas_waketos" id=""></td>
            </tr>
            <tr>
                <td class="nama group">Nomor Group</td>
                <td class="nama semcol3">:</td>
                <td><input class="in" type="text" name="no_grup"></td>
            </tr>
            <tr>
                <td class="nama Group">Deskripsi Visi & Misi</td>
            </tr>
        </table>
        <textarea cols="50" rows="10" name="visi_misi" placeholder="masukan Visi & Misi kamu!"></textarea>
        <div class="btn">
            <a href="../dashboard.php" class="bat">Batal</a>
            <input type="submit" name="simpan" class="buat" value="Tambahkan">
        </div>
    </form>
</body>

</html>