<?php $data = $template_data['aboou'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing aboou</h2>
<form >
	<label style='text-transform: capitalize;'>about title</label><br>
	<input type="text" readonly class="form-control" name="about_title" value="<?=$data["about_title"]?>"><br>
	<label style='text-transform: capitalize;'>about description</label><br>
	<input type="text" readonly class="form-control" name="about_description" value="<?=$data["about_description"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/aboout" class="btn btn-primary">Go Back</a>
</form>