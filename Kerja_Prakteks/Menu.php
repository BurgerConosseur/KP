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
                <a href="Master_Data_1.php"><div class="button3"><h2>Master Data</h2></div></a>
                <br>
                <a href="Jual.php"><div class="button3"><h2>Jual</h2></div></a>
                <br>
                <div class="button3"><h2>Data Pembelian</h2></div>
                <br>
                <a href="Pengaturan.php"><div class="button3"><h2>Pengaturan</h2></div></a>
                <br>
                <a href="LogOut.php"><div class="button3"><h2>Log Out</h2></div></a>
            </div>
        </center>
    </form>
</body>
</html>