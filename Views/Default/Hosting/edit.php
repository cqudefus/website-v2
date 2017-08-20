<?php $data = $template_data['hostin'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing hostin</h2>
<form method="POST" action="/hosting/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>hosting title</label><br>
	<input type="text" class="form-control" name="hosting_title" value="<?=$data["hosting_title"]?>"><br>
	<label style='text-transform: capitalize;'>hosting description</label><br>
	<input type="text" class="form-control" name="hosting_description" value="<?=$data["hosting_description"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>