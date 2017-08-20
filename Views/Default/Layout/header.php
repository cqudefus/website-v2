<!DOCTYPE html>
<html lang="en">
<head>
    <?= $meta_data ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= empty($title) ? 'BerkaPhp' : ucfirst($title) ?></title>

    <link rel="stylesheet" type="text/css" href="/Views/Default/Layout/css/bootstrap.min.css">
    <link href="/berkaPhp/template/Utility/Style/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- main css file -->
    <link rel="stylesheet" href="Views/Default/Layout/css/custom/style.css">
	   <!-- responsive css file -->
    <link rel="stylesheet" href="Views/Default/Layout/css/responsive/responsive.css">
    <link rel="stylesheet" href="Views/Default/Layout/css/custom.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="Views/Default/Layout/img/favicon.png">

</head>
<body class="home">
  <div class="preloader">
      <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
      </div>
  </div>

<!-- ======= 1.01 Header Area ====== -->
<header>
  <div class="headerTopArea">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-5 col-sm-3 col-xs-5">
  			<div class="langOpt">
  				</div>
  			</div>
  			<div class="col-md-7 col-sm-9 col-xs-7">
  				<ul class="topInfo">
  					<li class="email"><a href=""><i class="icofont icofont-ui-v-card"></i>support@cqudefus.com</a></li>
  				<li class="clientAreaLi"><span><i class="icofont icofont-user-alt-3"></i>Client area</span></li>
  				</ul>
  				<div class="clientLogin">
  					<form action="login.php" method="post">
  						<div class="closeBtn"><i class="icofont icofont-close"></i></div>
  						<div class="h5">sign in</div>
  						<div class="userName"><input name="userName" placeholder="Username" type="text"></div>
  						<div class="password"><input name="password" placeholder="Password" type="password"></div>
  						<input type="submit" value="sign in">
  						<div class="h5">Forgot Passsword? <a href="#">Click here</a></div>
  						<div class="logBtm">
  							<div class="h5">Don’t have an account yet?</div>
  							<a href="#" class="signUp">Click here to sign up.</a>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <div class="headerBottomArea">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3 col-sm-3 col-xs-9">
  				<a href="#" class="logo"><img src="Views/Default/Layout/img/logo.png" alt=""></a>
  			</div>
  			<div class="col-md-8 menuCol col-sm-9 col-xs-9">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  					<span class="sr-only"></span>
  					<i class="fa fa-navicon"></i>
  				</button>
  			</div>
  				<nav id="navbar" class="collapse navbar-collapse">
  					<ul id="nav">
  						<li class="current-menu-item">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
  					  <li>
                <a href="#">Hosting</a>
              </li>
  					  <li>
                <a href="support.html">Development</a>
              </li>
						<li class="dropdown-megamenu"><a href="#">Services</a>
							<ul class="mega-menu clearfix">
  							<li class="mMenuCol">
  								<ul class="menuRow">
  									<li><a href="#">Brand Image</a></li>
  									<li><a href="#">Social Media</a></li>
  								</ul>
  								<ul class="menuRow">
  									<li><a href="#">Development</a></li>
                    <li><a href="#">Website Maintanance</a></li>
  								</ul>
  							</li>
								<li class="mMenuCol">
  								<ul class="menuRow">
  									<li><a href="#">Hosting</a></li>
  									<li><a href="#">Domain Search</a></li>
  								</ul>
  								<ul class="menuRow">
											<li><a href="#">Content Creation</a></li>
											<li><a href="#">Brand Identity</a></li>
  								</ul>
								</li>
								<li class="mMenuCol">
									<div class="menuDiscount">
										<div class="discountImg"><img src="Views/Default/Layout/img/icon/menu-img.png" alt=""></div>
										<span>10% discount on</span>
										<div class="h3">any hosting</div>
										<a href="#">Try it now!</a>
									</div>
								</li>
							</ul>
						</li>
  					<li>
              <a href="#">Blog</a>
  					</li>
  						<li><a href="contact.html">Contact</a></li>
  					</ul>
  				</nav>
  			</div>
  	   </div>
  	</div>
  </div>
</header>
<!-- ======= /1.01 Header Area ====== -->
