<?php
	include "../../../koneksi/koneksi.php";
	if($_POST['nama_nilai'] == "" || $_POST['nama_matkul'] == "" || $_POST['formatif_perc'] == "" || $_POST['formatif'] == "" || $_POST['uts_perc'] == "" || $_POST['uts'] == "" || $_POST['uas_perc'] == "" || $_POST['uas'] == "")
	{
		echo "<script>alert('Anda harus mengisi semua data'); window.location.href='?module=add_nilai';</script>";
	}
	
	else{
		$select = "INSERT INTO nilai (nama_nilai, nama_matkul, formatif, uts, uas, formatif_perc, uts_perc, uas_perc) Values ('$_POST[nama_nilai]','$_POST[nama_matkul]','$_POST[formatif]','$_POST[uts]','$_POST[uas]','$_POST[formatif_perc]','$_POST[uts_perc]','$_POST[uas_perc]')";
		if(mysql_query($select)){
			echo "<script>alert('Mata kuliah telah ditambahkan'); window.location.href='?module=list_nilai';</script>";
		}else
		{
			echo "<script>alert('Data yang anda input salah, silahkan input ulang'); window.location.href='?module=add_nilai';</script>";
		}
	}
?>