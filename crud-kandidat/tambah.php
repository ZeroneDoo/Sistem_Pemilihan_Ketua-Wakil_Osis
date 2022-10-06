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
            width: 600px;
            height: 5%;
            border-radius: 12px;
            box-sizing: border-box;
            position: relative;
            margin: 150px auto;
            background-color: white;
            box-shadow: 2px 2px 4px #000;
            ;
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
            border-radius: 5px;
            padding: 8px;
            font-size: 14px;
            height: 120px;
        }

        textarea:focus {
            outline: 1px #0968A8 solid;
            border: transparent;
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
</head>

<body>
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