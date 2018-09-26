<?php
include "../../../koneksi/koneksi.php";
//query for update data in database
 $query = "UPDATE user SET level = 'dosen' WHERE id='$_GET[id]'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    echo"<script>alert('Hak Akses Diubah');window.location.href='?module=home';</script>";
}
?>