<!-- ======= 2.01 Page Title Area ====== -->

<div class="pageTitleArea animated">
 <div class="container">
	 <div class="row">
		 <div class="col-md-12">
			 <div class="pageTitle">
				 <div class="h2">Contact Us</div>
				 <ul class="pageIndicate">
					 <li><a href="">home</a></li>
					 <li><a href="">contact</a></li>
				 </ul>
			 </div>
		 </div>
	 </div>
 </div>
</div>

<!-- ======= /2.01 Page Title Area ====== -->

<div class="contactArea secPdng animated">
<div class="container">
 <div class="row">
	 <div class="col-md-12">
		 <div class="contactTxt">
			 <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros <br>et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
		 </div>
	 </div>
 </div>
 <div class="row">
	 <div class="col-md-6">
		 <form id="ajax-contact" action="mail.php" method="post" class="contactForm">
			 <div class="contactInput">
				 <input id="name" name="name" type="text" placeholder="Your name*">
			 </div>
			 <div class="contactInput">
				 <input id="email" name="email" type="email" placeholder="Your email*">
			 </div>
			 <div class="contactInput">
				 <input id="phoneNo" name="phoneNo" type="text" placeholder="Phone number*">
			 </div>
			 <div class="contactSelect">
				 <select name="country" id="country">
					 <option value="">Country</option>
					 <option value="uk">United Kingdom</option>
					 <option value="us">United Stats</option>
					 <option value="bd">Bangladesh</option>
					 <option value="ast">Austrelia</option>
					 <option value="india">India</option>
				 </select>
			 </div>
			 <div class="contactMsg">
				 <textarea id="contactMsg" name="contactMsg" placeholder="Type your messege"></textarea>
			 </div>
			 <div class="contactSubmit">
				 <input id="submit" name="submit" type="submit" value="Send us message">
			 </div>
			 <div id="form-messages"></div>
		 </form>
	 </div>
	 <div class="col-md-6">
		 <div class="contactInfoCell">
			 <div class="singleInfo">
				 <div class="h4">Call us</div>
				 <div class="singleContactInfo"><span>USA:</span> <a href="tel:+ 021-5432-145">+ 021-5432-145</a></div>
				 <div class="singleContactInfo"><span>NON-USA:</span> <a href="tel:+ 021-5432-145">+ 021-5432-145</a></div>
			 </div>
			 <div class="singleInfo">
				 <div class="h4">Email</div>
				 <div class="singleContactInfo"><span>Product support:</span> <a href="#">email@sitename.com</a></div>
				 <div class="singleContactInfo"><span>Customer support</span>  <a href="#">support@sitename.com</a></div>
			 </div>
		 </div>
	 </div>
 </div>
</div>
</div>

<div class="googleMapArea animated">
 <div id="googleMap"></div>
</div>


<?php $contact = $template_data['contact'] ?>
<br>
<br>
<div class="table-responsive">
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th style='text-transform: capitalize;'>id</th>
				<th style='text-transform: capitalize;'>contact number</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($contact as $data  ): ?>
				<tr>
					<td data-limit-char="20"><?=$data["id"]?></td>
					<td data-limit-char="20"><?=$data["contact_number"]?></td>

					<td>
						<a href="/contact/edit/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Edite</button>
						</a>
						<a href="/contact/delete/<?= $data['id'] ?>">
							<button type="button" class="btn btn-default">Delete</button>
						</a>
						<a href="/contact/view/<?= $data['id'] ?>">
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
