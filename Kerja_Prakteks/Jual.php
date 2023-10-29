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
        <h1>Silahkan Menjual, <?php echo $_SESSION['Username'] ?></h1>
        </div>
    </center>
    <br>
    <form method="GET">
    <h1>Cari Barang</h1>
    <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari'];}?>">
    <input type="submit">
    </form>
    <br>
    <center>
        <table id="Table1">
            <tr>
                <td>id produk</td>
                <td>Item Name</td>
                <td>Description</td>
                <td>Supplier</td>
                <td>UOP</td>
                <td>Price Purchase</td>
                <td>Price Satuan</td>
                <td>Price Sale</td>
                <td>Unit Conversion</td>
                <td>Satuan Beli</td>
                <td>Satuan Jual</td>
                <td>Profit</td>
                <td>Total Profit</td>
                <td>Store No</td>
                <td>Bin Location</td>
                <td>Stock</td>
                <td>Harga 1</td>
                <td>Harga 2</td>
                <td>Harga 3</td>
                <td>Satuan 1</td>
                <td>Satuan 1</td>
                <td>Satuan 1</td>
                <td>Margin</td>
                <td colspan="2">Opsi</td>

            </tr>
            <tr>
                <?php 
                include "Koneksi.php";
                if(isset($_GET['cari'])){
                    $pencarian = $_GET['cari'];
                    $query = "select * from Tabel_Barang where Item_Name like '%$pencarian%' ";
                }
                else{$query = "Select * from Tabel_Barang";}
                $data = mysqli_query($koneksi,$query);
                while($tampil = mysqli_fetch_array($data)){
                    echo"
                    <tr>
                        <td>$tampil[Id_Produk] </td>
                        <td>$tampil[Item_Name] </td>
                        <td>$tampil[Description] </td>
                        <td>$tampil[Supplier] </td>
                        <td>$tampil[UOP] </td>
                        <td>$tampil[Price_Purchase] </td>
                        <td>$tampil[Price_Satuan] </td>
                        <td>$tampil[Price_Sale] </td>
                        <td>$tampil[Unit_Conversion] </td>
                        <td>$tampil[Satuan_Beli] </td>
                        <td>$tampil[Satuan_Jual] </td>
                        <td>$tampil[Profit] </td>
                        <td>$tampil[Total_Profit] </td>
                        <td>$tampil[Store_No] </td>
                        <td>$tampil[Bin_Location] </td>
                        <td>$tampil[Stock] </td>
                        <td>$tampil[Harga_1] </td>
                        <td>$tampil[Harga_2] </td>
                        <td>$tampil[Harga_3] </td>
                        <td>$tampil[Jumlah_1] </td>
                        <td>$tampil[Jumlah_2] </td>
                        <td>$tampil[Jumlah_3] </td>
                        <td>$tampil[Margin] </td>
                        <td><a href='Tambah_Jual.php?kode=$tampil[Id_Produk]'> Tambah  </a></td>
                    </tr>
                    ";
                }

                ?>
            </tr>
        </table>
    </center>
        <br>
        <center>
        <table id="Table2">
            <tr>
                <td>id produk</td>
                <td>Item Name</td>
                <td>Banyak</td>
                <td>Harga</td>
                <td>Total</td>
                <td>Opsi</td>

            </tr>
            <tr>
                <?php 
                $query = "Select * from pembelian_sementara";
                $data = mysqli_query($koneksi,$query);
                while($tampil = mysqli_fetch_array($data)){
                    echo"
                    <tr>
                        <td>$tampil[Id_Produk] </td>
                        <td>$tampil[Item_Name] </td>
                        <td>$tampil[Banyak] </td>
                        <td>$tampil[Harga] </td>
                        <td>$tampil[Total] </td>
                        <td><a href='?kode=$tampil[Id_Produk]'>Hapus</a></td>
                    </tr>
                    ";
                }

                ?>
            </tr>
        </table>
        <?php
        if(isset($_GET['kode'])){
           mysqli_query($koneksi,"delete from pembelian_sementara where Id_Produk='$_GET[kode]'"); 
           echo "Data Telah Dihapus";
           echo "<meta http-equiv=refresh content=2;URL='Jual.php'>";
        }
        ?>
    </center>
        <br>
        <center>
            <div class="flex-container">
                <a href="Menu.php"> <div class="button3"><h2>Kembali</h2></div></a>
            </div>
        </center>
    <br>
</body>
</html>