<?php get_header(); ?>  
<div class="content">
    <section class="header-page-image">
        <img src="<?php bloginfo('template_url'); ?>/img/header-15.jpg" alt="img">
    </section>
    <div class="page">
        <h1 class="logo-title logo-title-img" style="font-size: 25px;">
            <img src="<?php bloginfo('template_url'); ?>/img/logo-title.png" alt="logo">
            News
        </h1>
    	<?php if ( have_posts() ) : ?>
        <?php query_posts( 'order=DESC' ); ?>
            <div class="page-post-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post post-news clearfix">
                        <div class="image-news">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
                            <?php else: ?>
                                <div class="post-thumbnail"><img src="<?php bloginfo('template_url'); ?>/img/image-not-found.png" alt="Img"></div>
                            <?php endif; ?>
                        </div>
                        <div class="text-news">
                            <h4><?php the_title(); ?> - <?php the_date('F j, Y'); ?></h4>
                            <div class="post_excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="home-button">
                                <a href="<?php the_permalink(); ?>">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
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
</div>
<?php get_footer(); ?>  