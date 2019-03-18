<?php /* Template Name: Gabarit agents */?>

<?php get_header();?>

<span class="tag">Notre <b>équipe</b> </span>

<?php
$args = array(
	'post_type' => 'agents',
	'posts_per_page' => 4,
	'order' => 'ASC',

);
?>

<!--The Query-->

<?php $the_query = new WP_Query($args);?>


<div class="container-2">



	<!--The Loop-->

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="card-agent">
				<img class="card-img-top-agent" <?php the_post_thumbnail() ?>
				<div class="card-footer-agent">
					<p><?php the_field('nom') ?></p>
					<p><?php the_field('metier') ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>

