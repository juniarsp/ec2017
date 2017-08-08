<?php
//cek dulu apakah parameter kode ada atau tidak
if(isset($_GET['id_ksr'])){
    include "koneksi.php";
    //kalo ada berarti lakukan perintah delete
    $id_ksr = $_GET['id_ksr'];
    $sql = "DELETE FROM kasir WHERE id_ksr='$id_ksr'";
    $kueri = mysql_query($sql);
    if($kueri){
        //kalo deletenya berhasil
        //tampilkan alert dan pindah ke halaman daftar barang
        echo "<script>alert('Data berhasil dihapus');document.location='daftarkasir.php'</script>";
    } else{
        echo "<script>alert('Data Gagal dihapus');document.location='daftarkasir.php'</script>";
    }
} else {
    //kalo gak ada  parameternya
    echo "<script>alert('Kode Belum Dipilih');document.location='daftarkasir.php'</script>";
}
?>