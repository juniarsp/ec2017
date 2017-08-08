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
            <td>ID Kasir</td>
            <td><input name="txtnik" type="text" id="txtnik" /></td>
        </tr>
        <tr>
            <td>Nama Kasir</td>
            <td><input name="txtnm_ksr" type="text" id="txtnm_ksr" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input name="tblIsi" type="submit" id="tblIsi" value="Tambah" /></td>
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
    $id_ksrr = $_POST['txtid_ksr'];
    $nik = $_POST['txtnik'];
    $nm_ksr = $_POST['txtnm_ksr'];

    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "INSERT INTO kasir VALUES('$id_ksrr','$nik','$nm_ksr')";
    //jalankan kuerynya
    $kueri = mysql_query($sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($kueri){
        //ini kalo TRUE
        //tampilin alert pake javascript aja deh
        echo "<script>alert('Data berhasil dimasukkan ke database')</script>";
    } else {
        //ini kalo FALSE
        echo "<script>alert('Data gagal dimasukkan ke database')</script>";
        //tampilkan pesan error mysqlnya
        echo mysql_error();
    }
}
?>