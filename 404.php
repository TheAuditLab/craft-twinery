<?php get_header(); ?>
<div class="container">
    <article id="post-0" class="post not-found">
    <header class="header">
    <h1 class="entry-title" itemprop="name"><?php esc_html_e( '404 ', 'generic' ); ?></h1>
    </header>
    <div class="entry-content" itemprop="mainContentOfPage">
    <p><?php esc_html_e( 'The page you are looking for does not exist. Try a search instead?', 'generic' ); ?></p>
    <?php get_search_form(); ?>
    </div>
    </article>
</div>
<?php include "template-blocks/account-block.php";  ?>
<?php get_footer(); ?>