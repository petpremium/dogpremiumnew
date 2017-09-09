<?php
/*
Template Name: Politica de Cambios
*/
?>

<?php get_header(); ?>
	<div class="container">
		<!-- Inicio Loop -->
		<?php while(have_posts()) : the_post(); ?>
			<div class="condicionesPoliticas">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
		<!-- Final loop -->
	</div>
<?php get_footer(); ?>