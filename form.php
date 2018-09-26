<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belanja</title>
    <style type="text/css">
    body   {
        background-color: #e9e9e980;
        width: 50%;
    }
        form   {
            margin-left: 75%;
            width: 50%;
            background-color:#ffffff;
            margin-top: 5%;
        }
    </style>
</head>
<body>
    <form action="proses.php" method="post">
        <table align="center">
            <tr valign="top">
                <br>
                <center><h2>Aplikasi Pesanan</h2></center>
                <hr style="width: 30%">
                <td>Daftar Belanja</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="barang[]" value="Roti">Roti<br>
                    <input type="checkbox" name="barang[]" value="Sabun Mandi">Sabun Mandi<br>
                    <input type="checkbox" name="barang[]" value="Rokok">Rokok<br>
                    <input type="checkbox" name="barang[]" value="Gelas">Gelas<br>
                    <input type="checkbox" name="barang[]" value="Es Cream">Es Cream<br>   
                    <input type="checkbox" name="barang[]" value="Buku">Buku
                </td>
            </tr>
            <tr>
                <td>Jenis Pengiriman</td>
                <td>:</td>
                <td>
                    <input type="radio" name="pengiriman" value="JNE">JNE <br>
                    <input type="radio" name="pengiriman" value="Wahana">Wahana <br>
                    <input type="radio" name="pengiriman" value="J&T">J&T <br>
                    <input type="radio" name="pengiriman" value="Wahana">Wahana
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">
                <td colspan="3"><input type="submit" value="Beli"></td>
            </tr>
        </table>
        <br>
    </form>     
</body>
</html>