<?php
	include "../../../koneksi/koneksi.php";
?>


<div id="wrappage">
<div class="panel panel-default">
	<div class="panel-heading">Tambah Mata Kuliah</div>
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="?module=add_kul_proc" method="post">
			<div class="form-group">
				<label class="col-sm-4 control-label">ID Mata Kuliah</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="id_matkul" placeholder="TI00X">	
				</div>
		 	</div>
		 	<div class="form-group">
				<label class="col-sm-4 control-label">Dosen Pengajar</label>
				<div class="col-sm-8">
					<select name="dosen" class="form-control">  
						<option  value=""><--Pilih Dosen--></option>
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
					<input type="text" class="form-control" name="nama_matkul" placeholder="Nama Mata Kuliah">
				</div>
		 	</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="reset" class="btn btn-warning">Reset</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
		  	</div>
		</form>
	</div>
</div>
</div>