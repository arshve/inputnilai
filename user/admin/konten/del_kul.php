<?php
	include"../../../koneksi/koneksi.php";
	$delete = mysql_query("DELETE FROM matkul WHERE id='$_GET[id]'");
	if($delete){
		echo"<script>alert('Sukses hapus data'); window.location.href='?module=list_kul';</script>";
	}else{
		mysql_error();
	}
?>