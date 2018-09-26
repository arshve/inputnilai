<?php
	include "../../../koneksi/koneksi.php";

	$q=$_SESSION['id'];
	if ($q){
?>

<div id="wrappage">
<div class="panel panel-default">
	<div class="panel-heading">Input Nilai</div>
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="?module=add_nilai_proc" method="post">
			<div class="form-group">
				<label class="col-sm-4 control-label"><h3><?php  
						$sql=mysql_query("SELECT * FROM user where id='$q'");
						while ($data=mysql_fetch_array($sql)){
						    echo "$data[4]";
						}
						?></h3></label>
	
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
				      <input name="formatif_perc" type="text" class="form-control" aria-label="Text input with checkbox">
				    </div>
				  </div>
				  <div class="col-lg-2">
				    <div class="input-group">
				      <input name="formatif" type="text" class="form-control" aria-label="Text input with radio button">
				    </div>
				  </div>
				</div>
				<br>
				<label class="col-sm-4 control-label">UTS</label>
				<div class="row">
				  <div class="col-lg-2">
				    <div class="input-group">
				      <span class="input-group-addon">%</span>
				      <input name="uts_perc" type="text" class="form-control" aria-label="Text input with checkbox">
				    </div>
				  </div>
				  <div class="col-lg-2">
				    <div class="input-group">
				      <input name="uts" type="text" class="form-control" aria-label="Text input with radio button">
				    </div>
				  </div>
				</div>
				<br>
				<label class="col-sm-4 control-label">UAS</label>
				<div class="row">
				  <div class="col-lg-2">
				    <div class="input-group">
				      <span class="input-group-addon">%</span>
				      <input name="uas_perc" type="text" class="form-control" aria-label="Text input with checkbox">
				    </div>
				  </div>
				  <div class="col-lg-2">
				    <div class="input-group">
				      <input name="uas" type="text" class="form-control" aria-label="Text input with radio button">
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