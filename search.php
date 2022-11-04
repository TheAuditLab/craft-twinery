<?php get_header(); ?>
<?php

    $s=get_search_query();
    $args = array(
                    's' =>$s
                );
        // The Query
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
                    ?>
                        <div class="search-div">
                            <li>
                                <span>
                                    <div class="image-div">   
                                        <?php echo get_the_post_thumbnail(); ?>
                                    </div>
                                    <div class="text-div">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                        <div class="buttons">
                                            <a href="<?php the_permalink(); ?>" class="button">View Details</a>
                                        </div>
                                    </div>
                                </span>
                            </li>
                        </div>
                    <?php
        }
    }else{
    ?>
    <div class="container">
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
    </div>
<?php } ?>

<?php get_footer(); ?>