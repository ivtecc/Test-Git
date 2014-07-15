<?php
$page_title = "Gino Kha";
include('header.php');
?>

	<!-- Side Menu -->
	<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
			<li class="sidebar-brand"><a>Navigation</a>
			</li>
			<li><a href="#top">Home</a>
			</li>
			<li><a href="#about">About</a>
			</li>
			<li><a href="#services">Services</a>
			</li>

			<li><a href="#contact">Contact</a>
			</li>
		</ul>
	</div>
	<!-- /Side Menu -->

	<!-- Full Page Image Header Area -->
	<div id="top" class="header">
		<div class="vert-text">
			<h1>Gino Kha</h1>
			<h3><em>Freelance</em> Web Developer <em>based in Rochester, New York.</em><br/><em>Oh and a </em>Hosting Provider <em>too!</em></h3>

			<p><br/><br/><br/><a href="#contact" class="btn btn-default btn-lg">Contact me</a></p>
		</div>
	</div>
	<!-- /Full Page Image Header Area -->

	<!-- Intro -->
	<div id="about" class="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 ">
					<h2 class="text-center">Freelancer with over 8 years of Design and Development Experience</h2>
					<hr>
					<p class="lead text-center">PSD to HTML, HTML/HTML5, CSS, Javascript, jQuery, PHP, MySQL, APIs, Code Igniter, Wordpress, eCommerce, Social Networking, SEO</p>
					<hr>
					<p>I'm Gino Kha. A Freelance Web Designer and Developer, well mostly a Developer. I currently do Web Development for a living and Absolutely Love it! You can find me Living in the Suburbs of Rochester carrying, my Macbook Air where ever I go.</p>
					<p>I've been working heavily with Wordpress in the past few years. Mostly creating custom WP templates and tailoring custom options, post and pages for each unique project. Making the Wordpress CMS easier to use than ever!</p>
					<p>Also working with Code Igniter to create custom database driven applications. While Utilizing API's from various serivces such as Paypal, Fedex, Bigcommerce & Twillio.</p>
					<p>What's ivtecc? ivtecc is just the name of this server. It's short, easy to remember and has a cool ring to it!<br/>(Derived from Honda's i-Vtec technology.)</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /Intro -->

	<!-- Services -->
	<div id="services" class="services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<h2>My Services</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-md-offset-2 text-center">
					<div class="service-item">
						<i class="service-icon fa fa-edit"></i>
						<h4>Web Development<br/>&nbsp;</h4>
						<p>Need something built from the ground up? From Web sites, Custom Apps, Business Apps to pretty much anything.. Lets talk about it!</p>
					</div>
				</div>
				<div class="col-md-2 text-center">
					<div class="service-item">
						<i class="service-icon fa fa-code"></i>
						<h4>Problem Solving /<br/>Debugging</h4>
						<p>Is something broken? Having IE Issues? Need a project finished?</p>
					</div>
				</div>
				<div class="col-md-2 text-center">
					<div class="service-item">
						<i class="service-icon fa fa-search"></i>
						<h4>SEO & Marketing<br/>&nbsp;</h4>
						<p>Start driving traffic to your web site by ranking better in Google, Yahoo & Bing today!</p>
					</div>
				</div>
				<div class="col-md-2 text-center">
					<div class="service-item">
						<i class="service-icon fa fa-copy"></i>
						<h4>Hosting /<br/>File Server</h4>
						<p>Lots of space and bandwidth, 99% uptime and all the speed that you'll ever need. Let me host your next Website or App today!</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /Services -->

	<!-- Contact -->
	<div id="contact" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 ">
					<h2 class="text-center">Contact Me</h2>
					<hr>
					<p class="lead text-center">Email/Google: <a href="mailto:gino@ivtecc.com">Gino@ivtecc.com</a></p>
					<hr>
					<p class="lead text-center">Phone: <a href="tel:7146989131">(714) 698-9131</a></p>
					<hr>
					
	<!--
					<form class="form-horizontal" role="form">

						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-7">
							<input type="email" class="form-control input-lg" id="inputName" name="fullname" placeholder="Name">
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputEmail" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-7">
							<input type="email" class="form-control input-lg " id="inputEmail" name="email" placeholder="Email">
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputMessage" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-9">
							<textarea class="form-control input-lg" rows="3" name="message" id="message"></textarea>
							</div>
						</div>
	
	
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success btn-lg">Submit</button>
							</div>
						</div>
						</form>
-->
				</div>
			</div>
		</div>
	
	
	</div>
	<!-- /Contact -->

	<!-- Map -->
	<div  class="map">
		<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Rochester,+NY&amp;aq=4&amp;z=6&amp;output=embed"></iframe>
		
		</iframe>
	</div>
	<!-- /Map -->


<?php
include('footer.php');
?>