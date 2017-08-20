<?php $data = $template_data['domai'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing domai</h2>
<form method="POST" action="/domain/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>domain name</label><br>
	<input type="text" class="form-control" name="domain_name" value="<?=$data["domain_name"]?>"><br>
	<label style='text-transform: capitalize;'>domain type</label><br>
	<input type="text" class="form-control" name="domain_type" value="<?=$data["domain_type"]?>"><br>
	<label style='text-transform: capitalize;'>domain price</label><br>
	<input type="text" class="form-control" name="domain_price" value="<?=$data["domain_price"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>