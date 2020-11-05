<?php
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">

            <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>

        </div>
        <div class="col-md-3">

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php

get_footer();