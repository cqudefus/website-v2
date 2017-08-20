<?php $data = $template_data['service'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing service</h2>
<form >
	<label style='text-transform: capitalize;'>service icon</label><br>
	<input type="text" readonly class="form-control" name="service_icon" value="<?=$data["service_icon"]?>"><br>
	<label style='text-transform: capitalize;'>service title</label><br>
	<input type="text" readonly class="form-control" name="service_title" value="<?=$data["service_title"]?>"><br>
	<label style='text-transform: capitalize;'>service description</label><br>
	<input type="text" readonly class="form-control" name="service_description" value="<?=$data["service_description"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/services" class="btn btn-primary">Go Back</a>
</form>