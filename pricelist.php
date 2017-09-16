<?php
include("head.php");
?>
<h2 style="color: white; text-align: center;">Create new Pricelist</h2>
<div class="container-fluid">
	<form class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="control-label"></label>
			<div class="col-sm-offset-2 col-sm-8">
				<input type="text" name="type" class="form-control" id="type"
					   placeholder="Type">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label"></label>
			<div class="col-sm-8">
				<input type="text" name="price" class="form-control" id="price"
					   placeholder="Price">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label"></label>
			<div class="col-sm-8">
				<input type="text" name="unit" class="form-control" id="unit"
					   placeholder="Unit">
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