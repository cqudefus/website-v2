<h2 style="margin-top: 0;text-transform: capitalize;">New service</h2>
<form method="POST" action="/services/add">
	<label style='text-transform: capitalize;'>id</label><br>
	<input type='text' class='form-control' name='id' placeholder='id'><br>
	<label style='text-transform: capitalize;'>service icon</label><br>
	<input type='text' class='form-control' name='service_icon' placeholder='service icon'><br>
	<label style='text-transform: capitalize;'>service title</label><br>
	<input type='text' class='form-control' name='service_title' placeholder='service title'><br>
	<label style='text-transform: capitalize;'>service description</label><br>
	<input type='text' class='form-control' name='service_description' placeholder='service description'><br>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>