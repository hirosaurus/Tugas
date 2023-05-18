<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika2');
$cari = "select * from buku";
$hasil_cari = mysqli_query($conn, $cari);
?>
<html>
	<head>
		<title>View Data Barang</title>
	</head>				
	<body>
		<h3>DATA BARANG</h3>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Kode Buku</th>
				<th>Nama Buku</th>
				<th>Kode Jenis</th>
				<th>Action</th>
			</tr>
			<?php
                if(mysqli_num_rows($hasil_cari) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($hasil_cari)) {
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['kode_buku'].'</td>';
                        echo '<td>'.$data['nama_buku'].'</td>';
                        echo '<td>'.$data['kode_jenis'].'</td>';
                        echo '<td><a href="edit_barang.php?kode_buku='.$data['kode_buku'].'">Edit</a> | <a href="delete_barang.php?kode_buku='.$data['kode_buku'].'" onClick="return confirm(\'Anda yakin akan menghapus data?\')">Delete</a></td>';
                        echo '</tr>';
                        $no++;
                    }
                } else {
                    echo '<tr><td colspan="5">Tidak ada data</td></tr>';
                }
?>
		</table>
		<h4><a href="form.php">Kembali</a></h4>
	</body>
</html>
