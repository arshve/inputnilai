<?php
include"../../../koneksi/koneksi.php";
$select = "select * from user where level='dosen'";
$hasil = mysql_query($select);
    if (isset($_GET['cari'])){
        $nama=$_GET['cari'];
        $pilih="select * from user where nama like '%$nama%'";
        $hasil=mysql_query($pilih);
    }
    else{
        $hasil=mysql_query($select);
    }
?>
<h3 align="center">Data Dosen</h3>
<!--form pencarian-->
<div id="wrapform">
<div class="row">
    <form action="" method="get">
    <div class="col-lg-12">
        <div class="input-group">
            <input type="hidden" name="module" value="list_dos">
            <input type="text" class="form-control" name="cari" placeholder="ketikan nama dosen..."/>
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
    <th style="text-align:center;" width="50">No</th>
	<th style="text-align:center;" width="auto">NIP</th>
	<th style="text-align:center;" width="auto">Nama Dosen</th>
	<th style="text-align:center;" width="auto">Username</th>
	<th style="text-align:center;" width="auto">Password</th>
    <th style="text-align:center;" colspan="2">Ubah Hak Akses</th>
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
	<td><?php echo $buff['no'];?></td>
	<td><?php echo $buff['nama'];?></td>
	<td><?php echo $buff['username'];?></td>
	<td><?php echo $buff['password'];?></td>
    <td align="center" width="80"><a href="?module=set_admin&id=<?php echo $buff['no'];?>">
	<input class="btn btn-default" type="submit" value="Admin"/></a></td>
    <td align="center" width="80"><a href="?module=set_mhs&id=<?php echo $buff['id'];?>">
	<input class="btn btn-default" type="submit" value="Mahasiswa"/></a></td>
    <td align="center" width="50"><a href="?module=edit_dos&id=<?php echo $buff['id'];?>">
        <button class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button></a>
    </td>
	<td align="center" width="50"><a href="?module=del_dos&id=<?php echo $buff['id'];?>">
        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
    </td>
</tr>
</tbody><?php $no++;};?>
</table>
<!--End table dosen-->