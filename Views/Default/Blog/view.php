<?php $data = $template_data['blo'][0]; ?>

<h2 style="margin-top: 0;text-transform: capitalize;">Viewing blo</h2>
<form >
	<label style='text-transform: capitalize;'>blog title</label><br>
	<input type="text" readonly class="form-control" name="blog_title" value="<?=$data["blog_title"]?>"><br>
	<label style='text-transform: capitalize;'>blog date</label><br>
	<input type="text" readonly class="form-control" name="blog_date" value="<?=$data["blog_date"]?>"><br>
	<label style='text-transform: capitalize;'>blog author</label><br>
	<input type="text" readonly class="form-control" name="blog_author" value="<?=$data["blog_author"]?>"><br>
	<label style='text-transform: capitalize;'>blog post</label><br>
	<input type="text" readonly class="form-control" name="blog_post" value="<?=$data["blog_post"]?>"><br>
	
	<input type="hidden" name="id" value="<?=$data['id']?>">
	<a href="/blog" class="btn btn-primary">Go Back</a>
</form>