<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika2');

if(isset($_POST['submit'])) {
    $kode_buku=$_POST['kode_buku'];
    $nama_buku=$_POST['nama_buku'];
    $kode_jenis=$_POST['kode_jenis'];

    if(empty($kode_buku)) {
        echo "kode_buku tidak boleh kosong, diisi dulu";
    } elseif (empty($nama_buku)) {
        echo "nama_buku tidak boleh kosong";
    } else {
        $update = "UPDATE buku SET kode_buku='$kode_buku', nama_buku='$nama_buku', kode_jenis='$kode_jenis' WHERE kode_buku='$kode_buku'";
        mysqli_query($conn, $update);

        echo "
        <script>
        alert('Data berhasil di update');
        document.location.href='form.php';
        </script>";
    }
}

if(isset($_GET['kode_buku'])) {
    $kode_buku = $_GET['kode_buku'];
    $cari = "SELECT * FROM buku WHERE kode_buku = '$kode_buku'";
    $hasil_cari = mysqli_query($conn, $cari);
    $data = mysqli_fetch_array($hasil_cari);

    if($data > 0) {
        ?>
<html>
    <head>
        <title>Data Buku</title>
    </head>                
            <body>
                <h3>FORM Buku</h3>
                <table>
                    <form method="POST" action="update.php">
                    <tr>
                        <td>kode_buku</td>
                        <td>:</td>
                        <td><input type="text" name="kode_buku" size="10" value="<?php echo $data['kode_buku']?>"></td>
                    </tr>
                    <tr>
                        <td>nama_buku</td>
                        <td>:</td>
                        <td><input type="text" name="nama_buku" size="30" value="<?=$data['nama_buku']?>"></td>
                    </tr>
                    <tr>
                        <td width='25%'>Kode Jenis</td>
                        <td width='5%'>:</td>
                        <td width='65%'>
                        <select name = "kode_jenis">
                        <?php
                            $sql = "select * from jenis_buku";
        $retval = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($retval)) {
            echo "<option value='$row[kode_jenis]'>$row[nama_jenis]</option>";
        }
        ?>
                            </select>
                        </td>    
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="UPDATE DATA"></td>
                    </tr>
                    </form>
                </table>
            <?php
    }
}
?>
</body>
</html>
