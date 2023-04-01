<article>
    <div class="container">
        <?php
            while(have_posts()){
                the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="card">
                        <div class="card__header">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="card__image" class="card__image" width="600">
                            <div class="card-text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php }
        ?>
    </div>
</article>