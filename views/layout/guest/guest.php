<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">

        <title>Peejay | Portfolio</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link class="pj-custom-css" rel="stylesheet" type="text/css" href="assets/css/custom-green.css">
		<link class="pj-custom-css" rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body>
        <header class="pj-header navbar-fixed-top">	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a class="pj-brand navbar-brand">MY<span class="">PORTFOLIO</span></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pj-nav-menu-container" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse" id="pj-nav-menu-container">
							<ul class="pj-nav-menu nav navbar-nav navbar-right">
								<a section-target="#pj-1st-section" class="active"><li class="active">HOME</li></a>
								<a section-target="#pj-2nd-section"><li>ABOUT</li></a>
								<a section-target="#pj-3rd-section"><li>SKILLS</li></a>
								<a section-target="#pj-4th-section"><li>PORTFOLIO</li></a>
								<a section-target="#pj-5th-section"><li>CONTACT</li></a>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</header>
        {% block content %} {% endblock %}
		{% block modal %}{% endblock %}
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/addons/jquery/circle-progress.min.js"></script>
		<script type="text/javascript" src="assets/js/custom.js"></script>
	
	</body>
	{% block script %} {% endblock %}
</html>