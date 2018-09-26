<?php
include"../../../koneksi/koneksi.php";
$hasil = mysql_query("select * from matkul where id='$_GET[id]'");
while($buff = mysql_fetch_array($hasil)){
?>
<div id="wrappage">
<div class="panel panel-default">
	<div class="panel-heading">Edit Mata Kuliah</div>
	<div class="panel-body">
		<!--Form edit-->
		<form class="form-horizontal" role="form" action="?module=edit_kul_proc" method="post">
			<input type="hidden" name="id" value="<?php echo $buff['id']?>"/>
			<div class="form-group">
				<label class="col-sm-4 control-label">ID Mata Kuliah</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="id_matkul" value="<?php echo $buff['id_matkul'];?>">
				</div>
		 	</div>
		 	<div class="form-group">
				<label class="col-sm-4 control-label">Dosen Pengajar</label>
				<div class="col-sm-8">
					<select id="dos" name="dosen" class="form-control">  
						<option id="dosd" value=""><--Pilih Dosen--></option>
						<?php
							$dosen = mysql_query("SELECT * FROM user where level='dosen'");				
								while ($data = mysql_fetch_array($dosen)) {
						?>
			                <option value="<?php echo "$data[no]" ?>"><?php echo "$data[no] - $data[nama]" ?></option>
						<?php						
							};						
						?>
				</select>
			</div>
			<br><br>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama Mata Kuliah</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama_matkul" value="<?php echo $buff['nama_matkul'];?>">
				</div>
		 	</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="reset" class="btn btn-warning">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
		  	</div>
		</form>
		<!--End Form edit-->
	</div>
</div>
</div>
<?php
}
?>