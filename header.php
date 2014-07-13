<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brudleyp</title>
    
	 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		
     
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
     
    <?php echo wp_head(); ?> 
  </head>
  
  <body>
  
  <div class="container">
<nav class="navbar navbar-default navbar-override" role="navigation">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo bloginfo('url')?>">Brudleyp</a>
    </div>

    <div class="collapse navbar-collapse" id="links">
      <ul class="nav navbar-nav">
        		<li><a href="<?php echo get_blog_page_url(); ?>">Aktualności</a></li>
        		<li><a href="<?php echo get_page_link_by_title('directions') ?>">Lokalizacja</a></li>
        		<li><a href="<?php echo get_page_link_by_title('presents') ?>">Lista prezentów</a></li>
        </ul>
      
    </div>
  </div>
</nav>  
	</div>