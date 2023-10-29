<!DOCTYPE html>
<head>

<link rel="stylesheet" href="styles.css">

</head>
<html>
<?php 
    include "Koneksi.php";
    include "Session.php";
    $sql1=mysqli_query($koneksi,"select * from Tabel_Barang where Id_Produk='$_GET[kode]'");
    $sql2=mysqli_query($koneksi,"select * from Pembelian_sementara ");
    $data=mysqli_fetch_array($sql1)
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
                    <td colspan="2">Beli Barang : <?php echo $data['Item_Name']; ?> </td> 
                </tr>
                <tr>
                    <td colspan="2">Id Produk : <?php echo $data['Id_Produk']; ?> </td> 
                </tr>
                                <tr>
                    <td>Berapa Banyak?</td>
                    <td><input type="text" name=Banyak value="0"></td>  
                </tr>                <tr>
                    <td>Pilih Harga</td>
                <td>
                    <input type="radio"  name="Harga" value="<?php echo $data['Harga_1'] ?>" id="pilih">
                    <label>Harga 1 = <?php echo "$data[Harga_1] untuk pembelian minimal sebanyak $data[Jumlah_1]";?></label><br>
                    <input type="radio"  name="Harga" value="<?php echo $data['Harga_2'] ?>" id="pilih1">
                    <label>Harga 2 = <?php echo "$data[Harga_2] untuk pembelian minimal sebanyak $data[Jumlah_2]";?> </label><br>
                    <input type="radio"  name="Harga" value="<?php echo $data['Harga_3'] ?>" id="pilih2">
                    <label>Harga 3 = <?php echo "$data[Harga_3] untuk pembelian minimal sebanyak $data[Jumlah_3]";?> </label><br>
                    <input type="radio" name="Harga" value="" checked="checked" id="lain">
                    <label>Harga Costum</label>
                    <input type="text" id="lainnya" name="Harga_Lain" value="" style="visibility:hidden">    
                </td>  
 
                </tr>    <tr>
                    <td colspan="2"><input type="submit" value="simpan" name="proses" ></td>  
                </tr>
            </table>
        </form>
        <?php 
        include "Koneksi.php";
        if(isset($_POST['proses'])){
            if ($_POST['Harga'] == ""){
                $_POST['Harga'] = $_POST['Harga_Lain'];
            }
            else{
                $_POST['Harga'] == $_POST['Harga'];
            }
            $total = $_POST['Harga'] * $_POST['Banyak'];
            $id = $data['Id_Produk'];
            $nama = $data['Item_Name'];
            mysqli_query($koneksi,"insert into pembelian_sementara set
            Id_Produk = '$id',
            Item_Name = '$nama',
            Banyak = '$_POST[Banyak]',
            Harga = '$_POST[Harga]',
            Total = '$total'
            ");
            
            $koneksi->close();
            echo "Data Telah Disimpan!";
            //echo "<meta http-equiv=refresh content=1;URL='Jual.php'>";
        }?>
        <br>
    </center>

    <script>
        var text = document.getElementById("lainnya")
        var lain =document.getElementById("lain")
        var pilih =document.getElementById("pilih")
        var pilih1 =document.getElementById("pilih1")
        var pilih2 =document.getElementById("pilih2")


        lain.onclick =function(){
            text.style.visibility = "visible"
        }
        pilih.onclick =function(){
            text.style.visibility = "hidden"
        }
        pilih1.onclick =function(){
            text.style.visibility = "hidden"
        }
        pilih2.onclick =function(){
            text.style.visibility = "hidden"
        }        

        </script>

    <br>
</body>
</html>