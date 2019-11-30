<?php 
/*
Template Name: Our Team
*/
?>

<?php get_header(); ?>  
<div class="content">
    <div class="page">
         <?php 
            $args = array(
                'posts_per_page' => '-1',
                'post_type' => 'team',
                'order'   => 'ASC'
            );
            $team = new WP_Query( $args ); 
        ?>
        <?php if ( $team->have_posts() ) : ?>
                <div class="our-team-page">

                    <h1 class="logo-title logo-title-img">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-title.png" alt="logo">
                        Our <span>Team</span>
                    </h1>

                    <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                            <div class="item">
                                <?php if ( get_field('person_photo') ) : ?>
                                    <img src="<?php the_field('person_photo'); ?>" alt="<?php the_title() ?>">
                                <?php else: ?>
                                    <img src="<?php bloginfo('template_url'); ?>/img/blank.jpg" alt="<?php the_title() ?>">
                                <?php endif; ?>
                                <h4><?php the_title() ?> - <span><?php the_field('person_psition'); ?></span></h4>
                                <h5>Email: <a href="mailto:<?php the_field('person_email'); ?>"><?php the_field('person_email'); ?></a></h5>
                                <h5>Phone: <?php the_field('person_phone'); ?></h5>
                                <p>
                                    <?php if ( get_field('person_short_info') ) : ?>
                                        <?php the_field('person_short_info'); ?>
                                    <?php else: ?>
                                        <?php echo wp_trim_words( get_field('person_info'), 50, '' ); ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                    <?php endwhile; ?>
                </div>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<section class="contact-section">
    <h1 class="logo-title logo-title-img">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-title.png" alt="logo">
        Contact <span>Us</span>
    </h1>
    <h4>FEEL FREE TO CONTACT US FOR FAST FREE CONSULTATION</h4>
    <?php echo do_shortcode( '[contact-form-7 id="108" title="Contact form 1"]' ); ?>
</section>
<?php get_footer(); ?>  