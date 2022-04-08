<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['Nama'],$_POST['Tempat_Lahir'],$_POST['Tanggal_Lahir'],$_POST['Warga_Negara'],$_POST['Alamat'],$_POST['Email'],$_POST['No_HP'],$_POST['Asal_SMP'],$_POST['Nama_Ayah'],$_POST['Nama_Ibu'],$_POST['Penghasilan_Ortu']);
	header('location:tampil_data.php');
}
elseif($action == "update")
{
	$koneksi->update_data($_POST['Nama'],$_POST['Tempat_Lahir'],$_POST['Tanggal_Lahir'],$_POST['Warga_Negara'],$_POST['Alamat'],$_POST['Email'],$_POST['No_HP'],$_POST['Asal_SMP'],$_POST['Nama_Ayah'],$_POST['Nama_Ibu'],$_POST['Penghasilan_Ortu'],$_POST['id']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$Id = $_GET['Id'];
	$koneksi->delete_data($Id);
	header('location:tampil_data.php');
}
?> 