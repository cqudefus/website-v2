<?php $data = $template_data['hostin'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing hostin</h2>
<form >
	<label style='text-transform: capitalize;'>hosting title</label><br>
	<input type="text" readonly class="form-control" name="hosting_title" value="<?=$data["hosting_title"]?>"><br>
	<label style='text-transform: capitalize;'>hosting description</label><br>
	<input type="text" readonly class="form-control" name="hosting_description" value="<?=$data["hosting_description"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/hosting" class="btn btn-primary">Go Back</a>
</form>