<?php get_header(); ?>
<div class="content">
	<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        	<div class="page">
        		<div class="single-post-content">
                    <div class="single-content-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="singlr-post-thumbnail"><?php the_post_thumbnail(); ?></div>
                        <?php else: ?>
                            <div class="singlr-post-thumbnail"><img src="<?php bloginfo('template_url'); ?>/img/image-not-found.png" alt="Img"></div>
                        <?php endif; ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <h3><?php the_date('F j, Y'); ?></h3>
        			<div class="single-post-text"><?php the_content(); ?></div>
                    <h5><b><?php the_field('post_author'); ?></b></h5>
        		</div>		
        	</div>
	    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
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