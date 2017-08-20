<!-- ======= 2.01 Page Title Area ====== -->

<div class="pageTitleArea animated">
 <div class="container">
	 <div class="row">
		 <div class="col-md-12">
			 <div class="pageTitle">
				 <div class="h2">About Us</div>
				 <ul class="pageIndicate">
					 <li><a href="">home</a></li>
					 <li><a href="">about</a></li>
				 </ul>
			 </div>
		 </div>
	 </div>
 </div>
</div>

<!-- ======= /2.01 Page Title Area ====== -->

<!-- ======= 2.02 Page About Area ====== -->

<div class="aboutArea animated">
 <div class="container">
   <div class="row">
     <div class="col-md-6 col-sm-6">
       <div class="aboutContent">
       <div class="aboutCell">
         <h2>Welcome to the board. <br>Meet with the Spark Team.</h2>
         <div class="aboutTxt">
           <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse  <br>molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero  <br>eros et accumsan et iusto odio dignissim qui blandit praesent luptatum  <br>zzril delenit augue duis dolore te feugait nulla facilisi.</p>
           <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imper  <br>diet doming id quod mazim placerat facer possim assum.</p>
         </div>
       </div>
       </div>
     </div>
   </div>
 </div>
 <div class="aboutImg">
   <img src="Views/Default/Layout/img/about01.jpg" alt="">
 </div>
</div>

<!-- ======= /2.02 Page About Area ====== -->

<!-- ======= 2.03 Page Service Area ====== -->
<div class="aboutServiceArea secPdng">
 <div class="container animated">
   <div class="row">
     <div class="col-md-12">
       <div class="sectionTitle">
         <div class="h2">We are commited with our services. <br>We are offering great services for customers.</div>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-md-3 col-sm-6">
       <div class="singleAboutService">
         <div class="aServiceIcon">
           <img src="Views/Default/Layout/img/icon/about-server1.png" alt="">
         </div>
         <div class="aServiceContent">
           <div class="aServiceTitle h4">Domain Service</div>
           <div class="aServiceTxt">
             <p>Typi non habent claritatem <br>insitam; est usus legentis.</p>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-3 col-sm-6">
       <div class="singleAboutService">
         <div class="aServiceIcon">
           <img src="Views/Default/Layout/img/icon/about-server2.png" alt="">
         </div>
         <div class="aServiceContent">
           <div class="aServiceTitle h4">Domain Service</div>
           <div class="aServiceTxt">
             <p>Typi non habent claritatem <br>insitam; est usus legentis.</p>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-3 col-sm-6">
       <div class="singleAboutService">
         <div class="aServiceIcon">
           <img src="Views/Default/Layout/img/icon/about-server3.png" alt="">
         </div>
         <div class="aServiceContent">
           <div class="aServiceTitle h4">Domain Service</div>
           <div class="aServiceTxt">
             <p>Typi non habent claritatem <br>insitam; est usus legentis.</p>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-3 col-sm-6">
       <div class="singleAboutService">
         <div class="aServiceIcon">
           <img src="Views/Default/Layout/img/icon/about-server4.png" alt="">
         </div>
         <div class="aServiceContent">
           <div class="aServiceTitle h4">Domain Service</div>
           <div class="aServiceTxt">
             <p>Typi non habent claritatem <br>insitam; est usus legentis.</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>


<?php $aboout = $template_data['about'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>id</th>
				<th style='text-transform: capitalize;'>about title</th>
				<th style='text-transform: capitalize;'>about description</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($aboout as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["id"]?></td>
					<td data-limit-char="20"><?=$data["about_title"]?></td>
					<td data-limit-char="20"><?=$data["about_description"]?></td>

					<td>
						<a href="/about/edit/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/about/delete/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/about/view/<?= $data['id'] ?>">
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
