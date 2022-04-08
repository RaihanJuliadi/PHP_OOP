<?php 	
include('koneksi.php');
$db = new database();
$tbl_pendaftaran = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<br> <br>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Warga Negara</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Asal SMP</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Penghasilan Ortu</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tbl_pendaftaran as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['Nama']; ?></td>
				<td><?php echo $row['Tempat_Lahir']; ?></td>
				<td><?php echo $row['Tanggal_Lahir']; ?></td>
				<td><?php echo $row['Warga_Negara']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['No_HP']; ?></td>
                <td><?php echo $row['Asal_SMP']; ?></td>
                <td><?php echo $row['Nama_Ayah']; ?></td>
                <td><?php echo $row['Nama_Ibu']; ?></td>
                <td><?php echo $row['Penghasilan_Ortu']; ?></td>

				<td>
					<a href="edit.php?Id=<?php echo $row['Id']; ?>">Update</a>
					<a href="proses_data.php?action=delete&Id=<?php echo $row['Id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html> 