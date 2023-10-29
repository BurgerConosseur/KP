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
    <form action="/action.php" >
        <center>
            <div class="flex-container">
                <a href="Password.php"><div class="button3"><h2>Ganti Password</h2></div></a>
                <br>
                <a href="Menu.php"><div class="button3"><h2>Kembali</h2></div></a>
            </div>
        </center>
    </form>
</body>
</html>