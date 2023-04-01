<?php 
    get_header();
?>

<div class="container">
    <div class="single-img">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="card__image" class="card__image" width="600">
    </div>
    <?php
        while(have_posts()){
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php }
?>
</div>
<?php
    get_footer();
?>