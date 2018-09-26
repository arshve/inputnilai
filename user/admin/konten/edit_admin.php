<?php
include"../../../koneksi/koneksi.php";
$hasil = mysql_query("SELECT * from user where id='$_GET[id]'");
while($buff = mysql_fetch_array($hasil)){
?>
<div id="wrappage">
<div class="panel panel-default">
	<div class="panel-heading">Edit Admin</div>
	<div class="panel-body">
		<!--Form edit-->
		<form class="form-horizontal" role="form" action="?module=edit_proc" method="post">
			<input type="hidden" name="id" value="<?php echo $buff['id']?>"/>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" value="<?php echo $buff['nama'];?>">
				</div>
		 	</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Username</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="username" value="<?php echo $buff['username'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
				 	<input type="text" class="form-control" name="password" value="<?php echo $buff['password'];?>">
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