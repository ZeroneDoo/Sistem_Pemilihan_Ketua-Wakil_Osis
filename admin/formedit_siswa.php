<?php 
include "../koneksi.php";

$id = $_GET['id_siswa'];


$result = mysqli_query($koneksi, "SELECT * FROM siswa WHERE status = 'up'");
$arr = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Ubah - Pemilihan Osis</title>
    <style>
        * {
            margin: 0;
            font-family: 'Quicksand', sans-serif;
            box-sizing: border-box;
            text-decoration: none;
        }

        .img{
            background-image: url("../assets/img/<?=$arr['profile']?>");
            background-size: cover;
            background-repeat: no-repeat;
            width: 60px;
            height: fit-content;
            border-radius: 50%;
        }

        a{
            color: darkblue;
            font-weight: medium;
        }
        
        body {
            display: flex;
            justify-content: center;
            background-color: #1B4B6C;
        }
        .box{
            margin: 100px;
            width: fit-content;
            padding: 30px;
            height: fit-content;
            border-radius: 10px;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("../assets/img/image21.jpg");
            background-repeat: no-repeat;
            background-position: center;
        }
        input{
            border: none;
            border: 1px #222 solid;
            width: 28vw;
            padding: 8px;
            font-size: 15px;
            border-radius: 5px;
            opacity: 99%;
            background: transparent;
            margin-left: 10px;
        }
        input:focus{
            outline: 1px blue solid;
            border: transparent;
        }
        table{
            /* width: 369px;
            height: 178px; */
        }
        td{
            font-size: 15px;
        }
        button{
            border: 1px black solid;
            background: transparent;
            padding: 4px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="box">
        <table cellpadding = "10">
            <tr>
                <td><h2>Edit</h2></td>
            </tr>
            <tr>
                <td>Foto Profile</td>
                <td><input type="file" name="profile"></td>
                <td class="img"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?=$arr['username']?>" placeholder="user@gmail.com"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?=$arr['nama']?>"  placeholder="user"></td>
            </tr>
            
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?=$arr['kelas']?>"  placeholder="X, XI, XII"></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" value="<?=$arr['pass']?>"  placeholder="*****"></td>
            </tr>
            <tr>
                <td><button type="submit" name="proseslog">Daftar</button></td>
            
            </tr>
            </table>
    </div>
    </form>

    <?php 
    if(isset($_POST['proseslog'])){

        $profile = $_FILES['profile']['name'];
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $pass = $_POST['pass'];

        $profile_tmp = $_FILES['profile']['tmp_name']; //mengambil bentuk asli dari filenya

        move_uploaded_file($profile_tmp, "../assets/img/$profile");
        
        if($profile != ''){
            $query = mysqli_query($koneksi, "UPDATE siswa SET username = '$username', nama = '$nama', kelas = '$kelas', pass = '$pass', profile = '$profile', status = 'up' WHERE id = '$id'");
        }else{
            $query = mysqli_query($koneksi, "UPDATE siswa SET username = '$username', nama = '$nama', kelas = '$kelas', pass = '$pass', status = 'up' WHERE id = '$id'");
        }

        if(isset($_SESSION['username'])){
            echo "
            <meta http-equiv=refresh content=0;URL='../dashboard.php'>";
        }
        
    }
    ?>
</body>
</html>