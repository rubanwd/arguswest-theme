        <div class="footer-info">
            <img class="logo-footer" src="<?php bloginfo('template_url'); ?>/img/arguswest-logo.png" alt="logo">
            <div class="footer-cols">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("First_footer") ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Second_footer") ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Third_footer") ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Fourth_footer") ) : ?>
                <?php endif; ?>
            </div>
        </div>
		<footer>
            <p>Copyright &copy; <?php echo date("Y"); ?> ARGUSWEST. ALL RIGHTS RESERVED.</p>
            <p>
                <a href="https://www.facebook.com/Argus-West-Investigative-Services-188604477952059/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/company/argus-west-investigative-services" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="https://vimeo.com/arguswestinvestigations" target="_blank"><i class="fa fa-vimeo"></i></a>
            </p>
        </footer>  
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>


