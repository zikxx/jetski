<?php
include("head.php");
$sql = "SELECT * FROM menu";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container-fluid">
	<form class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="control-label">Email</label>
			<div class="col-sm-offset-2 col-sm-8">
				<input type="email" class="form-control" id="inputEmail3"
					   placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" id="inputPassword3"
					   placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" id="inputPassword3"
					   placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" id="inputPassword3"
					   placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
				<div class="checkbox">
					<label> <input type="checkbox"> Remember me
					</label>
				</div>
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