<?php
include "koneksi.php"; 

if( !isset($_SESSION['username']) && !isset($_SESSION['kelas']) ){
    header("Location: login.php");
  }  

  if($_SESSION['username'] == "admin"){
    header("Location: dashboard.php");
}

  $query = mysqli_query($koneksi, "SELECT nama_pemilih FROM pemilihan Where nama_pemilih = '$_SESSION[username]'");


    $data = mysqli_fetch_array($query);
    
    $siswa = mysqli_query($koneksi, "SELECT nama FROM siswa WHERE username = '$_SESSION[username]'");
    
    $siswarr = mysqli_fetch_array($siswa);
    
    $cek = mysqli_num_rows($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Ketua & Wakil Ketua Osis - SMK Taruna Bhakti Depok</title>
    <style>
        <?php include 'assets/css/style.css'?>
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <span id="empty"></span>
    <nav>
        <div class="leftbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#kandidart">Kandidat</a>
            <a href="#total">Total</a>
        </div>
        <div class="rightbar">
            <a href=""><?=$siswarr['nama']?> | <?=$_SESSION['kelas']?></a>
            <a href="logout.php">Log Out</a>
        </div>
    </nav>
    <header>
        <img src="assets/img/hero-smk-bisa.png" alt="smk-bisa-hebat">
        <div class="col_card">
            <h1 class="line">Pemilu OSIS 2020-2021</h1>
            <img  src="assets/img/Graphic chart_Monochromatic 1.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis</p>
        </div>
    </header>
    <div class="space"></div>
    <main>
        <div class="text">
            <h1>Visi & Misi</h1>
            <p>Setiap orang memiliki tujuan dan keinginan dalam hidupnya dalam agar hidupnya lebih bermakna dan tertata makadari itu dibutuh kan visi dan misi</p>
        </div>
        <?php 
        $no = 1;

        $a = mysqli_query($koneksi, "SELECT * FROM kandidat WHERE status = 'up'");
        while($tampil = mysqli_fetch_array($a)) :
        ?>
        
        <div class="nametxt">
            <p><?=$tampil['nama_ketos']?> & <?=$tampil['nama_waketos']?></p>
            <div class="arr">
                <span onclick="myFunction(this)" class="material-symbols-outlined">expand_more</span>
                <h6>
                    <?=$tampil['visi_misi']?>
                </h6>
            </div>
        </div>
        <?php $no++; endwhile ?>
        
    </main>
    <div class="space" id="kandidat"></div>
    <section>
        <form action="" method="POST">
            
            <?php 
            $i = 0;

            
            $b = mysqli_query($koneksi, "SELECT * FROM kandidat WHERE status = 'up'");
            
            while($show = mysqli_fetch_array($b)): 
            ?>
                <?php
                $d = mysqli_query($koneksi, "SELECT no_grup FROM pemilihan WHERE nama_pemilih = '$_SESSION[username]'");
                // if(is_null($d)){
                //     $d = 0;
                // }
                $e = mysqli_fetch_array($d);
                if(is_null($e)){
                    $e = ['kosong :3'];
                }
                if($e[0] == $show[0]):
                ?>
                <input type="radio" checked name="celect" value="<?=$show[6]?>" id="<?=$show[0]?>">
                <?php else : ?>
                <input type="radio" name="celect" value="<?=$show[6]?>" id="<?=$show[0]?>">
                <?php endif ?>
                <label for="<?=$show[0]?>" class="card">
                    <img src="assets/img/profile.png" alt="">
                    <h2><?=$show[1]?> | <?= $show[3]?></h2>
                    <h3><?=$show[2]?> | <?= $show[4]?></h3>
                    <p><?=$show['visi_misi']?></p>
                    <span class="material-symbols-outlined">done</span>
                </label>
                
                <?php $i++; endwhile ?>
                
                <input type="submit" name="pilih" value="Pilih ">
        </form>
        <?php 
        if(isset($_POST['pilih'])){

            if($data['nama_pemilih'] > 0){
    
                $radio = $_POST['celect'];
                
                $tampil = mysqli_query($koneksi, "UPDATE pemilihan SET no_grup = '$radio' WHERE nama_pemilih = '$_SESSION[username]'");
                echo "
                <meta http-equiv=refresh content=0;URL='index.php'>";
    
            }else{
                $tampil = mysqli_query($koneksi, "INSERT INTO pemilihan VALUES('', '$_SESSION[username]', '$_SESSION[kelas]', '$radio')");
        
                echo "
                <meta http-equiv=refresh content=0;URL='index.php'>";
        
              }
        
            if($tampil){
              
            }else{
              echo "silahkan pilih kandidat";
            }
        }
    
        ?>
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
                <h2><?=$row['nama_ketos']?> | <?= $row['kelas_ketos']?></h2>
                <h3><?=$row['nama_waketos']?> | <?= $row['kelas_waketos'] ?></h3>
            </div>
            
            <?php $err = count(query("SELECT * FROM pemilihan WHERE no_grup='$row[no_grup]'"))?>
            <p>Jumlah siswa yang memilih adalah <?=$err?> siswa</p>
        </div>
        
    <?php $o++; endwhile  ?>
    </div>








    
    <script src="assets/JS/main.js">
    </script>
</body>
</html>