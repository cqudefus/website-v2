<?php $data = $template_data['contac'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing contac</h2>
<form method="POST" action="/contact/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>contact number</label><br>
	<input type="text" class="form-control" name="contact_number" value="<?=$data["contact_number"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>