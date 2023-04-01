<?php /* Template Name: Order Template*/ ?>

<?php get_header(); ?>
    <div class="container">
        <?php   
            echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');
            echo do_shortcode('[wp24_domaincheck]');
        
        ?>
    </div>
<?php get_footer(); ?>
