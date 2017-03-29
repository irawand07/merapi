<?php
if(isset($_POST['submit']))
{
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$daya=$_POST['daya'];
$lat=$_POST['lintang'];
$long=$_POST['bujur'];
	if(($nama) && ($alamat) && ($daya) && ($lat) && ($long))
	{
	include "koneksi.php";
	mysqli_query($kon,"insert into merapi(nama,alamat,dayatampung,lintang,bujur) values ('$nama','$alamat','$daya','$lat','$long')") or die ("GAGAL REKAM");
	header("Location:index.php?simpan=ok");
	}
	else
	{
	echo "<script> alert('Isian Data Belum Lengkap')</script>";
	}
}
?>
