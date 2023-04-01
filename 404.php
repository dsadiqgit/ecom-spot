<?php get_header(); ?>
<section id="404">
    <div class="container">
        <article id="post-0" class="post not-found">
        <header class="header">
        <h1 class="entry-title" itemprop="name"><?php esc_html_e( '404', 'generic' ); ?></h1>
        <h2>Page Not Found</h2>
        </header>
        <div class="entry-content" itemprop="mainContentOfPage">
            <p><?php esc_html_e( 'The page you are looking for does not seem to exist', 'generic' ); ?></p>
            <a class="home-btn" href="/#">GO BACK TO HOME</a> 
        </div>
        </article>
    </div>
</section>
<?php get_footer(); ?>