<?php get_header(); ?>  
        
<div class="content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="page-thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php else: ?>
                <div class="page-thumbnail"><img src="<?php bloginfo('template_url'); ?>/img/header-default.jpg" alt="Img"></div>
            <?php endif; ?>
            <div class="page">

                <h1 class="logo-title logo-title-img">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo-title.png" alt="logo">
                    <?php the_title(); ?>
                </h1>

                <div class="page-text">
                    <?php the_content(); ?>
                </div>
                
                
            </div>
        <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
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


