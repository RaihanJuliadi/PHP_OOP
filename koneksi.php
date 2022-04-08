<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "php_oop";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tbl_pendaftaran");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function tambah_data($Nama,$Tempat_Lahir,$Tanggal_Lahir,$Warga_Negara,$Alamat,$Email,$No_HP,$Asal_SMP,$Nama_Ayah,$Nama_Ibu,$Penghasilan_Ortu)
	{
		mysqli_query($this->koneksi,"insert into tbl_pendaftaran values ('','$Nama','$Tempat_Lahir','$Tanggal_Lahir','$Warga_Negara','$Alamat','$Email','$No_HP','$Asal_SMP','$Nama_Ayah','$Nama_Ibu','$Penghasilan_Ortu')");
	}

    function get_by_Id($Id)
	{
		$query = mysqli_query($this->koneksi,"select * from tbl_pendaftaran where Id='$Id'");
		return $query->fetch_array();
	}

    function update_data($Nama,$Tempat_Lahir,$Tanggal_Lahir,$Warga_Negara,$Alamat,$Email,$No_HP,$Asal_SMP,$Nama_Ayah,$Nama_Ibu,$Penghasilan_Ortu)
	{
		$query = mysqli_query($this->koneksi,"update tbl_pendaftaran set Nama='$Nama',Tempat_Lahir='$Tempat_Lahir',Tanggal_Lahir='$Tanggal_lahir',Warga_Negara='$Warga_Negara', Alamat='$Alamat',Email='$Email',No_HP='$No_HP',Asal_SMP='$Asal_SMP',Nama_Ayah='$Nama_Ayah',Nama_Ibu='$Nama_Ibu',Penghasilan_Ortu='$Penghasilan_Ortu' where Id='$Id'");
	}

    function delete_data($Id)
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_pendaftaran where Id='$Id'");
	}
}
?> 