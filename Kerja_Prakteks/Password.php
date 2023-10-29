<!DOCTYPE html>
<head>

<link rel="stylesheet" href="styles.css">

</head>
<html>
<?php 
include("Koneksi.php");
include("Session.php");
?>
<body bgcolor="white" align="center">
    <center>
        <div class="Header">
        <br>
        <h1>Selamat Datang, <?php echo $_SESSION['Username'] ?></h1>
        </div>
    </center>
    <br>
    <br>
    <form action="Password.php" >
        <label for="uname"><h2>Password Baru</h2></label>
        <input class="masuk" type="text" id="fname" name="fname"><br>
        <label for="password"><h2>Ketik Ulang Password Baru</h2></label>
        <input class="masuk" type="text" id="lname" name="lname"><br>
        <br>
        <input class="button2" type="submit" value="Konfirmasi">
    </form>
    <br>
    <form action="Pengaturan.php">
        <input class="button2" type="submit" value="Kembali">
    </form>
</body>
</html>