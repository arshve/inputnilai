<?php
include"../../../koneksi/koneksi.php";
$hasil = mysql_query("select * from nilai where id='$_GET[id]'");
while($buff = mysql_fetch_array($hasil)){
?>

<div id="wrappage">
<div class="panel panel-default">
	<div class="panel-heading">Input Nilai</div>
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="?module=add_nilai_proc" method="post">
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama Anda</label>
				<div class="col-sm-8">
					<select class="form-control">          							 
	                	<option value=""><-- Pilih --></option>				  
						<?php
							$dosen = mysql_query("SELECT * FROM user where level='dosen'");				
							while ($data = mysql_fetch_array($dosen)){
						?>
	                    	<option value=""><?php echo "$data[no] - $data[nama]" ?></option>
						<?php						
							};						
						?>
					</select>
				</div>
				<br><br>
				<label class="col-sm-4 control-label">Nama Mahasiswa</label>
				<div class="col-sm-8">
					<select name="nama_nilai" class="form-control">          							 
	                	<option value=""><-- Pilih --></option>				  
						<?php
							$mahasiswa = mysql_query("SELECT * FROM user WHERE level='mahasiswa'");				
							while ($data3 = mysql_fetch_array($mahasiswa)){
						?>
	                    	<option value="<?php echo "$data3[no]" ?>"><?php echo "$data3[no] - $data3[nama]" ?></option>
						<?php						
							};						
						?>
					</select>
				</div>
				<br><br>
				<label class="col-sm-4 control-label">Mata Kuliah</label>
				<div class="col-sm-8">
					<select name="nama_matkul" class="form-control">          							 
	                	<option value=""><-- Pilih --></option>				  
						<?php
							$matkul = mysql_query("SELECT * FROM matkul");				
							while ($data2 = mysql_fetch_array($matkul)){
						?>
	                    	<option value="<?php echo "$data2[id_matkul]" ?>"><?php echo "$data2[id_matkul] - $data2[nama_matkul]" ?></option>
						<?php						
							};						
						?>
					</select>
				</div>
				<br><br>
				<label class="col-sm-4 control-label">Formatif</label>
				<div class="row">
				  <div class="col-lg-2">
				    <div class="input-group">
				      <span class="input-group-addon">%</span>
				      <input name="formatif_perc" type="text" class="form-control" aria-label="Text input with checkbox" value="<?php echo $buff['formatif_perc'];?>">
				    </div>
				  </div>
				  <div class="col-lg-2">
				    <div class="input-group">
				      <input name="formatif" type="text" class="form-control" aria-label="Text input with radio button" value="<?php echo $buff['formatif'];?>">
				    </div>
				  </div>
				</div>
				<br>
				<label class="col-sm-4 control-label">UTS</label>
				<div class="row">
				  <div class="col-lg-2">
				    <div class="input-group">
				      <span class="input-group-addon">%</span>
				      <input name="uts_perc" type="text" class="form-control" aria-label="Text input with checkbox" value="<?php echo $buff['uts_perc'];?>">
				    </div>
				  </div>
				  <div class="col-lg-2">
				    <div class="input-group">
				      <input name="uts" type="text" class="form-control" aria-label="Text input with radio button" value="<?php echo $buff['uts'];?>">
				    </div>
				  </div>
				</div>
				<br>
				<label class="col-sm-4 control-label">UAS</label>
				<div class="row">
				  <div class="col-lg-2">
				    <div class="input-group">
				      <span class="input-group-addon">%</span>
				      <input name="uas_perc" type="text" class="form-control" aria-label="Text input with checkbox" value="<?php echo $buff['uas_perc'];?>">
				    </div>
				  </div>
				  <div class="col-lg-2">
				    <div class="input-group">
				      <input name="uas" type="text" class="form-control" aria-label="Text input with radio button" value="<?php echo $buff['uas'];?>">
				    </div>
				  </div>
				</div>
				<br><br>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Lanjutkan</button>
				</div>
		  	</div>
		</form>
	</div>
</div>
</div>

<?php
	}
?>