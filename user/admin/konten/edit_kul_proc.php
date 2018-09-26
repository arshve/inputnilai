<?php
	include"../../../koneksi/koneksi.php";
	$update = mysql_query("UPDATE matkul SET id_matkul='$_POST[id_matkul]', id_dosen='$_POST[dosen]',nama_matkul='$_POST[nama_matkul]' WHERE id='$_POST[id]'");
	if($update){
		echo"<script>alert('Sukses edit data'); window.location.href='?module=list_kul';</script>";
	}
?>