<?php $blog = $template_data['blog'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>id</th>
				<th style='text-transform: capitalize;'>blog title</th>
				<th style='text-transform: capitalize;'>blog date</th>
				<th style='text-transform: capitalize;'>blog author</th>
				<th style='text-transform: capitalize;'>blog post</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($blog as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["id"]?></td>
					<td data-limit-char="20"><?=$data["blog_title"]?></td>
					<td data-limit-char="20"><?=$data["blog_date"]?></td>
					<td data-limit-char="20"><?=$data["blog_author"]?></td>
					<td data-limit-char="20"><?=$data["blog_post"]?></td>
					
					<td>
						<a href="/blog/edit/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/blog/delete/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/blog/view/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">View</button>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<script>
	$app.initList(); 
</script>

