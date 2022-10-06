<?php 
include "koneksi.php";

// session_start();


?>

<table  align="center">
    <form action="register.php" method="post">
        <tr>
            <th colspan="2" height="40">
                <p style="font-size: 20px; font-weight: bold;">Register Form</p>
            </th>
        </tr>
        <tr>
            <td width="100"> Username </td>
            <td> <input type="text" required="required" name="username"></td>
        </tr>
        <tr>
            <td width="100"> Name </td>
            <td> <input type="text" required="required" name="nama"></td>
        </tr>
        <tr>
            <td> Kelas </td>
            <td> <input type="text" required="required" name="kelas"> </td>
        </tr>
        <tr>
            <td> Password </td>
            <td> <input type="password" required="required" name="pass"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Login" name="proseslog"></td>
        </tr>
    </form>

    <?php 
    if(isset($_POST['proseslog'])){

        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $pass = $_POST['pass'];
        
        $query = mysqli_query($koneksi, "SELECT username FROM siswa WHERE username = '$username'");

        $cek = mysqli_num_rows($query);

        // mengecek apakah sudah ada userename yang sama di dalam database

        if($cek > 0){
            
            echo "
            <script>
            alert('Anda sudah memiliki akun tersebut');
            </script> 
            ";

        }else{

            // membuat akun
            echo "<p align='center'> Akun anda sudah dibuat </p>
            <meta http-equiv=refresh content=3;URL='home.php'>";

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['kelas'] = $_POST['kelas'];

            $data = mysqli_query($koneksi, "INSERT INTO siswa VALUES('', '$username', '$nama','$kelas', '$pass')");

        }

        if(isset($_SESSION['username'])){
            header('Location: login.php');
        }
        

        // if($data){
        //     $username = $_POST['username'];
        //     $pass = $_POST['pass'];
        //     $data = mysqli_query($connect,"SELECT * FROM users WHERE username = '$username' and pass =  '$pass'");
    
        //     $cek = mysqli_num_rows($data);
        //     // var_dump($pass);
        //     // die;
    
        //     if($cek > 0){
        //         $_SESSION['username'] = $_POST['username'];
        //         $_SESSION['pass'] = $_POST['pass'];
    
        //         echo "<meta http-equiv=refresh content=0;URL='home.php'>";
        //     }else{
        //         echo "<p align=center><b> Username atau Password anda salah!! </b></p>";
        //         echo "<meta http-equiv=refresh content=2;URL='login.php'>";
        //     }
        // }
    }



    ?>


</table>