<?php $data = $template_data['aboou'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing aboou</h2>
<form method="POST" action="/aboout/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>about title</label><br>
	<input type="text" class="form-control" name="about_title" value="<?=$data["about_title"]?>"><br>
	<label style='text-transform: capitalize;'>about description</label><br>
	<input type="text" class="form-control" name="about_description" value="<?=$data["about_description"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>