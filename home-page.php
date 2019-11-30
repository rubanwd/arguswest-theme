<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section class="home-video"> 
    <video autoplay muted loop poster="<?php the_field('home_image'); ?>" id="myVideo">
        <source src="<?php the_field('home_video'); ?>" type="video/mp4">
    </video>
    <div class="home-video-dark-wrapp">
        <div class="home-video-title">
            <?php the_field('home_video_title'); ?>
        </div>
    </div>
</section>

<section class="home-about padding-responsive-center">
    <h1 class="logo-title logo-title-img">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-title.png" alt="logo">
        About <span>Arguswest</span>
    </h1>
    <div class="home-about__text">
        <?php the_field('home_about_text'); ?>
    </div>
    <div class="home-button">
        <a href="<?php echo get_site_url(); ?>/company-profile/">Learn More</a>
    </div>
</section>

<section class="home-servives">
    <h1 class="logo-title logo-title-white logo-title-img">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-title-white.png" alt="logo">
        Our <span>Services</span>
    </h1>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Insurance Services
                    </a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php the_field('insurance_services'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        National SIU Services
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php the_field('national_siu_services'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Litigation Support
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php the_field('litigation_support'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        Provider Fraud & Abuse
                    </a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php the_field('provider_fraud_&_abuse'); ?>
              </div>
            </div>
        </div>
    </div>
    <div class="home-services-green-wrapp"></div>
</section>

<!-- OUR APPLICATIONS -->
<section class="home-flippers">
    <div class="home-flippers__wrapp">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
                <div class="front" style="background-image: url('<?php the_field('first_flipper_background'); ?>');background-repeat: no-repeat;background-position:center;">
                    <article><?php the_field('first_flipper_title'); ?></article>
                    <div class="flip-wrapp"></div>
                </div>
                <a href="<?php echo get_site_url(); ?>/services/" class="back">
                    <p><?php the_field('first_flipper_description'); ?></p>
                </a>
            </div>
        </div>
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
                <div class="front" style="background-image: url('<?php the_field('second_flipper_background'); ?>');background-repeat: no-repeat;background-position:center;">
                    <article><?php the_field('second_flipper_title'); ?></article>
                    <div class="flip-wrapp"></div>
                </div>
                <a href="#contact-section" class="back">
                    <p>
                        <?php the_field('second_flipper_description'); ?>
                    </p>
                    
                </a>
            </div>
        </div>
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
                <div class="front" style="background-image: url('<?php the_field('third_flipper_background'); ?>');background-repeat: no-repeat;background-position:center;">
                     <article><?php the_field('third_flipper_title'); ?></article>
                     <div class="flip-wrapp"></div>
                </div>
                <a href="<?php echo get_site_url(); ?>/contact-us/" class="back">
                    <p><?php the_field('third_flipper_description'); ?></p>
                    
                </a>
            </div>
        </div>
    </div>
</section>
<section class="home-team">
    <h1 class="logo-title logo-title-img">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-title.png" alt="logo">
        Our <span>Team</span>
    </h1>
    <?php 
        $args = array(
            'posts_per_page' => '-1',
            'post_type' => 'team',
            'order'   => 'ASC'
        );
        $team = new WP_Query( $args ); 
    ?>
    <?php if ( $team->have_posts() ) : ?>
        <div id="myCarousel" class="carousel slide swipe-carousel" data-interval="3000" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $index = $wp_query->current_post; ?>
                <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo ++$index ?>"></li>
                <?php endwhile; ?>
            </ol>
            <div class="carousel-inner">
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
            <!-- Left and right controls -->
            <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a> -->
            <div class="home-button" style="margin-top: 150px;">
                <a href="<?php echo get_site_url(); ?>/our-team/">Learn More</a>
            </div>
        </div>
    <?php else: ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</section>

<section class="home-testimonials">
        <?php 
            $args = array(
                'posts_per_page' => '-1',
                'post_type' => 'testimonial',
                'order'   => 'ASC'
            );
            $testimonial = new WP_Query( $args ); 
        ?>
        <?php if ( $testimonial->have_posts() ) : ?>
            <div id="myCarousel-t" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $index = $wp_query->current_post; ?>
                    <?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?>
                        <li data-target="#myCarousel-t" data-slide-to="<?php echo ++$index ?>"></li>
                    <?php endwhile; ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?>
                        <div class="item">
                            <div>
                                <artiocle class="quote-text"><?php the_content() ?></artiocle>
                                <h3><?php the_title() ?></h3>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    <div class="home-services-green-wrapp"></div>
</section>

<section class="contact-section" id="contact-section">
    <h1 class="logo-title logo-title-img">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-title.png" alt="logo">
        Contact <span>Us</span>
    </h1>
    <h4>FEEL FREE TO CONTACT US FOR FAST FREE CONSULTATION</h4>
    <?php echo do_shortcode( '[contact-form-7 id="108" title="Contact form 1"]' ); ?>
</section>
<?php get_footer(); ?>  