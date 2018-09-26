<?php
include"../../../koneksi/koneksi.php";
$query = mysql_query("SELECT user.no, matkul.id_matkul, matkul.nama_matkul, nilai.formatif, nilai.uts, nilai.uas FROM matkul, nilai, user where nilai.nama_matkul=matkul.id_matkul AND user.no=nilai.nama_nilai");
?>
<h3 align="center">List Nilai</h3>
<!--form pencarian-->
<div id="wrapform">
<div class="row">
    <form action="" method="get">
    <div class="col-lg-12">
        <div class="input-group">
            <input type="hidden" name="module" value="home">
            <input type="text" class="form-control" name="cari" placeholder="ketikkan nama mahasiswa..."/>
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
    <th style="text-align:center;" width="20">NO</th>
    <th style="text-align:center;" width="auto">ID Mahasiswa</th>
    <th style="text-align:center;" width="auto">ID Matkul</th>
	<th style="text-align:center;" width="auto">Nama Matkul</th>
	<th style="text-align:center;" width="auto">Formatif</th>
	<th style="text-align:center;" width="auto">UTS</th>
	<th style="text-align:center;" width="auto">UAS</th>
    <th style="text-align:center;" width="auto">Nilai</th>
</tr>
</thead>
<?php
    $no = 1;
    while ( $record = mysql_fetch_array($query)) {
        $rata = ($record['formatif'] + $record['uts'] + $record['uas'])/3;
?>
<tbody >
<tr style="text-align:center;" class="table-striped">
    <td><?php echo $no?></td>
    <td><?php echo $record['no'];?></td>
    <td><?php echo $record['id_matkul'];?></td>
	<td><?php echo $record['nama_matkul'];?></td>
	<td><?php echo $record['formatif'];?></td>
    <td><?php echo $record['uts'];?></td>
    <td><?php echo $record['uas'];?></td>
    <td><?php echo $rata?></td>
</tr>
</tbody>
<?php
    $no++;}
?>
</table>
<!--End table dosen-->