<?php get_header(); ?>

<?php $title = get_the_title( get_option('page_for_posts', true ) ); ?>


<?php if (have_posts()): ?>
<div class="container-3">
	<?php while (have_posts()) : the_post(); ?>

        <div>
            <section class="article_infos">

                <div>
                    <img class="une" src="<?php the_post_thumbnail_url('full') ?> " alt="">
                </div>


                <p class="article_date"><?php  the_time('d M Y'); ?></p>
            </section>
        </div>
		<?php the_content(); ?>


	<?php endwhile; ?>
	<?php endif; ?>

</div>
<?php get_footer(); ?>

