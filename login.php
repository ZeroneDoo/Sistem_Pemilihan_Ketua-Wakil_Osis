<?php 
include "koneksi.php";

if(isset($_SESSION['username']) && isset($_SESSION['kelas'])){
    header("Location: index.php");
}
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
    <title>Login - Pemilihan Osis</title>
    <!-- <style>
       
    </style> -->
    <style>
        <?php include 'assets/css/style.css'?>
    </style>
</head>
<body class="log siswa">
    <form action="login.php" method="post">
        <div class="box">
        <table cellpadding="13">
            <tr>
                <td><h2>Login</h2></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="user@gmail.com"></td>
            </tr>
            
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" placeholder="X, XI, XII"></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" placeholder="*****"></td>
            </tr>
            <tr>
                <td><button type="submit" name="proseslog">Login</button></td>
            
            </tr>
            </table>
    </div>
    </form>

    <?php 
    if(isset($_POST['proseslog'])){
        $username = $_POST['username'];
        $kelas = $_POST['kelas'];
        $pass = $_POST['pass'];
        $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE username = '$username' and pass = '$pass'");

        if(mysqli_num_rows($query) > 0){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['kelas'] = $_POST['kelas'];

            if(!isset($_SESSION['username'])){
                header('Location: login.php');
            }elseif($_SESSION['username'] == "admin" && $pass = 1234){
                header("Location: dashboard.php");
            }else{
                echo "<script>
                document.location.href = 'index.php'
                </script>";
            }

        }else{
            echo "
            <script>
            alert('Username atau password anda salah!');
            </script>
            ";
        }
    }
    ?>
</body>
</html>