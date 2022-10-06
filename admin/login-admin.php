<?php 
include "../koneksi.php";

// if($_SESSION['name']  != 'admin'){
//     header("Location: ../index.php");
// }
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
    <style>
        * {
            margin: 0;
            font-family: 'Quicksand', sans-serif;
            box-sizing: border-box;
            text-decoration: none;
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
            width: 600px;
            height: 400px;
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
            border: 1px black solid;
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
            width: 369px;
            height: 178px;
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
    <form action="" method="post">
        <div class="box">
        <table cellpadding="13">
            <tr>
                <td><h2>Admin</h2></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="user@gmail.com"></td>
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
        $pass = $_POST['pass'];
        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' and pass = '$pass'");

        if(mysqli_num_rows($query) > 0){
            $_SESSION['username'] = $_POST['username'];

            if(!isset($_SESSION['username'])){
                header('Location: login-admin.php');
            }else{
                header("Location: ../dashboard.php");
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