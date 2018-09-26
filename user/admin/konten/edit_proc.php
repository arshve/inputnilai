<?php
	include"../../../koneksi/koneksi.php";
	$update = mysql_query("UPDATE user SET nama='$_POST[nama]',
		username='$_POST[username]', password='$_POST[password]' WHERE id='$_POST[id]'");
	if($update) {
		$sql=mysql_query("SELECT * from user where id='$_POST[id]'");
		$data=mysql_fetch_array($sql);
		$level=$data[5];
		if ($level=='admin') {
			echo"<script>alert('Sukses edit data'); window.location.href='?module=list_admin';</script>";
		} else if ($level=='dosen') {
			echo"<script>alert('Sukses edit data'); window.location.href='?module=list_dos';</script>";
		} else if ($level=='mahasiswa') {
			echo"<script>alert('Sukses edit data'); window.location.href='?module=list_mahasiswa';</script>";
		}
		
	}
?>