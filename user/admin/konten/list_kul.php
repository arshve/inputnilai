<?php
include"../../../koneksi/koneksi.php";
$select = "select * from matkul";
$hasil = mysql_query($select);
    if (isset($_GET['cari'])){
        $nama=$_GET['cari'];
        $pilih="select * from matkul where nama_matkul like '%$nama%'";
        $hasil=mysql_query($pilih);
    }
    else{
        $hasil=mysql_query($select);
    }
?>
<h3 align="center">Data Mata Kuliah</h3>
<!--form pencarian-->
<div id="wrapform">
<div class="row">
    <form action="" method="get">
    <div class="col-lg-12">
        <div class="input-group">
            <input type="hidden" name="module" value="list_kul">
            <input type="text" class="form-control" name="cari" placeholder="ketikan nama matakuliah..."/>
            <span class="input-group-btn">
                <input class="btn btn-default" type="submit" value="cari"/>
            </span>
        </div>
    </div>
    </form>
</div>
</div>
<!--end form pencarian-->
<!--Table dosen-->
<table align="center" class="table table-bordered">
<thead align="center" style="background:#eee;font-size:14;">
<tr>
    <th style="text-align:center;" width="20">No</th>
	<th style="text-align:center;" width="100">ID MatKul</th>
    <th style="text-align:center;" width="100">ID Dosen</th>
	<th style="text-align:center;" width="auto">Nama Mata Kuliah</th>
	<th style="text-align:center;" colspan="2">Aksi</th>
</tr>
</thead>
<?php
    $no = 1;
	while($buff=mysql_fetch_array($hasil)){
?>
<tbody >
<tr class="table-striped">
    <td style="text-align:center;"><?php echo $no?></td>
	<td><?php echo $buff['id_matkul'];?></td>
    <td><?php echo $buff['id_dosen'];?></td>
	<td><?php echo $buff['nama_matkul'];?></td>
    <td align="center" width="50"><a href="?module=edit_kul&id=<?php echo $buff['id'];?>">
        <button class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button></a>
    </td>
	<td align="center" width="50"><a href="?module=del_kul&id=<?php echo $buff['id'];?>">
        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
    </td>
</tr>
</tbody>
    
<?php
	$no++;}
?>
</table>
<!--End table dosen-->