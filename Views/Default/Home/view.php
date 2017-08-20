<?php $data = $template_data['hom'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing hom</h2>
<form >
	<label style='text-transform: capitalize;'>heading</label><br>
	<input type="text" readonly class="form-control" name="heading" value="<?=$data["heading"]?>"><br>
	<label style='text-transform: capitalize;'>description</label><br>
	<input type="text" readonly class="form-control" name="description" value="<?=$data["description"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/home" class="btn btn-primary">Go Back</a>
</form>