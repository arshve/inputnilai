<?php
	include "../../../koneksi/koneksi.php";
	if ($_POST['id'] == "" || $_POST['username'] == "" || $_POST['password'] == "" || $_POST['nama'] == "" || $_POST['level'] == "")
	{
		echo "<script>alert('Anda harus mengisi semua data'); window.location.href='?module=add_admin';</script>";
	}
	else{
		$select = "INSERT INTO user  (no, username, password, nama, level)
				Values ('$_POST[id]', '$_POST[username]','$_POST[password]', '$_POST[nama]', '$_POST[level]')";

		if(mysql_query($select)){
			echo "<script>alert('dosen telah ditambahkan'); window.location.href='?module=home';</script>";
		}else
		{
			echo "<script>alert('Data yang anda input salah, silahkan input ulang'); window.location.href='?module=add_admin';</script>";
		}
	}
?>