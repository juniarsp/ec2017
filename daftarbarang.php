<!DOCTYPE html>
<head>
    <title>Daftar Barang</title>
</head>

<body>
<?php
include "menubarang.php";
?>
<table width="519" border="1">
    <caption align="top">
        Daftar Barang
    </caption>
    <tr>
        <th width="25" scope="col">No</th>
        <th width="103" scope="col">Kode Barang </th>
        <th width="128" scope="col">Nama Barang </th>
        <th width="60" scope="col">Harga</th>
        <th width="81" scope="col">Persediaan</th>
        <th width="82" scope="col">Action Edit</th>
        <th width="82" scope="col">Action Delete</th>
    </tr>
    <?php
    //siapkan query untuk mengmbil semua data barang yang ada
    include "koneksi.php";
    $sql = "SELECT * FROM barang";
    $kueri = mysql_query($sql);
    //karena datanya lebih dari 1 record maka gunakan while
    //semua data disimpan dalam array
    //loopnr untuk menampilkan data barang
    $no = 1;
    while($data = mysql_fetch_array($kueri)){
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php //tampilin data dari database
                //$data adalah nama array yg kita buat
                // kodebarang adalah nama field yang ada di tabel
                echo $data['kodebarang']?></td>
            <td><?php echo $data['namabarang']?></td>
            <td><?php echo $data['harga'];?></td>
            <td><?php echo $data['persediaan']?></td>
            <td><!-- buat link untuk edit dan delete dan berikan parameter dgn nama "kode"--><a href="editbarang.php?kode=<?php echo $data['kodebarang']?>">Edit</a> </td><td><a href="delete.php?kode=<?php echo $data['kodebarang']?>" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
        <?php
        $no++;}
    ?>
</table>
</body>
</html>