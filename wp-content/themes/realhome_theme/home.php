<?php get_header(); ?>
<?php
$page_title = get_the_title(get_option('page_for_posts', true)); ?>
<h1 class="actualites_title">Nos <?php echo $page_title ?></h1>



<?php if (have_posts()) : ?>
    <div class="container-4">
		<?php while (have_posts()) : the_post(); ?>

                    <section class="article-actu">
                        <h2><?php the_title() ?></h2>
						<?php the_post_thumbnail() ?>
						<?php the_content() ?>

                        <a href="<?php echo get_permalink(); ?>" class="button1">Lire la suite</a>

                    </section>
				<?php endwhile; ?>
			<?php endif; ?>
        <nav>

			    <?php if ( !function_exists('dynamic_sidebar' ) || !dynamic_sidebar('sidebar')) : ?>
			    <?php endif;?>

        </nav>
    </div>

<?php get_footer(); ?>
