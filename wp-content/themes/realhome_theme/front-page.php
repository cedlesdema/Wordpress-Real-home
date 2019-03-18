<?php get_header(); ?>


    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) :the_post(); ?>
                    <div>
                        <img class="img-home" src=" <?php echo bloginfo( 'template_url' ); ?>/images/images-home/home.png" alt="image">
                        <div class="title-home"><h1>REAL HOME L’AGENCE QUI VOUS ACCOMPAGNE DANS VOTRE PROJET</h1></div>
                    </div>

            <!--Titre + description-->

                    <div class="mid-page">
                        <h2><?php the_field( 'mid_title' ); ?>
                            <hr class="hr-title" width="30" size="5" align="right" color ="black">

                        </h2>
                        <?php the_field( 'mid_description' ); ?>
                    </div>

            <!-- Répéteur row-->

                    <div class="bottom-page">
                        <?php while ( have_rows( 'bottomrow' ) ) : the_row(); ?>
                            <div class="bottom-content">
                                <i><?php the_sub_field( 'logo' ); ?></i>
                                <h3><?php the_sub_field( 'titre' ); ?></h3>
                                <?php the_sub_field( 'texte' ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>

            <!--Titre "Nos propriétes"-->

            <div class="container-title">
                <div class="title-c">
                    <h2><?php the_field( 'title-c' ); ?></h2>
                <hr class="hr2" width="60" size="5" align="center" color ="red">
                <p class="paragraph-c"><?php the_field( 'paragraph-c' ); ?></p>
                </div>
            </div>


            <!--Nos propriétés cartes-->

        <?php endwhile; ?>
    <?php endif; ?>

<?php
$args = array(
	'post_type' => 'proprietes',
	'posts_per_page' => 6,

	'orderby' => 'ASC',

);
?>

<!--The Query-->

<?php $the_query = new WP_Query($args);?>
<div class="container-1">

    <!--The Loop-->

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


            <div class="card">
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
            </div>

		<?php endwhile; ?>
	<?php endif; ?>
</div>

<div class="container-btn">
    <a href="http://php/realhome/nos-propietes/" class="button">Voir toutes</a>
</div>

<?php $Posts = get_the_ID()?>
<?php
$slug = "117-2";
$args = array(
    'name' => $slug,
	'post_type' => 'agents',
	'posts_per_page' => 1,
	'id' => 'ASC',
	'post__not_in' => array($Posts),
);
?>

<!--The Query-->

<?php $the_query = new WP_Query($args);?>


<div class="container-2">

    <!--The Loop-->

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="agent-img">
                <?php the_post_thumbnail() ?>



            </div>
		<?php endwhile; ?>
	<?php endif; ?>
    <?php wp_reset_postdata() ?>
</div>

<div class="container-partners">
	<span class="titlepartner"><?php the_field( 'titrepartner' ); ?></span>
<?php while ( have_rows( 'publogo' ) ) : the_row(); ?>
   <?php $image = get_sub_field('imagelogo'); ?>


        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />


        <?php endwhile; ?>
</div>
<?php get_footer(); ?>