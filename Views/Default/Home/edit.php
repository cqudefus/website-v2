<?php $data = $template_data['hom'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing hom</h2>
<form method="POST" action="/home/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>heading</label><br>
	<input type="text" class="form-control" name="heading" value="<?=$data["heading"]?>"><br>
	<label style='text-transform: capitalize;'>description</label><br>
	<input type="text" class="form-control" name="description" value="<?=$data["description"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>