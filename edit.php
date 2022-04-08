<?php 	
include('koneksi.php');
$db = new database();
$Id = $_GET['Id'];
if(! is_null($Id))
{
	$tbl_pendaftaran = $db->get_by_Id($Id);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>p</title>
</head>
<body>
<h3>Update Data Pendaftaran</h3>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id" value="<?php echo $tbl_pendaftaran['Id']; ?>"/>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="Nama" value="<?php echo $tbl_pendaftaran['Nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="Tempat_Lahir" value="<?php echo $tbl_pendaftaran['Tempat_Lahir']; ?>"/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="text" name="Tanggal_Lahir" value="<?php echo $tbl_pendaftaran['Tanggal_Lahir']; ?>"/></td>
	</tr>
	<tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="Warga_Negara" value="<?php echo $tbl_pendaftaran['Warga_Negara']; ?>"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="Alamat" value="<?php echo $tbl_pendaftaran['Alamat']; ?>"/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="Email" value="<?php echo $tbl_pendaftaran['Email']; ?>"/></td>
	</tr>
    <tr>
		<td>No HP</td>
		<td>:</td>
		<td><input type="text" name="No_HP" value="<?php echo $tbl_pendaftaran['No_HP']; ?>"/></td>
	</tr>
    <tr>
		<td>Asal SMP</td>
		<td>:</td>
		<td><input type="text" name="Asal_SMP" value="<?php echo $tbl_pendaftaran['Asal_SMP']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="Nama_Ayah" value="<?php echo $tbl_pendaftaran['Nama_Ayah']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="Nama_Ibu" value="<?php echo $tbl_pendaftaran['Nama_Ibu']; ?>"/></td>
	</tr>
    <tr>
		<td>Penghasilan Ortu</td>
		<td>:</td>
		<td><input type="text" name="Penghasilan_Ortu" value="<?php echo $tbl_pendaftaran['Penghasilan_Ortu']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html> 