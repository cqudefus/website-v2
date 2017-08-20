<?php $services = $template_data['services'] ?>
<div class="serviceArea secPdng animated">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="sectionTitle">
				<div class="h2">Lots of hosting services in town. <br>Why you should <span>choose us?</span></div>
			</div>
			</div>
		</div>
		<div class="row service">
			<?php foreach ($services as $data  ): ?>
				<div class="col-md-4 col-sm-4">
					<div class="singleService">
						<div class="serviceIcon">
							<img src="<?=$data["service_icon"]?>" alt="">
						</div>
						<div class="serviceContent">
							<span class="h3"><?=$data["service_title"]?></span>
							<p><?=$data["service_description"]?></p>
						</div>
					</div>
				</div>
			<?php endforeach ?>
    </div>
  </div>
</div>
