<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brudleyp</title>
    
		<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">-->
		
		<link rel="stylesheet" href="/brudleyp/wp-content/themes/markes/bootstrap.min.css">

		<link rel="stylesheet" href="/brudleyp/wp-content/themes/markes/bootstrap-theme.min.css">
     
     <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
     
     <?php echo wp_head(); ?> 
  </head>
  
  <body>
  
  <div class="container">
  	<nav class="navbar" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo bloginfo('url')?>">Brudleyp</a>
		</div>	
	
		<div class="container-fluid">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
        		<li><a href="<?php echo get_blog_page_url(); ?>">Aktualnosci</a></li>
        		<li class="active"><a href="<?php echo get_page_link_by_title('directions') ?>">Lokacja</a></li>
        		<li><a href="<?php echo get_page_link_by_title('presents') ?>">Sugerowana Lista Prezentow</a></li>
        </ul>
        </div>
		</div>
	</nav>