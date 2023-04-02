<?php /* Template Name: Order Template*/ ?>

<?php get_header(); ?>
    <div class="container">
        <div class="text">
            <h1>Start your order</h1>
            <p>Submit an enquiry through our form and you'll receive a website draft within 5-10 working days.</p>
        </div>
        <div class="form">
             <div class="domain-checker">
                <?php echo do_shortcode('[wp24_domaincheck]'); ?>
            </div>
            <?php   
                echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');
            ?>
        </div>
    </div>
<?php get_footer(); ?>
