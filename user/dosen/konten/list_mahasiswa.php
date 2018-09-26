<?php
include"../../../koneksi/koneksi.php";
$select = "select * from user where level='mahasiswa'";
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
<h3 align="center">Data Mahasiswa</h3>
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
	<th style="text-align:center;" width="5">NIM</th>
	<th style="text-align:center;" width="auto">Nama Mahasiswa</th>
</tr>
</thead>
<?php
    $no = 1;
	while($buff=mysql_fetch_array($hasil)){
?>
<tbody >
<tr style="text-align:center;" class="table-striped">
    <td><?php echo $no?></td>
	<td><?php echo $buff['no'];?></td>
	<td><?php echo $buff['nama'];?></td>
</tr>
</tbody><?php $no++;};?>
</table>
<!--End table dosen-->