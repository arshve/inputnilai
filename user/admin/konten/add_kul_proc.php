<?php
	include "../../../koneksi/koneksi.php";
	if($_POST['id_matkul'] == "" || $_POST['dosen'] == "" || $_POST['nama_matkul'] == "")
	{
		echo "<script>alert('Anda harus mengisi semua data'); window.location.href='?module=add_kul';</script>";
	}
	else{
		$select = "INSERT INTO matkul (id_matkul, id_dosen, nama_matkul) Values ('$_POST[id_matkul]','$_POST[dosen]','$_POST[nama_matkul]')";
		if(mysql_query($select)){
			echo "<script>alert('Mata kuliah telah ditambahkan'); window.location.href='?module=list_kul';</script>";
		}else
		{
			echo "<script>alert('Data yang anda input salah, silahkan input ulang'); window.location.href='?module=add_kul';</script>";
		}
	}
?>