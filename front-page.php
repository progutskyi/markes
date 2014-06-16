<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brudleyp</title>
    
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
     
     <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />    
  </head>
  
  <body>
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
        		<li><a href="<?php echo get_blog_page_url(); ?>">Aktualnosci</a></li>
        		<li><a href="#">Lokacja</a></li>
        		<li><a href="#">Sugerowana Lista Prezentow</a></li>
        </ul>
		</div>
	</nav>  
  
	<div class="jumbotron jumbotron-override white">
		<div class="container">
			<div class="center-block">
				<h1>Welcome to our awesome wedding! <br><small class="lighter">We love each other so much</small></h1>
			</div>
		</div>			
	</div>
	
	<div class="container">
		<div class="row page-header">
			<div class="col-lg-6">
				<h2>Wanna read the latest news about our wedding?<br>
				<small>Then you should go here!</small></h2>
				<a href="<?php echo get_blog_page_url(); ?>" class="btn btn-danger bnt-lg">Aktualnosci</a>
			</div>
			
			<div class="col-lg-6">
				<img src="http://placehold.it/400x400" alt="" class="img-responsive img-circle pull-right">
			</div>
		</div>
	
		<div class="row page-header">
			<div class="col-lg-6">
				<img src="http://placehold.it/400x400" alt="" class="img-responsive img-circle">
			</div>
			
			<div class="col-lg-6">
				<h2>Wanna know how to get to the place?<br>
				<small>Click here!</small></h2>
				<a href="#" class="btn btn-danger bnt-lg">Lokacja</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<h2>Wann make us awesome  present?<br>
				<small>Just hit this!</small></h2>
				<a href="#" class="btn btn-danger bnt-lg">Prezenty</a>
			</div>		
		
			<div class="col-lg-6">
				<img src="http://placehold.it/400x400" alt="" class="img-responsive img-circle pull-right">
			</div>
		</div>
	</div>
	
	<div class="container-fluid footer">
		<p class="text-centered">Designed by Petro Rogutskyi</p>
	</div>
	
  </body>
</html>