<?php $data = $template_data['blo'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Editing blo</h2>
<form method="POST" action="/blog/edit/<?=$data['id']?>">
	<label style='text-transform: capitalize;'>blog title</label><br>
	<input type="text" class="form-control" name="blog_title" value="<?=$data["blog_title"]?>"><br>
	<label style='text-transform: capitalize;'>blog date</label><br>
	<input type="text" class="form-control" name="blog_date" value="<?=$data["blog_date"]?>"><br>
	<label style='text-transform: capitalize;'>blog author</label><br>
	<input type="text" class="form-control" name="blog_author" value="<?=$data["blog_author"]?>"><br>
	<label style='text-transform: capitalize;'>blog post</label><br>
	<input type="text" class="form-control" name="blog_post" value="<?=$data["blog_post"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<button type="submit" class="btn btn-primary">Save</button>
</form>