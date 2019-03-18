<?php /* Template Name: Gabarit a propos */?>
<?php get_header(); ?>


        <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :the_post(); ?>

                    <!--Titre + description-->

                    <span class="titlepartner">
                        <?php the_field( 'titre' ); ?>
                    </span>
                    <div class="container-03">
                        <div class="img-apropos">
                    <?php the_post_thumbnail() ?>
                        </div>
                        <div class="parag-apropos">
                    <?php the_field( 'paragraphe'); ?>
                        </div>
                    </div>

                    <!-- Répéteur row-->

                    <div class="bottom-page">
                    <?php while ( have_rows( 'repet-mid' ) ) : the_row(); ?>
                        <div class="bottom-content">
                            <i><?php the_sub_field( 'icone' ); ?></i>
                            <h3><?php the_sub_field( 'titre-repet' ); ?></h3>
                            <?php the_sub_field( 'contenu' ); ?>
                        </div>
                    <?php endwhile; ?>
                    </div>

                <?php endwhile; ?>
        <?php endif; ?>



    <div class="agent-apropos">
    <?php include ('gabarit-agents.php')?>
    </div>
    <?php get_footer(); ?>
