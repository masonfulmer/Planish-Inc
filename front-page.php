<?php get_header();?>

<div id="MainCarousel" class="carousel slide" data-ride="#">
	<ol class="carousel-indicators">
		<li data-target="#MainCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#MainCarousel" data-slide-to="1"></li>
		<li data-target="#MainCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block" src="<?php bloginfo('template_directory');?>/images/vacuum-furnace.jpg" alt="first-slide">
			<div class="carousel-caption">
				<h1 class="hero-text">Planish Inc.</h1>
				<p>Professional Engineering Consulting</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block" src="<?php bloginfo('template_directory');?>/images/machinery.jpg" alt="second-slide">
			<div class="carousel-caption">
				<h1 class="hero-text">Planish Inc.</h1>
				<p>Helping small to medium businesses with technical expertise.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block" src="<?php bloginfo('template_directory');?>/images/spiral.jpg" alt="third-slide">
			<div class="carousel-caption">
				<h1 class="hero-text">Planish Inc.</h1>
				<p>We strive for honesty and authenticity in our work. Let us prove it.</p>
			</div>
		</div>
		<a class="carousel-control-prev" href="#MainCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#MainCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div class="container">
<!-- 3 Info Cards -->
	<div class="row section">
		<div class="col-sm-12 col-lg-4 info-card card">
			<i class="fas fa-tools"></i>
			<div class="card-body">
				<h5 class="card-title">What We Do</h5>
				<p class="card-text">Apply engineering expertise, experience and ingenuity to resolve your manufacturing, surface finishing, and materials processing problems.</p>
				<a href="#" class="btn btn-primary">Learn about our services</a>
			</div>
		</div>
		<div class="col-sm-12 col-lg-4 info-card card">
			<i class="fas fa-hands-helping"></i>
			<div class="card-body">
				<h5 class="card-title">Whom We Serve</h5>
				<p class="card-text">We help small to medium size manufacturers who do not have the technical expertise on staff to resolve their problems.</p>
				<a href="#" class="btn btn-primary">Read Testimonials</a>
			</div>
		</div>
		<div class="col-sm-12 col-lg-4 info-card card">
			<i class="fas fa-briefcase"></i>
			<div class="card-body">
				<h5 class="card-title">Our Work</h5>
				<p class="card-text">Check out some of what we do here at Planish Incorporated. We provide information on our projects, services and case studies.</p>
				<a href="#" class="btn btn-primary">See Our Projects</a>
			</div>
		</div>
	</div>
	
<!-- Our Services -->
	<div class="row section">
		<div class="col-sm-12">
			<h4 id="services">Our Services</h4>
		</div>
		<div class="col-sm-12 col-lg-12 info-card card">
			<div class="card-body">
				<h5 class="card-title">Surface Finishing</h5>
				<ul class="list-group list-group-flush">
					<a href="..."><li class="list-group-item">Vibratory Bowl</li></a>
					<a href="..."><li class="list-group-item">Barrel Tumbling</li></a>
					<a href="..."><li class="list-group-item">High Energy</li></a>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-lg-12 info-card card">
			<div class="card-body">
				<h5 class="card-title">Heat Treating</h5>
				<ul class="list-group list-group-flush">
										<a href="..."><li class="list-group-item">Aerospace and Commercial</li></a>
				</ul>
			</div>
		</div>   		
		<div class="col-sm-12 col-lg-12 info-card card">
			<div class="card-body">
				<h5 class="card-title">Materials and Metallurgy</h5>
				<ul class="list-group list-group-flush">
					<a href="..."><li class="list-group-item">Failure Analysis</li></a>
					<a href="..."><li class="list-group-item">Metallography/Composition/Chemistry</li></a>
					<a href="..."><li class="list-group-item">Casting</li></a>
					<a href="..."><li class="list-group-item">Powder Metallurgy</li></a>
				</ul>
			</div>
		</div>   
		<div class="col-sm-12 col-lg-12 info-card card">
			<div class="card-body">
				<h5 class="card-title">Process Optimization Thru</h5>
				<ul class="list-group list-group-flush">
					<a href="..."><li class="list-group-item">Statistical Evaluation of Process Data</li></a>
					<a href="..."><li class="list-group-item">Statistical Process Control (SPC)</li></a>
					<a href="..."><li class="list-group-item">Application of Statistically Designed Experiments (DOE)</li></a>
				</ul>
			</div>
		</div>   
	</div>

<!-- Contact Form -->
	<div class="row section">
		<div class="col-sm-12">
			<h4 id="looking">If you've got a problem</h4>
			<h4 id="contactus">Let us find the solution!</h4>
			<form>
				<div class="form-group">
					<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">*We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<input type="input" class="form-control" id="inputSubject" placeholder="Subject">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="5" id="inputMessage" placeholder="Your message here."></textarea>
				</div>
				<button type="submit" class="btn btn-primary center-block">Submit</button>
			</form>
		</div>
	</div>
	
<!-- Our Mission -->								
	<div class="row section mission-bg">
		<div class="col-sm-12">
			<h4 id="mission">Our Mission</h4>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-7">
		<h5 id="name">Robert Werber, PE</h5>
		<p>Our mission at Planish Inc. is to apply engineering expertise, experience and ingenuity with pride, honesty and authenticity.</p>
		</div>
		<div class="col-sm-6 col-lg-5">
			<img class="profile-pic" src="<?php bloginfo('template_directory');?>/images/robert.png" alt="Robert Werber Professional Engineer">
		</div>
	</div>
</div>

<?php get_footer();?>