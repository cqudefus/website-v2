<?php $data = $template_data['domai'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing domai</h2>
<form >
	<label style='text-transform: capitalize;'>domain name</label><br>
	<input type="text" readonly class="form-control" name="domain_name" value="<?=$data["domain_name"]?>"><br>
	<label style='text-transform: capitalize;'>domain type</label><br>
	<input type="text" readonly class="form-control" name="domain_type" value="<?=$data["domain_type"]?>"><br>
	<label style='text-transform: capitalize;'>domain price</label><br>
	<input type="text" readonly class="form-control" name="domain_price" value="<?=$data["domain_price"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/domain" class="btn btn-primary">Go Back</a>
</form>