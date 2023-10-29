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
                $query = mysqli_query($koneksi,"Select * from Tabel_Barang");
                while($tampil = mysqli_fetch_array($query)){
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
                        <td><a href='?kode=$tampil[Id_Produk]'>Hapus</a></td>
                        <td><a href='Ubah_Barang.php?kode=$tampil[Id_Produk]'> Ubah </a></td>
                    </tr>
                    ";
                }

                ?>
            </tr>
        </table>
        <?php
        if(isset($_GET['kode'])){
           mysqli_query($koneksi,"delete from Tabel_Barang where Id_Produk='$_GET[kode]'"); 
           echo "Data Telah Dihapus";
           echo "<meta http-equiv=refresh content=2;URL='View_Data.php'>";
        }
        ?>
        <br>
        <center>
            <div class="flex-container">
                <button id="Buka"><h2>Tambahkan Barang</h2></button>
            </div>
        </center>
        <center>
            <div class="flex-container">
                <button id="Tutup" class="modal"><h2>Tutup Tambah Barang</h2></button>
            </div>
        </center>
        <br>
        <div id="MyModal" class="modal">
        <form action="" method="post">
            <table>
            <tr>
                    <td colspan="2">Tambahkan Barang</td> 
                </tr>
                <tr>
                    <td>Item Name</td>
                    <td><input type="text" name=Item_Name></td>  
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name=Description></td>  
                </tr>                <tr>
                    <td>Supplier</td>
                    <td><input type="text" name=Supplier></td>  
                </tr>                <tr>
                    <td>UOP</td>
                    <td><input type="text" name=UOP></td>  
                </tr>                <tr>
                    <td>Price Purchase</td>
                    <td><input type="text" name=Price_Purchase></td>  
                </tr>                <tr>
                    <td>Price Satuan</td>
                    <td><input type="text" name=Price_Satuan></td>  
                </tr>                <tr>
                    <td>Price_Sale</td>
                    <td><input type="text" name=Price_Sale></td>  
                </tr>                <tr>
                    <td>Unit Conversion</td>
                    <td><input type="text" name=Unit_Conversion></td>  
                </tr>                <tr>
                    <td>Satuan Beli</td>
                    <td><input type="text" name=Satuan_Beli></td>  
                </tr>                <tr>
                    <td>Satuan_Jual</td>
                    <td><input type="text" name=Satuan_Jual></td>  
                </tr>                <tr>
                    <td>Profit</td>
                    <td><input type="text" name=Profit></td>  
                </tr>                <tr>
                    <td>Total Profit</td>
                    <td><input type="text" name=Total_Profit></td>  
                </tr>                <tr>
                    <td>Store No</td>
                    <td><input type="text" name=Store_No></td>  
                </tr>                <tr>
                    <td>Bin Location</td>
                    <td><input type="text" name=Bin_Location></td>  
                </tr>                <tr>
                    <td>Stock</td>
                    <td><input type="text" name=Stock></td>  
                </tr>                <tr>
                    <td>Harga 1</td>
                    <td><input type="text" name=Harga_1></td>  
                </tr>                <tr>
                    <td>Harga 2</td>
                    <td><input type="text" name=Harga_2></td>  
                </tr>                <tr>
                    <td>Harga 3</td>
                    <td><input type="text" name=Harga_3></td>  
                </tr>                <tr>
                    <td>Jumlah 1</td>
                    <td><input type="text" name=Jumlah_1></td>  
                </tr>                <tr>
                    <td>Jumlah 2</td>
                    <td><input type="text" name=Jumlah_2></td>  
                </tr>                <tr>
                    <td>Jumlah 3</td>
                    <td><input type="text" name=Jumlah_3></td>  
                </tr>                <tr>
                    <td>Margin</td>
                    <td><input type="text" name=Margin></td>  
                <tr>
                    <td colspan="2"><input type="submit" value="simpan" name="proses"></td>  
                </tr>
            </table>
        </form>
        <?php 
        include "Koneksi.php";
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"insert into tabel_barang set
            Item_Name = '$_POST[Item_Name]',
            Description = '$_POST[Description]',
            Supplier = '$_POST[Supplier]',
            UOP = '$_POST[UOP]',
            Price_Purchase ='$_POST[Price_Purchase]',
            Price_Satuan ='$_POST[Price_Satuan]',
            Price_Sale = '$_POST[Price_Sale]',
            Unit_Conversion = '$_POST[Unit_Conversion]',
            Satuan_Beli = '$_POST[Satuan_Beli]',
            Satuan_Jual = '$_POST[Satuan_Jual]',
            Profit = '$_POST[Profit]',
            Total_Profit = '$_POST[Total_Profit]',
            Store_No ='$_POST[Store_No]',
            Bin_Location ='$_POST[Bin_Location]',
            Stock = '$_POST[Stock]',
            Harga_1 = '$_POST[Harga_1]',
            Harga_2 = '$_POST[Harga_2]',
            Harga_3 = '$_POST[Harga_3]',
            Jumlah_1 = '$_POST[Jumlah_1]',
            Jumlah_2 = '$_POST[Jumlah_2]',
            Jumlah_3 = '$_POST[Jumlah_3]',
            Margin = '$_POST[Margin]'
            ");
            echo "Data Telah Disimpan!";
            echo "<meta http-equiv=refresh content=2;URL='View_Data.php'>";
        }
        ?>
        </div>
        <script>
        var modal = document.getElementById("MyModal")
        var buka = document.getElementById("Buka")
        var tutup = document.getElementById("Tutup")

        buka.onclick =function(){
            modal.style.display = "block"
            buka.style.display = "none"
            tutup.style.display = "block"
        }
        tutup.onclick =function(){
            modal.style.display = "none"
            buka.style.display = "block"
            tutup.style.display = "none"
        }
        </script>


        <br>
        <center>
            <div class="flex-container">
                <a href="Master_Data_1.php"> <div class="button3"><h2>Kembali</h2></div></a>
            </div>
        </center>
    </center>
    <br>
</body>
</html>