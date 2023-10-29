<!DOCTYPE html>
<head>

<link rel="stylesheet" href="styles.css">

</head>
<html>
<?php 
    include "Koneksi.php";
    include "Session.php";
    $sql=mysqli_query($koneksi,"select * from Tabel_Barang where Id_Produk='$_GET[kode]'");
    $data=mysqli_fetch_array($sql)
    ?>
<body bgcolor="white" align="center">
    <center>
        <div class="Header">
        <br>
        <h1>Selamat Datang, <?php echo $_SESSION['Username'] ?></h1>
        </div>
    </center>
    <center>
    <br>
        <form action="" method="post">
            <table>
            <tr>
                    <td colspan="2">Ubah Data Barang untuk ID :<?php echo $data['Id_Produk']; ?> </td> 
                </tr>
                <tr>
                    <td>Item Name</td>
                    <td><input type="text" name=Item_Name value="<?php echo $data['Item_Name']; ?>"></td>  
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name=Description value="<?php echo $data['Description']; ?>"></td>  
                </tr>                <tr>
                    <td>Supplier</td>
                    <td><input type="text" name=Supplier value="<?php echo $data['Supplier']; ?>"></td>  
                </tr>                <tr>
                    <td>UOP</td>
                    <td><input type="text" name=UOP value="<?php echo $data['UOP']; ?>"></td>  
                </tr>                <tr>
                    <td>Price Purchase</td>
                    <td><input type="text" name=Price_Purchase value="<?php echo $data['Price_Purchase']; ?>"></td>  
                </tr>                <tr>
                    <td>Price Satuan</td>
                    <td><input type="text" name=Price_Satuan value="<?php echo $data['Price_Satuan']; ?>"></td>  
                </tr>                <tr>
                    <td>Price_Sale</td>
                    <td><input type="text" name=Price_Sale value="<?php echo $data['Price_Sale']; ?>"></td>  
                </tr>                <tr>
                    <td>Unit Conversion</td>
                    <td><input type="text" name=Unit_Conversion value="<?php echo $data['Unit_Conversion']; ?>"></td>  
                </tr>                <tr>
                    <td>Satuan Beli</td>
                    <td><input type="text" name=Satuan_Beli value="<?php echo $data['Satuan_Beli']; ?>"></td>  
                </tr>                <tr>
                    <td>Satuan_Jual</td>
                    <td><input type="text" name=Satuan_Jual value="<?php echo $data['Satuan_Jual']; ?>"></td>  
                </tr>                <tr>
                    <td>Profit</td>
                    <td><input type="text" name=Profit value="<?php echo $data['Profit']; ?>"></td>  
                </tr>                <tr>
                    <td>Total Profit</td>
                    <td><input type="text" name=Total_Profit value="<?php echo $data['Total_Profit']; ?>"></td>  
                </tr>                <tr>
                    <td>Store No</td>
                    <td><input type="text" name=Store_No value="<?php echo $data['Store_No']; ?>"></td>  
                </tr>                <tr>
                    <td>Bin Location</td>
                    <td><input type="text" name=Bin_Location value="<?php echo $data['Bin_Location']; ?>"></td>  
                </tr>                <tr>
                    <td>Stock</td>
                    <td><input type="text" name=Stock value="<?php echo $data['Stock']; ?>"></td>  
                </tr>                <tr>
                    <td>Harga 1</td>
                    <td><input type="text" name=Harga_1 value="<?php echo $data['Harga_1']; ?>"></td>  
                </tr>                <tr>
                    <td>Harga 2</td>
                    <td><input type="text" name=Harga_2 value="<?php echo $data['Harga_2']; ?>"></td>  
                </tr>                <tr>
                    <td>Harga 3</td>
                    <td><input type="text" name=Harga_3 value="<?php echo $data['Harga_3']; ?>"></td>  
                </tr>                <tr>
                    <td>Jumlah 1</td>
                    <td><input type="text" name=Jumlah_1 value="<?php echo $data['Jumlah_1']; ?>"></td>  
                </tr>                <tr>
                    <td>Jumlah 2</td>
                    <td><input type="text" name=Jumlah_2 value="<?php echo $data['Jumlah_2']; ?>"></td>  
                </tr>                <tr>
                    <td>Jumlah 3</td>
                    <td><input type="text" name=Jumlah_3 value="<?php echo $data['Jumlah_3']; ?>"></td>  
                </tr>                <tr>
                    <td>Margin</td>
                    <td><input type="text" name=Margin value="<?php echo $data['Margin']; ?>"></td>  
                <tr>
                    <td colspan="2"><input type="submit" value="simpan" name="proses"></td>  
                </tr>
            </table>
        </form>
        <?php 
        include "Koneksi.php";
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"update tabel_barang set
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
            where Id_Produk = '$_GET[kode]'
            ");
            echo "Data Telah Di Ubah!";
            echo "<meta http-equiv=refresh content=1;URL='View_Data.php'>";
        }
        ?>
        <br>
    </center>
    <br>
</body>
</html>