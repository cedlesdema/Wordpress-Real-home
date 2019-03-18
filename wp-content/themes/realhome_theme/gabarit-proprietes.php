<?php /* Template Name: Gabarit propriétes */?>

<?php get_header();?>

<div class="container-title">
    <div class="title-c">
        <h1><?php the_title() ?></h1>
        <hr class="hr2" width="60" size="5" align="center" color ="red">
    </div>
</div>

<?php $Posts = get_the_ID()?>
<?php
$args = [
	'post_type' => 'proprietes',
	'posts_per_page' => 9,
	'orderby' => 'ASC',
	'post__not_in' => [ $Posts ],
];
?>

<!--The Query-->

<?php $the_query = new WP_Query($args);?>
<div class="container-1">

<!--The Loop-->

<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php
		$category = get_the_category();
		echo $category[0]->name;
		?>
    <div class="card">
        <a href="<?php the_permalink() ?>">
        <img class="card-img-top" <?php the_post_thumbnail('image') ?>
        <div class="card-body">
            <h5 class="card-title"><?php the_field('titre') ?></h5>
            <p class="card-text-city"><?php the_field('ville') ?></p>
            <p class="card-text-price"><?php the_field('prix') ?></p>
            <div class="card-footer">
                <p><?php the_field('taille_m²') ?></p>
                <p><?php the_field('chambres') ?></p>
                <p><?php the_field('comodites') ?></p>
            </div>
        </div>
        </a>
    </div>
	<?php endwhile; ?>
<?php endif; ?>

</div>
<?php get_footer(); ?>

