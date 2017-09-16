<?php
include("head.php");
?>
<h2 style="color: white; text-align: center;">Create new user</h2>
<form class="form-horizontal">
	<div class="form-group">
		<label for="inputEmail3" class="control-label"></label>
		<div class="col-sm-offset-2 col-sm-8">
			<input type="text" name="name" class="form-control" id="name"
				   placeholder="Username">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label"></label>
		<div class="col-sm-8">
			<input type="text" name="phone" class="form-control" id="phone"
				   placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label"></label>
		<div class="col-sm-8">
			<select class="form-control">
				<option name="role">Admin</option>
				<option name="role">User</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label"></label>
		<div class="col-sm-8">
			<input type="hidden" name="reg_date" class="form-control"
				   id="reg_date"
				   value="<?php date_default_timezone_set("Asia/Nicosia");
				   echo(date("Y-m-d h:i:s")); ?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-default">Sign in</button>
		</div>
	</div>
</form>
</div>
</body>
</html>