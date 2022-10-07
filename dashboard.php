<?php 
include "koneksi.php";


if($_SESSION['username'] != "admin"){
    header("Location: index.php");
}

$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$_SESSION[username]'");

$r = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'assets/css/style.css'?>
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <nav>
        <div class="leftbar">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="#kandidat">Kandidat</a>
            <a href="#siswa">Siswa</a>
            <a href="">Total</a>
        </div>
        <div class="rightbar">
            <a href=""> <?=$r['username']?> | </a>
            <a href="admin/logout-admin.php">Log Out</a>
            <div id="btn" class="swich">
            <span  class="material-symbols-outlined" id="mode"">dark_mode</span>
            </div>
            <!-- dark-mode -->
            <script>
                let y = document.getElementById('mode');
                let body = document.querySelector("body");
                y.addEventListener ("click", function(){
                    y.classList.toggle("mode");
                    document.getElementById("btn").classList.toggle("dank");
                    if(y.classList.contains("mode")){
                        y.innerHTML = "light_mode"
                    }else{
                        y.innerHTML = "dark_mode"
                    }
                    document.querySelector("body").classList.toggle("dark")
                })
            </script>
        </div>
    </nav>
    <header>
        <img src="assets/img/hero-smk-bisa.png" alt="smk-bisa-hebat">
        <div class="col_card">
            <h1 class="line">Admin Side, Welcome!</h1>
            <img  src="assets/img/Graphic chart_Monochromatic 1.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis</p>
        </div>
    </header>
    <div class="space" id="kandidat">
        <a href="crud-kandidat/tambah.php" >Buat Kandidat Baru</a>
    </div>
    <section class="dashboard" >
        <form action="crud-kandidat/formedit.php">
                <?php 
                $no = 0;

                $query = mysqli_query($koneksi, "SELECT * FROM kandidat WHERE status = 'up'");
                while($data = mysqli_fetch_array($query)) :
                ?>
                <input type="radio" name="celect" id="<?=$data['id_kandidat']?>">
                <label for="<?=$data['id_kandidat']?>" class="card">
                    <img src="assets/img/<?=$data['profile']?>" alt="">
                    <h2><?=$data['nama_ketos']?> | <?=$data['kelas_ketos'] ?></h2>
                    <h3><?=$data['nama_waketos']?> | <?=$data['kelas_waketos'] ?></h3>
                    <p><?=$data['visi_misi']?></p>
                    <a href="crud-kandidat/formedit.php?id=<?=$data['id_kandidat']?>"><span class="material-symbols-outlined">edit</span></a>
                    <a href="crud-kandidat/hapus.php?id=<?=$data['id_kandidat']?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')"><span class="material-symbols-outlined">delete</span></a>
                </label>    
                <?php $no++; endwhile ?>           
        </form>
    </section>

    <div class="space" id="siswa">
        <form action="">
            <input type="text" name="search" id="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" placeholder="Cari disini... :3">
            <input type="submit" name="cari" value="Cari">
            <a href="daftar.php" class="right">Buat Akun Siswa Baru</a>
        </form>
    </div>

    <section class="dashboard">
        <form action="">
                <?php 
                if(isset($_GET['search'])){
                    $cari = $_GET['search'];

                    $search = "SELECT * FROM siswa WHERE id LIKE '%$cari%' OR username LIKE '%$cari%' OR nama LIKE '%$cari%' OR kelas LIKE '%$cari%' LIMIT 9";

                }else{
                    $search = "SELECT * FROM siswa WHERE status = 'up' LIMIT 9";
                }
                $i = 0;
                
                $siswa = mysqli_query($koneksi, $search);
                while($dasis = mysqli_fetch_array($siswa)) :
                ?>
                <input type="radio" name="user" id="<?=$dasis['id']?>">
                <label for="<?=$dasis['id']?>" class="card">
                    <img src="assets/img/<?=$dasis['profile']?>" alt="">
                    <h2><?=$dasis['nama']?> | <?=$dasis['kelas'] ?> </h2>
                    <p><?=$dasis['username']?></p>
                    <a href="admin/formedit_siswa.php?id_siswa=<?=$dasis['id']?>"><span class="material-symbols-outlined">edit</span></a>
                    <a href="admin/hapus_siswa.php?id_siswa=<?=$dasis['id']?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')"><span class="material-symbols-outlined">delete</span></a>
                </label>    
                <?php $i++; endwhile ?>           
        </form>
    </section>
    <div class="space">
    <?php 
    $o = 0; 
    
    // $h = mysqli_query($koneksi, "SELECT no_grup, COUNT(*) duplikat FROM pemilihan GROUP BY no_grup ORDER BY duplikat DESC ");

    // $l = mysqli_fetch_assoc($h);
    // $err = count(query("SELECT * FROM pemilihan WHERE no_grup='$row[no_grup]'")); 
    // nanti dilanju :3
    
    $j = mysqli_query($koneksi, "SELECT * from kandidat WHERE status = 'up'");
    while($row = mysqli_fetch_assoc($j)) :
    ?>
        <div class="card">
            <img src="assets/img/profile.png" alt="">
            <div class="txt">
                <h2><?=$row['nama_ketos']?></h2>
                <h3><?=$row['nama_waketos']?></h3>
            </div>
            
            <?php 
            
            $sql = query("SELECT * FROM pemilihan WHERE no_grup='$row[no_grup]'");//membuat array di dalam array
            
            $err = count($sql)?>
            <p>Jumlah siswa yang memilih adalah <?=$err?> siswa</p>
        </div>
        
    <?php $o++; endwhile; ?>
    </div>
    <script src="assets/JS/main.js"></script>
</body>
</html>