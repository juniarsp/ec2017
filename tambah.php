<!DOCTYPE html>
<head>
    <title>Tambah Data Barang</title>
    <script language="javascript">
        function cekform(){
            //ini untuk ngecek formnya (semua form tidak boleh kosong)
            if(document.frmbarang.txtkode.value==""){
                alert('Kode Barang Harus Diisi');
                document.frmbarang.txtkode.focus();
                return false;
            } else if(document.frmbarang.txtnama.value==""){
                alert('Nama Barang Harus Diisi');
                document.frmbarang.txtnama.focus();
                return false;
            } else if(document.frmbarang.txtharga.value==""){
                alert('Harga Barang Harus Diisi');
                document.frmbarang.txtharga.focus();
                return false;
            } else if(document.frmbarang.txtpersediaan.value==""){
                alert('Persediaan Barang Harus Diisi');
                document.frmbarang.txtpersediaan.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>
<?php
//ini menu yang akan ada di semua halaman
include "menubarang.php";
?>
<form action="" method="post" name="frmbarang" onsubmit="return cekform()">
    <table width="500" border="1">
        <tr>
            <td>Nama Kasir </td>
            <td>
                <select name="txtnm_ksr" type="text" id="txtnm_ksr">
                    <option>pilih</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input name="txttanggal" type="text" id="txttanggal" /></td>
        </tr>
        <tr>
            <td>Barcode </td>
            <td><input name="txtkode" type="text" id="txtkode" /></td>
        </tr>
        <tr>
            <td>Nama Barang </td>
            <td><input name="txtnama" type="text" id="txtnama" /></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input name="txtharga" type="text" id="txtharga" /></td>
        </tr>
        <tr>
            <td>Jumlah di Faktur</td>
            <td><input name="txtpersediaan" type="text" id="txtpersediaan" /></td>
        </tr>
        <tr>
            <td>Jumlah Fisik</td>
            <td><input name="txtjml_fisik" type="text" id="txtjml_fisik" /></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>
                <select name="txtketerangan" type="text" id="txtketerangan">
                    <option>pilih</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input name="tblIsi" type="submit" id="tblIsi" value="Tambah Barang" /></td>
        </tr>
    </table>

</form>
</body>
</html>
<?php
//include file koneksi ke mysql
include "koneksi.php";
//ini kalo tombol submitnya diklik
//perhatikan nama dari tombol tsb (tblIsi)
if(isset($_POST['tblIsi'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $kode = $_POST['txtkode'];
    $tanggal = $_POST['txttanggal'];
    $nama = $_POST['txtnama'];
    $harga = $_POST['txtharga'];
    $persediaan = $_POST['txtpersediaan'];
    $jml_fisik = $_POST['txtjml_fisik'];
    $dff = $_POST['txtdff'];
    $shrnkg = $_POST['txtshrnkg'];
    $keterangan = $_POST['txtketerangan'];
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "INSERT INTO barang VALUES('$kode','$tanggal','$nama','$harga','$persediaan','$jml_fisik','$dff','$shrnkg','$keterangan')";
    //jalankan kuerynya
    $kueri = mysql_query($sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($kueri){
        //ini kalo TRUE
        //tampilin alert pake javascript aja deh
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
        //ini kalo FALSE
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        //tampilkan pesan error mysqlnya
        echo mysql_error();
    }
}
?>