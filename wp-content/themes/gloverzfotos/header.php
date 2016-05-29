<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

	<!-- site nav -->
      <div class="navbar navbar-fixed-top navbar-inverse header-navigation">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Gloverz <text class="fotos">Fotos</text></a>
          </div>

          <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact Us</a></li>
              <li class="hidden-xs"><a href="#" class="btn btn-booknow">BOOK NOW</a></li>
            </ul> 
          </div>
        </div>
      </div>
      <!-- /site nav -->

      <div class="carousel slide" id="heroCarousel">				
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#heroCarousel"></li>
			<li data-slide-to="1" data-target="#heroCarousel"></li>
			<li data-slide-to="2" data-target="#heroCarousel"></li>
		</ol>

		<div class="carousel-caption">
			<h4>Focus. Capture. Develop.</h4>
			<p>Our passion is seeing people at their best light <text class="hidden-xs"><br></text> and keeping the memories for treasure.</p>
			<div class="row ghost-button-container">
				<div class="col-lg-6">
					<a class="btn btn-gb watch-video">Watch Video</a>
				</div>
				<div class="col-lg-6">
					<a class="btn btn-gb book-now">Book Now</a>
				</div>
			</div>
		</div>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active" id="slide1">
			</div>
			<div class="item" id="slide2">
			</div>
			<div class="item" id="slide3">
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control hidden-xs" data-slide="prev" href="#heroCarousel "><span class="icon-prev"></span></a>
		<a class="right carousel-control hidden-xs" data-slide="next" href="#heroCarousel "><span class="icon-next"></span></a>

	</div>