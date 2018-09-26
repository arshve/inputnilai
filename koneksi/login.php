<?php
session_start();

include"koneksi.php";

	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql=mysql_query("SELECT * From user where username='$username' and password='$password'");

		if (mysql_num_rows($sql) >= 1) {
			$data=mysql_fetch_array($sql);
			$level=$data[5];
				$_SESSION['id']=$data[0];
				$_SESSION['username']=$data[1];
				$_SESSION['password']=$data[2];

			if($level=="admin") {
				echo"<script>alert('Anda Login Sebagai Admin'); window.location.href='../user/admin/index.php'</script>";
			} elseif ($level=="dosen") {
				echo"<script>alert('Anda Login Sebagai Dosen'); window.location.href='../user/dosen/index.php'</script>";
			} elseif ($level=="mahasiswa") {
				echo"<script>alert('Anda Login Sebagai Mahasiswa'); window.location.href='../user/mahasiswa/index.php'</script>";
			} else {
				echo"<script>alert('Login Gagal'); window.location.href='../index.php'</script>";
			}
		}
	}
?>