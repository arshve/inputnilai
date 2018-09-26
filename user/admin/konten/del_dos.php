<?php
	include"../../../koneksi/koneksi.php";
	$delete = mysql_query("DELETE FROM user WHERE id='$_GET[id]'");
	if($delete){
		echo"<script>alert('Sukses hapus data'); window.location.href='?module=list_dos';</script>";
	}else{
		mysql_error();
	}
?>