<?php 
include"../../../koneksi/koneksi.php";
$sql = mysql_query("SELECT COUNT(*) as num FROM user where level='dosen'");
$sql2 = mysql_query("SELECT COUNT(*) as num FROM user where level='mahasiswa'");
$result = mysql_fetch_array($sql);
$result2 = mysql_fetch_array($sql2);
$jml = $result['num'];
$jml2 = $result2['num'];

$q=$_SESSION['id'];
if ($q){


?>
<h2 align="center"> Selamat Datang 
<?php 
$sql2=mysql_query("SELECT * FROM user where id='$q'");
while ($data2=mysql_fetch_array($sql2)){
    echo "$data2[4]";
}
?>  </h2>
<div id="wrappage">
<table align="center" class="table table-bordered">
<thead align="center" style="background:#eee;font-size:14;">
<tr>
    <th style="text-align:center;" width="100">Tabel</th>
	<th style="text-align:center;" width="200">Jumlah Data</th>
	<th style="text-align:center;" colspan="2" width="80">Pilihan</th>
</tr>
</thead>
<tbody >
<tr class="table-striped">
    <td align="center" width="100">Dosen</td>
    <td align="center" width="100"><?php echo $jml?> Data</td>
    <td align="center" width="50"><a href="?module=list_dos"><button class="btn btn-info"><span class="glyphicon glyphicon-zoom-in"></button></a></td>
</tr>
<tr class="table-striped">
    <td align="center" width="100">Mahasiswa</td>
    <td align="center" width="100"><?php echo $jml2?> Data</td>
    <td align="center" width="50"><a href="?module=list_mahasiswa"><button class="btn btn-info" ><span class="glyphicon glyphicon-zoom-in"></button></a></td>
</tr>
</tbody>
</table>
</div>

<?php
}
?>