<?php get_header(); ?>
  
	<div class="jumbotron jumbotron-override white">
		<div class="container">
			<h1>Witamy na Brudleyp<br><small class="lighter">Ślubnej stronie Marty i Kostka</small></h1>
		</div>			
	</div>
	
	<div class="container">
		<div class="row page-header">
			<div class="col-lg-6">
				<h2>Aktualności<br>
				<small>Najnowsze informacje, które warto znać</small></h2>
				<a href="<?php echo get_blog_page_url(); ?>" class="btn btn-danger bnt-lg">Zobacz</a>
			</div>
			
			<div class="col-lg-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/news.jpg" alt="" width="400" height="400" class="img-responsive img-circle pull-right">
			</div>
		</div>
	
		<div class="row page-header">
			<div class="col-lg-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/location.jpg" width="400" height="400" alt="" class="img-responsive img-circle">
			</div>
			
			<div class="col-lg-6">
				<h2>Lokalizacja<br>
				<small>Dla każdego kto jeszcze w Promnicach nie był</small></h2>
				<a href="#" class="btn btn-danger bnt-lg">Zobacz</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<h2>Lista prezentów<br>
				<small>gdy nie wiadomo co podarować Młodym</small></h2>
				<a href="#" class="btn btn-danger bnt-lg">Zobacz</a>
			</div>		
		
			<div class="col-lg-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images/presents2.jpg" alt="" class="img-responsive img-circle pull-right">
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>