<?php
include '../koneksi.php';

if($_SESSION['username'] !== "admin"){
    header("Location: ../index.php");
}

$id = $_GET['id'];


$sql = "SELECT * FROM kandidat WHERE id_kandidat='$id'";
$query = mysqli_query($koneksi, $sql);
$kndt = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1){
    die("data tidak di temukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
        font-family: QuickSands;
        src: url(assets/quicksand-v30-latin-regular.woff2);
        }
        body {
            font-family: QuickSands;
            /* font-size: ; */
            background-color: #0968A8;
        }

        form {
            /* border: 1px solid black; */
            padding: 20px;
            width: 650px;
            height: fit-content;
            border-radius: 12px;
            box-sizing: border-box;
            position: relative;
            margin: 150px auto;
            background-color: white;
            box-shadow: 2px 2px 4px #000;
            ;
        }

        .img{
            background-image: url("../assets/img/<?= $kndt['profile']?>");
            background-size: cover;
            background-repeat: no-repeat;
            width: 40px;
            height: fit-content;
            border-radius: 50%;
        }

        table {
            position: relative;
            padding: 30px;
            padding-bottom: 2vh;
        }

        textarea {
            margin-left: 2.5vw;
            /* margin-top: 0vh; */
            width: 480px;
            height: 120px;
        }

        .nama {
            font-size: 14px;
            padding-top: 15px;

        }

        .in {
            width: 350px;
            border: none;
            border-bottom: 1px solid black;
            padding: 7px
        }

        .in:focus {
            outline: 1px #0968A8 solid;
            border: transparent;
            border-radius: 2px;
        }

        a,
        .buat {
            border: none;
            font-size: 14px;
            text-decoration: none;
            background-color: #0968A8;
            padding: 5px;
            color: white;
            border-radius: 3px;
        }

        .btn {
            margin-left: 33.5vh;
            margin-top: 9px;
        }
    </style>
    <title>Edit Data</title>
</head>
<body>
    
<form action="" method="POST" enctype="multipart/form-data">
        <table cellpadding="6">
            <tr>
                <td class="nama ketos">Foto Profile</td>
                <td class="nama semcol1">:</td>
                <td><input class="in" type="file" name="profile"></td>
                <td class="img"></td>
            </tr>
            <tr>
                <td class="nama ketos">Calon Ketua</td>
                <td class="nama semcol1">:</td>
                <td><input class="in" type="text" name="nama_ketos" value="<?=$kndt['nama_ketos'] ?>"></td>
            </tr>
            <tr>
                <td class="nama waketos">Calon Wakil Ketua</td>
                <td class="nama semcol2">:</td>
                <td><input class="in" type="text" name="nama_waketos" value="<?=$kndt['nama_waketos'] ?>"></td>
            </tr>
            <tr>
                <td class="nama waketos">Kelas Ketua</td>
                <td class="nama semcol2">:</td>
                <td><input class="in" type="text" name="kelas_ketos" value="<?=$kndt['kelas_ketos'] ?>"></td>
            </tr>
            <tr>
                <td class="nama waketos">Kelas Wakil Ketua</td>
                <td class="nama semcol2">:</td>
                <td><input class="in" type="text" name="kelas_waketos" value="<?=$kndt['kelas_waketos'] ?>"></td>
            </tr>
            <tr>
                <td class="nama group">Nomor Group</td>
                <td class="nama semcol3">:</td>
                <td><input class="in" type="text" name="no_grup" value="<?=$kndt['no_grup'] ?>"></td>
            </tr>
            <tr>
                <td class="nama Group">Deskripsi Visi & Misi</td>
            </tr>
        </table>
        <textarea cols="50" rows="10" name="visi_misi" placeholder="masukan Visi & Misi kamu!"><?=$kndt['visi_misi'] ?></textarea>
        <div class="btn">
            <a href="../dashboard.php" class="bat">Batal</a>
            <input type="submit" name="simpan" class="buat" value="Tambahkan">
        </div>
    </form>

    <?php 
    if(isset($_POST['simpan'])){
        // $id2 = $_POST ['id'] ;
        $profile = $_FILES['profile']['name'] ;
        $nama_ketos = $_POST ['nama_ketos'] ;
        $nama_waketos = $_POST ['nama_waketos'] ;
        $kelas_ketos = $_POST ['kelas_waketos'] ;
        $kelas_waketos = $_POST ['kelas_waketos'] ;
        $visi_misi = $_POST ['visi_misi'] ;
        $no_grup = $_POST ['no_grup'] ;
    

        $profile_tmp = $_FILES['profile']['tmp_name'];

        move_uploaded_file($profile_tmp, "../assets/img/$profile");
        
        if($profile != ''){
            $sqlr = "UPDATE kandidat SET nama_ketos='$nama_ketos', nama_waketos ='$nama_waketos', kelas_ketos='$kelas_ketos', kelas_waketos = '$kelas_waketos', profile='$profile', visi_misi='$visi_misi',no_grup='$no_grup' WHERE id_kandidat='$id'";
        }else{
            $sqlr = "UPDATE kandidat SET nama_ketos='$nama_ketos', nama_waketos='$nama_waketos', kelas_ketos='$kelas_ketos', kelas_waketos='$kelas_waketos', visi_misi='$visi_misi',no_grup='$no_grup' WHERE id_kandidat='$id'";
            
        }
        
        $quer = mysqli_query($koneksi, $sqlr);
        // var_dump($quer);
        // die;
        if($quer){
            echo " <script>
            document.location='../dashboard.php';
            </script>";
        }else{
            // echo " <script>
            // document.location='?status=gagal';
            // </script>";
        }
    }

    
    ?>

</body>

</html>