<?php
session_start();

$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$tgl_beli = $_POST["tanggal"];
$harga = 0;
$harga_peng = 0;
$user = $_SESSION["user"];
$barang = $_POST["barang"];


for ($i=0;$i<count($barang);$i++) { 
    if ($barang[$i] == "Roti")
        $harga += 8000;
    else if ($barang[$i] == "Rokok") 
        $harga += 35000;
    else if ($barang[$i] == "Sabun Mandi")
        $harga += 20000;
    else if ($barang[$i] == "Gelas")
        $harga += 15000;
    else if ($barang[$i] == "Es Cream")
        $harga += 10000;
     else if ($barang[$i] == "Buku")
        $harga += 21000;
}

if($pengiriman == "JNE")
    $harga_peng = 15000;
if($pengiriman == "Tiki")
    $harga_peng = 18500;
if($pengiriman == "J&T")
    $harga_peng = 20000;

function total($a, $b) {
    return $a + $b;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tampilan</title>
    <style type="text/css">
        body   {
        background-color: #e9e9e980;
        width: 50%;
    }
        table {
            background-color:#ffffff;
            margin-left: 60%;
            width: 70%;
            margin-top: 20%;
            border-left: 2px solid black;
            border-right: 2px solid black;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        
        }

    </style>
</head>
<body >
    <table>
        <tr>
            <td><b>Data Pelanggan</b></td>
        </tr>

        <tr >
            <td style="margin-top: 100px;">Nama</td>
            <td>:</td>
            <td><?php echo $user["nama"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Submit</td>
            <td>:</td>
            <td><?php echo $tgl_beli; ?></td>
        </tr>
        <tr valign="top">
            <td>Barang yang dibeli</td>
            <td>:</td>
            <td>
                <?php
                foreach ($barang as $barang_b) {
                    echo $barang_b . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Pengiriman</td>
            <td>:</td>
            <td><?php echo $pengiriman?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo total($harga, $harga_peng); ?></td>
        </tr>
    </table>
</body>
</html>