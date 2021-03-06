<?php
/* Template Name: Inicio */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'home');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>
<!-- Llamada a los custom loop -->
<div id="seccion-testimonios">	
	<?php 
	//testimonios
	include('modulos/modulo-testimonio/testimonio.php');
	//empresas
	include('modulos/modulo-empresas/empresa.php');
	?>
</div>


</main><!-- #main -->


<?php
get_footer();
