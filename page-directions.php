<?php get_header(); ?>

	<div class="jumbotron white bg-darkred2">
		<div class="container">
			<h1>Lokalizacja<br>
			<small class="white">Dla każdego kto jeszcze w Promnicach nie był</small></h1>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			
 				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   
   			<?php the_content(); ?>

 				<?php endwhile; else: ?>

 				<?php endif; ?>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>