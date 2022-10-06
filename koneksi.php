<?php 
session_start();

$koneksi = mysqli_connect("localhost","root","","db_pemilos") or die("tidak dapat terhubung ke database");


function query($b) {
    global $koneksi;

    $a = mysqli_query($koneksi, $b);

    $rows = [];

    while($row = mysqli_fetch_assoc($a)){
        $rows[] = $row;
    }

    return $rows;
}


// function klik(){
//     global $koneksi;
   

//     if($data['nama_pemilih'] > 0){

//         $radio = $_POST['celect'];
        
//         $tampil = mysqli_query($koneksi, "UPDATE pemilihan SET no_grup = '$radio' WHERE nama_pemilih = '$_SESSION[username]'");
//         echo "
//         <script>
//         alert('Pilihan anda sudah dirubah');
//         </script>";
//     }else{
//         global $radio;
//         $tampil = mysqli_query($koneksi, "INSERT INTO pemilihan VALUES('', '$_SESSION[username]', '$_SESSION[kelas]', '$radio')");

//         echo "
//         <script>
//         alert('Terima kasih sudah memilih');
//         </script>";

//       }

//     if($tampil){
      
//     }else{
//       echo "silahkan pilih kandidat";
//     }
// }

?>