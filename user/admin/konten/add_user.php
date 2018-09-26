<?php
	include "../../../koneksi/koneksi.php";
?>
<div id="wrappage">
<div class="panel panel-default">
	<div class="panel-heading">Tambah User</div>
	<div class="panel-body">
		<!--Form Login-->
		<form class="form-horizontal" role="form" action="?module=add_user_proc" method="post">
			<div class="form-group">
				<label class="col-sm-4 control-label">ID</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="id" placeholder="ADM000X">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Username</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
				 	<input type="text" class="form-control" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
				</div>
		 	</div>
		 	<label class="col-sm-4 control-label">Level</label>
				<div class="col-sm-8">
					<select name="level" class="form-control">          							 
	                	<option value=""><-- Pilih --></option>				  
						<?php
							$level = mysql_query("SELECT level FROM user");				
							while ($data = mysql_fetch_array($level)){
						?>
	                    	<option value="<?php echo "$data[level]" ?>"><?php echo "$data[level]" ?></option>
						<?php						
							};						
						?>
					</select>
				</div>
		    <br><br>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="reset" class="btn btn-warning">Reset</button>
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
		  	</div>
		</form>
		<!--End Form Login-->
	</div>
</div>
</div>