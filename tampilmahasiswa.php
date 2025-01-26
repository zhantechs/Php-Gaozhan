<html>
<head>
<title> Data Mahasiswa </title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskel = $_POST['jeniskel'];
$pekerjaan = $_POST['pekerjaan'];
$hobi1 = isset($_POST['hobi1']) ? $_POST['hobi1'] : "";
$hobi2 = isset($_POST['hobi2']) ? $_POST['hobi2'] : "";
$hobi3 = isset($_POST['hobi3']) ? $_POST['hobi3'] : "";
?>
<table border=1 bgcolor="Cyan">
<tr>
<td colspan=2 align="center"><b>Data Mahasiswa</b></td>
</tr>
<tr>
<td>Nama</td><td><?php echo $nama; ?></td>
</tr>
<td>Alamat</td><td><?php echo $alamat; ?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $jeniskel; ?></td>
</tr>
<td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td>
</tr>
<td>Hobi</td>
<td>
<?php
$hobi = array_filter([$hobi1, $hobi2, $hobi3]);
echo !empty($hobi) ? implode(", ", $hobi) : "Tidak ada hobi yang dipilih";
?>
</td>
</tr>
</table>
<a href="forminputmahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>
