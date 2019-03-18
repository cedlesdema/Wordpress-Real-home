<?php get_header(); ?>

<?php $title = get_the_title( get_option('page_for_posts', true ) ); ?>


<?php if (have_posts()): ?>
	<div class="container-3">
		<?php while (have_posts()) : the_post(); ?>

			<div class="single-article">
				<h2><?php the_title() ?></h2>
				<?php the_post_thumbnail() ?>
				<?php the_content() ?>
			</div>




		<?php endwhile; ?>
	<?php endif; ?>

		<div class="sidebar">
			<aside>
				<?php if ( !function_exists('dynamic_sidebar' ) || !dynamic_sidebar('sidebar')) : ?>
				<?php endif;?>
			</aside>
		</div>
	</div>

    <div>
        <?php comments_template() ?>
    </div>

<?php get_footer(); ?>