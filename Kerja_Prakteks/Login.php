<!DOCTYPE html>
<head>

<link rel="stylesheet" href="styles.css">

</head>
<html>
<body bgcolor="white" align="center">
    <center>
        <div class="Header">
        <br>
        <h1>Silahkan Login</h1>
        </div>
    </center>
    <br>
    <?php 
    session_start();
    include "Koneksi.php"
    ?>
    <form method="POST">
        <label for="uname">Username</label><br>
        <input class="masuk" type="text" id="fname" name="Username"><br>
        <label for="password">Password</label><br>
        <input class="masuk" type="password" id="lname" name="Password"><br>
        <br>
        <input class="button2" type="submit" value="login" name="submit">
    </form>
    <br>
    <form action="Start.php">
        <input class="button2" type="submit" value="back">
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $sql = mysqli_query($koneksi,"select * from tabel_user where Username='$_POST[Username]'
        and Password = '$_POST[Password]'");
        $cek = mysqli_num_rows($sql);
        echo $_POST['Username'];
        echo $_POST['Password'];
        if($cek == 1){
            $_SESSION['Username'] = $_POST['Username'];
            echo "<meta http-equiv=refresh content=0;URL='Menu.php'";
        }
        else{
            echo "<p align-center><b> Username atau Password Salah</b></p>";
        }
    }
    ?>
</body>
</html>