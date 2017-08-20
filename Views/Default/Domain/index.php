<!-- ======= 2.01 Page Title Area ====== -->

<div class="pageTitleArea animated">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="pageTitle">
					<div class="h2">Search a domain</div>
					<ul class="pageIndicate">
						<li><a href="">home</a></li>
						<li><a href="">domain</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ======= /2.01 Page Title Area ====== -->

<?php $domain = $template_data['domain'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>id</th>
				<th style='text-transform: capitalize;'>domain name</th>
				<th style='text-transform: capitalize;'>domain type</th>
				<th style='text-transform: capitalize;'>domain price</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($domain as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["id"]?></td>
					<td data-limit-char="20"><?=$data["domain_name"]?></td>
					<td data-limit-char="20"><?=$data["domain_type"]?></td>
					<td data-limit-char="20"><?=$data["domain_price"]?></td>

					<td>
						<a href="/domain/edit/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/domain/delete/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/domain/view/<?= $data['id'] ?>">
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
