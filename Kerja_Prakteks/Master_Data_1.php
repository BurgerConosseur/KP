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
    <form action="/action.php" >
        <center>
            <div class="flex-container">
                <a href="View_Data.php"> <div class="button3"><h2>Master Data Barang</h2></div></a>
                <br>
                <div class="button3"><h2>Master Data Pegawai</h2></div>
                <br>
                <a href="Menu.php"><div class="button3" href="Menu.php"><h2>Kembali</h2></div></a>
            </div>
        </center>
    </form>
    <br>
</body>
</html>