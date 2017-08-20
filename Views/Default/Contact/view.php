<?php $data = $template_data['contac'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing contac</h2>
<form >
	<label style='text-transform: capitalize;'>contact number</label><br>
	<input type="text" readonly class="form-control" name="contact_number" value="<?=$data["contact_number"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/contact" class="btn btn-primary">Go Back</a>
</form>